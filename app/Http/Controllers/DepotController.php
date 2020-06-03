<?php

namespace App\Http\Controllers;

use App\Depo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depots = DB::table('depo')->get();

        return view('depots', array('depots' => $depots));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addresses = DB::table('adrese')
            ->whereNotIn('id', DB::table('darbinieki')->pluck('adrese'))
            ->whereNotIn('id', DB::table('pietura')->pluck('atrasanas_vieta'))
            ->get();

        $directors = DB::table('darbinieki')
            ->join('amats', 'darbinieki.id', '=', 'amats.darba_pilditajs')
            ->where('amats.nosaukums', '=','Depo Vaditajs')
            ->whereNull('amats.darba_beigsanas_datums')
            ->select('darbinieki.id as director_id','darbinieki.*')
            ->get();

        return view('depot_create', array('addresses' => $addresses, 'directors' => $directors));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = $rules = array(
            'apraksts' => 'required|string|min:2|max:200',
            'depo_vaditajs' => 'numeric|min:1|nullable',
            'atrasanas_vieta' => 'required|numeric|min:1',
            'epasts' => 'required|string|min:2|max:30',
            'kontakttalrunis' => 'required|string|min:2|max:20',
        );

        $this->validate($request, $rules);

        $depot = new Depo();
        $depot->apraksts = $request->apraksts;
        $depot->depo_vaditajs = $request->depo_vaditajs;
        $depot->atrasanas_vieta = $request->atrasanas_vieta;
        $depot->epasts = $request->epasts;
        $depot->kontakttalrunis = $request->kontakttalrunis;
        $depot->save();

        return redirect()->route('depot.show', ['id' => $depot->id]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depot = DB::table('depo')->where('id', $id)->first();

        return view('depot', array('depot' => $depot));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addresses = DB::table('adrese')
            ->whereNotIn('id', DB::table('darbinieki')->pluck('adrese'))
            ->whereNotIn('id', DB::table('pietura')->pluck('atrasanas_vieta'))
            ->get();

        $directors = DB::table('darbinieki')
            ->join('amats', 'darbinieki.id', '=', 'amats.darba_pilditajs')
            ->where('amats.nosaukums', '=','Depo Vaditajs')
            ->whereNull('amats.darba_beigsanas_datums')
            ->select('darbinieki.id as director_id','darbinieki.*')
            ->get();

        $depot = DB::table('depo')
            ->where('id', $id)
            ->first();

        dump($depot, $addresses);

        return view('depot_edit', array('addresses' => $addresses, 'directors' => $directors, 'depot' => $depot));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = $rules = array(
            'apraksts' => 'required|string|min:2|max:200',
            'depo_vaditajs' => 'numeric|min:1|nullable',
            'atrasanas_vieta' => 'required|numeric|min:1',
            'epasts' => 'required|string|min:2|max:30',
            'kontakttalrunis' => 'required|string|min:2|max:20',
        );

        $this->validate($request, $rules);

        $depot = DB::table('depo')
            ->where('id', $id)
            ->update([
                'apraksts' => $request->apraksts,
                'depo_vaditajs' => $request->depo_vaditajs,
                'atrasanas_vieta' => $request->atrasanas_vieta,
                'epasts' => $request->epasts,
                'kontakttalrunis' => $request->kontakttalrunis,
            ]);

        return redirect()->route('depot.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('depo')->where('id', $id)->delete();

        return redirect()->route('allDepots');
    }
}
