<?php

namespace App\Http\Controllers;

use App\Pietura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stops = DB::table('pietura')
            ->join('adrese', 'pietura.atrasanas_vieta', '=', 'adrese.id')
            ->select('pietura.*', 'adrese.iela', 'adrese.majas_nr')
            ->orderBy('id')
            ->get();

        return view('stops', array('stops' => $stops));
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
            ->whereNotIn('id', DB::table('nodala')->pluck('atrasanas_vieta'))
            ->whereNotIn('id', DB::table('depo')->pluck('atrasanas_vieta'))
            ->orderBy('id')
            ->get();

        return view('stop_create', array('addresses' => $addresses));
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
            'nosaukums' => 'required|string|min:2|max:100',
            'atrasanas_vieta' => 'required|numeric|min:1',
        );

        $this->validate($request, $rules);

        $stop = new Pietura();
        $stop->nosaukums = $request->nosaukums;
        $stop->atrasanas_vieta = $request->atrasanas_vieta;
        $stop->save();

        return redirect()->route('stop.show', ['id' => $stop->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stop = DB::table('pietura')->where('id', $id)->first();

        $address = DB::table('pietura')
            ->join('adrese', 'pietura.atrasanas_vieta', '=', 'adrese.id')
            ->select('adrese.*')
            ->where('pietura.id', $id)
            ->first();

        return view('stop', array('stop' => $stop, 'address' => $address));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pietura = DB::table('Pietura')->where('id', $id)->first();

        $addresses = DB::table('adrese')
            ->where(function($query){
                $query->whereNotIn('id', DB::table('darbinieki')->pluck('adrese'))
                    ->whereNotIn('id', DB::table('pietura')->pluck('atrasanas_vieta'))
                    ->whereNotIn('id', DB::table('nodala')->pluck('atrasanas_vieta'))
                    ->whereNotIn('id', DB::table('depo')->pluck('atrasanas_vieta'));
            })
            ->orWhere('id', $pietura->atrasanas_vieta)
            ->get();

        $stop = DB::table('pietura')
            ->where('id', $id)
            ->first();

        return view('stop_edit', array('addresses' => $addresses, 'stop' => $stop));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pienaksanas_laiki')
            ->whereIn('marsruta_pietura', DB::table('marsruta_pieturas')->where('pietura', $id)->pluck('id'))
            ->delete();

        $routes = DB::table('marsruta_pieturas')->where('pietura', $id)->pluck('marsruta_id');

        foreach ($routes as $route) {

            $stopCount = DB::table('marsruta_pieturas')->where('marsruta_id', $route)->max('pieturas_kartas_nr');
            $stopStart = DB::table('marsruta_pieturas')->where('marsruta_id', $route)->where('pietura', $id)->pluck('pieturas_kartas_nr');
            $stopStart = $stopStart[0];

            for($i = $stopStart+1; $i <= $stopCount; $i++){

                DB::table('marsruta_pieturas')
                    ->where('marsruta_id', $route)
                    ->where('pieturas_kartas_nr', $i)
                    ->update([
                        'pieturas_kartas_nr' => $i-1,
                    ]);

            }
        }

        DB::table('marsruta_pieturas')->where('pietura', $id)->delete();
        DB::table('pietura')->where('id', $id)->delete();

        return redirect()->route('allStops');
    }

    public function postSearch(Request $request)
    {
        return DB::table('pietura')
            ->leftJoin('adrese', 'pietura.atrasanas_vieta','=','adrese.id')
            ->where('pietura.id', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('pietura.nosaukums', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('adrese.valsts', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('adrese.pilseta', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('adrese.iela', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('adrese.majas_nr', 'LIKE', '%'. $request->get('search') .'%')
            ->select('pietura.id as id', 'pietura.nosaukums as nosaukums', 'adrese.iela as iela', 'adrese.majas_nr as majas_nr')
            ->get();
    }
}
