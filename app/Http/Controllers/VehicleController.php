<?php

namespace App\Http\Controllers;

use App\Transportlidzeklis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = $this->getVehicles();

        $marsruti = DB::table('marsruti')->get();

        return view('vehicles', array('vehicles' => $vehicles, 'marsruti' => $marsruti));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        if(Auth::user()->role != 1) return redirect()->route('home');

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
    public function store(Request $request){

        $rules = $rules = array(
            'tehniskas_parbaudes_termins' => 'required|date|date_format:Y-m-d|after:today',
            'pedeja_remonta_datums' => 'nullable|date|date_format:Y-m-d|before:tomorrow|after:razosanas_datums',
            'razosanas_datums' => 'required|date|date_format:Y-m-d|before:tomorrow',
            'razotajs' => 'required|string|min:2|max:50',
            'depo_nr' => 'nullable|numeric|min:1',
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
        if(Auth::user()->role == 1 || Auth::user()->role == 2){

            $vehicles = $this->getVehicles();

            foreach ($vehicles as $vehi){

                if($vehi->id == $id){
                    $vehicle = DB::table('transportlidzeklis')->where('id', $id)->first();
                    $marsruti = DB::table('marsruti')->get();

                    return view('vehicle', array('vehicle' => $vehicle, 'marsruti' => $marsruti));
                }
            }

            return redirect()->route('home');

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
    public function edit($id){

        if(Auth::user()->role == 1 || Auth::user()->role == 2){
            $vehicles = $this->getVehicles();

            foreach ($vehicles as $vehi){

                if($vehi->id == $id){
                    $vehicle = DB::table('transportlidzeklis')->where('id', $id)->first();
                    $depots = DB::table('depo')->get();
                    $routes = DB::table('marsruti')->get();

                    return view('vehicle_edit', array('vehicle' => $vehicle, 'depots' => $depots, 'routes' => $routes));
                }
            }

            return redirect()->route('home');

        } else {
            return redirect()->route('home');

        }


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
            'depo_nr' => 'nullable|numeric|min:1',
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
        if(Auth::user()->role != 1) return redirect()->route('home');

        DB::table('transportlidzeklis')->where('id', $id)->delete();

        return redirect()->route('allVehicles');
    }

    protected function getVehicles(){
        $user = DB::table('darbinieki')
            ->join('users', 'darbinieki.user_id', '=', 'users.id')
            ->select('*', 'darbinieki.id as d_id')
            ->where('user_id', Auth::user()->id)
            ->first();

        if ($user->role == 1){ //admin

            $vehicles = DB::table('transportlidzeklis')->orderBy('id')->get();
        }

        elseif ($user->role == 2) { //depot main

            $depoNum = DB::table('amats')
                ->where('darba_pilditajs', '=', $user->d_id)
                ->where('nosaukums', '=', 'Depo Vaditajs')
                ->whereNull('darba_beigsanas_datums')
                ->pluck('depo');

            $vehicles = DB::table('transportlidzeklis')
                ->where('depo_nr', '=', $depoNum)
                ->orderBy('id')
                ->get();

        }

        return $vehicles;
    }

    public function postSearch(Request $request)
    {
        return DB::table('transportlidzeklis')
            ->leftJoin('marsruti', 'transportlidzeklis.marsruta_id', '=', 'marsruti.id')
            ->where('transportlidzeklis.id', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('transportlidzeklis.razotajs', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('transportlidzeklis.depo_nr', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('transportlidzeklis.marsruta_id', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('marsruti.apraksts', 'LIKE', '%'. $request->get('search') .'%')
            ->select('transportlidzeklis.id as id', 'marsruti.id as marsruta_id', 'transportlidzeklis.razotajs as razotajs',
                'transportlidzeklis.depo_nr as depo_nr', 'marsruti.apraksts as apraksts')
            ->orderBy('transportlidzeklis.id')
            ->get();
    }
}
