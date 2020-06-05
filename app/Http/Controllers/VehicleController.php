<?php

namespace App\Http\Controllers;

use App\Transportlidzeklis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = DB::table('transportlidzeklis')->get();

        return view('vehicles', array('vehicles' => $vehicles));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depots = DB::table('depo')->get();
        $routes = DB::table('marsruti')->get();

        return view('vehicle_create', array('depots' => $depots, 'routes' => $routes));
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
            'tehniskas_parbaudes_termins' => 'required|date|date_format:Y-m-d|after:today',
            'pedeja_remonta_datums' => 'nullable|date|date_format:Y-m-d|before:tomorrow|after:razosanas_datums',
            'razosanas_datums' => 'required|date|date_format:Y-m-d|before:tomorrow',
            'razotajs' => 'required|string|min:2|max:50',
            'depo_nr' => 'required|numeric|min:1',
            'marsruta_id' => 'nullable|numeric|min:1',
        );

        $this->validate($request, $rules);

        $vehicle = new Transportlidzeklis();
        $vehicle->tehniskas_parbaudes_termins = $request->tehniskas_parbaudes_termins;
        $vehicle->pedeja_remonta_datums = $request->pedeja_remonta_datums;
        $vehicle->razosanas_datums = $request->razosanas_datums;
        $vehicle->razotajs = $request->razotajs;
        $vehicle->depo_nr = $request->depo_nr;
        $vehicle->marsruta_id = $request->marsruta_id;
        $vehicle->save();

        return redirect()->route('vehicle.show', ['id' => $vehicle->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = DB::table('transportlidzeklis')->where('id', $id)->first();

        return view('vehicle', array('vehicle' => $vehicle));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = DB::table('transportlidzeklis')->where('id', $id)->first();
        $depots = DB::table('depo')->get();
        $routes = DB::table('marsruti')->get();

        return view('vehicle_edit', array('vehicle' => $vehicle, 'depots' => $depots, 'routes' => $routes));
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
            'tehniskas_parbaudes_termins' => 'required|date|date_format:Y-m-d|after:today',
            'pedeja_remonta_datums' => 'nullable|date|date_format:Y-m-d|before:tomorrow|after:razosanas_datums',
            'razosanas_datums' => 'required|date|date_format:Y-m-d|before:tomorrow',
            'razotajs' => 'required|string|min:2|max:50',
            'depo_nr' => 'required|numeric|min:1',
            'marsruta_id' => 'nullable|numeric|min:1',
        );

        $this->validate($request, $rules);

        $vehicle = DB::table('transportlidzeklis')
            ->where('id', $id)
            ->update([
                'tehniskas_parbaudes_termins' => $request->tehniskas_parbaudes_termins,
                'pedeja_remonta_datums' => $request->pedeja_remonta_datums,
                'razosanas_datums' => $request->razosanas_datums,
                'razotajs' => $request->razotajs,
                'depo_nr' => $request->depo_nr,
                'marsruta_id' => $request->marsruta_id,
                ]);

        return redirect()->route('vehicle.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('transportlidzeklis')->where('id', $id)->delete();

        return redirect()->route('allVehicles');
    }
}
