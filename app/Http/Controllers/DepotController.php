<?php

namespace App\Http\Controllers;

use App\Depo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::user()->role == 1 || Auth::user()->role == 2){
            $depots = DB::table('depo')->orderBy('id')->get();

            return view('depots', array('depots' => $depots));

        } else {
            return redirect()->route('home');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role != 1) return redirect()->route('home');

        $addresses = DB::table('adrese')
            ->whereNotIn('id', DB::table('darbinieki')->pluck('adrese'))
            ->whereNotIn('id', DB::table('pietura')->pluck('atrasanas_vieta'))
            ->get();

        $directors = DB::table('darbinieki')
            ->join('amats', 'darbinieki.id', '=', 'amats.darba_pilditajs')
            ->where('amats.nosaukums', '=','Depo Vaditajs')
            ->whereNull('amats.depo')
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

        DB::table('amats')
            ->where('darba_pilditajs', $depot->depo_vaditajs)
            ->whereNull('darba_beigsanas_datums')
            ->where('nosaukums', '=','Depo Vaditajs')
            ->update([
                'depo' => $depot->id,
            ]);

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
        if(Auth::user()->role == 1 || Auth::user()->role == 2){
            $depot = DB::table('depo')
                ->join('darbinieki', 'depo.depo_vaditajs', '=', 'darbinieki.id')
                ->select('*', 'depo.epasts as depo_epasts', 'depo.id as depot_id')
                ->where('depo.id', $id)
                ->first();

            $address = DB::table('depo')
                ->join('adrese', 'depo.atrasanas_vieta', '=', 'adrese.id')
                ->select('adrese.*')
                ->where('depo.id', $id)
                ->first();

            return view('depot', array('depot' => $depot, 'address' => $address));

        } else {
            return redirect()->route('home');

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->role != 1) return redirect()->route('home');

        $addresses = DB::table('adrese')
            ->whereNotIn('id', DB::table('darbinieki')->pluck('adrese'))
            ->whereNotIn('id', DB::table('pietura')->pluck('atrasanas_vieta'))
            ->get();

        $directors = DB::table('darbinieki')
            ->join('amats', 'darbinieki.id', '=', 'amats.darba_pilditajs')
            ->where(function($query){
                $query->where('amats.nosaukums', '=','Depo Vaditajs')
                    ->whereNull('amats.depo')
                    ->whereNull('amats.darba_beigsanas_datums');
            })
            ->orWhere('amats.nosaukums', '=','Depo Vaditajs')
            ->where('amats.depo', $id)
            ->whereNull('amats.darba_beigsanas_datums')

            ->select('darbinieki.id as director_id','darbinieki.*')
            ->get();


        $depot = DB::table('depo')
            ->where('id', $id)
            ->first();

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
        date_default_timezone_set('Europe/Riga');

        $rules = array(
            'apraksts' => 'required|string|min:2|max:200',
            'depo_vaditajs' => 'numeric|min:1|nullable',
            'atrasanas_vieta' => 'required|numeric|min:1',
            'epasts' => 'required|string|min:2|max:30',
            'kontakttalrunis' => 'required|string|min:2|max:20',
        );

        $this->validate($request, $rules);

        $depot = DB::table('depo')->where('id', $id)->first();

        if($depot->depo_vaditajs != $request->depo_vaditajs && $depot->depo_vaditajs != NULL){
            DB::table('amats')
                ->where('depo', $id)
                ->whereNull('darba_beigsanas_datums')
                ->where('nosaukums', '=','Depo Vaditajs')
                ->update([
                    'darba_beigsanas_datums' => date('Y-m-d', time()),
            ]);
        }

        DB::table('amats')
            ->where('darba_pilditajs', $request->depo_vaditajs)
            ->whereNull('darba_beigsanas_datums')
            ->where('nosaukums', '=','Depo Vaditajs')
            ->whereNull('depo')
            ->update([
                'depo' => $depot->id,
        ]);

        DB::table('depo')
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
        if(Auth::user()->role != 1) return redirect()->route('home');

        date_default_timezone_set('Europe/Riga');

        $depo = DB::table('depo')->where('id', $id)->first();

        DB::table('amats')
            ->where('depo', $id)
            ->whereNull('darba_beigsanas_datums')
            ->update([
                'darba_beigsanas_datums' => date('Y-m-d', time()),
        ]);

        DB::table('transportlidzeklis')
            ->where('depo_nr', $id)
            ->update([
                'depo_nr' => NULL,
                'marsruta_id' => NULL,
        ]);

        DB::table('depo')->where('id', $id)->delete();

        return redirect()->route('allDepots');
    }
}
