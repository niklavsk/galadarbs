<?php

namespace App\Http\Controllers;
use App\MarsrutaPieturas;
use App\Marsruti;
use App\PienaksanasLaiki;
use Illuminate\Support\Facades\Auth;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 1 || Auth::user()->role == 2){
            session()->forget('kartasNr');

            $routes = DB::table('marsruti')->orderBy('id')->get();

            return view('routes', array('routes' => $routes));

        } else {
            return redirect()->route('home');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(Auth::user()->role != 1) return redirect()->route('home');

        $stops = DB::table('pietura')->get();

        if($request->session()->has('kartasNr')){
            $kartasNr = session()->get('kartasNr');
        } else {
            $kartasNr = 4;
            $request->session()->put('kartasNr', $kartasNr);
        }

        $pieturas = DB::table('pietura')->get();

        return view('route_create', array('stops' => $stops, 'kartasNr' => $kartasNr, 'empty' => false, 'duplicate' => false, 'pieturas' => $pieturas));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kartasNr = $request->kartasNr;
        $stops = DB::table('pietura')->get();
        $empty = false;
        $duplicate = false;
        $pieturas = DB::table('pietura')->get();

        for($i = 1; $i <= $kartasNr; $i++){
            if($request->$i == NULL){
                $empty = true;
            }
        }

        for($i = 1; $i <= $kartasNr; $i=$i+1){
            for($j = $i+1; $j <= $kartasNr; $j=$j+1){
                if($request->$i == $request->$j && $request->$i != NULL){
                    $duplicate = true;
                }
            }
        }

        $validator = Validator::make($request->all(), [
            'nosaukums' => 'required|string|min:2|max:50',
            'apraksts' => 'required|string|min:2|max:200',
        ]);

        if ($validator->fails()) {
            return view('route_create', array('stops' => $stops, 'kartasNr' => $kartasNr, 'empty' => $empty, 'duplicate' => $duplicate, 'errors' => $validator->messages(), 'pieturas' => $pieturas));
        } else if ($empty == true || $duplicate == true) {
            return view('route_create', array('stops' => $stops, 'kartasNr' => $kartasNr, 'empty' => $empty, 'duplicate' => $duplicate, 'pieturas' => $pieturas));
        }

        $route = new Marsruti();
        $route->nosaukums = $request->nosaukums." (turp)";
        $route->apraksts = $request->apraksts;
        $route->save();

        for($i = 1; $i <= $kartasNr; $i++){
            $routeStop = new MarsrutaPieturas();
            $routeStop->pieturas_kartas_nr = $i;
            $routeStop->pietura = $request->$i;
            $routeStop->marsruta_id = $route->id;
            $routeStop->save();
        }

        $route = new Marsruti();
        $route->nosaukums = $request->nosaukums." (atpakaļ)";
        $route->apraksts = $request->apraksts;
        $route->save();

        for($i = 1; $i <= $kartasNr; $i++){
            $routeStop = new MarsrutaPieturas();
            $routeStop->pieturas_kartas_nr = $kartasNr - $i + 1;
            $routeStop->pietura = $request->$i;
            $routeStop->marsruta_id = $route->id;
            $routeStop->save();
        }

        session()->forget('kartasNr');
        return redirect()->route('route.edit', ['id' => $route->id]);
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
            session()->forget('kartasNr');

            $route = DB::table('marsruti')->where('id', $id)->first();
            $stops = DB::table('marsruta_pieturas')->where('marsruta_id', $id)->orderBy('pieturas_kartas_nr', 'asc')->get();

            $pieturas = DB::table('pietura')->get();

            $times = DB::table('pienaksanas_laiki')
                ->whereIn('marsruta_pietura', DB::table('marsruta_pieturas')->where('marsruta_id', $id)->pluck('id'))
                ->orderBy('laiks')
                ->get();

            $delete = DB::table('pienaksanas_laiki')
                ->join('marsruta_pieturas', 'pienaksanas_laiki.marsruta_pietura', '=', 'marsruta_pieturas.id')
                ->select('*', 'pienaksanas_laiki.id as time_id')
                ->whereIn('pienaksanas_laiki.marsruta_pietura', DB::table('marsruta_pieturas')->where('marsruta_id', $id)->pluck('id'))
                ->where('marsruta_pieturas.pieturas_kartas_nr', '=', 1)
                ->orderBy('laiks')
                ->get();

            return view('route', array('route' => $route, 'stops' => $stops, 'times' => $times, 'delete' => $delete, 'pieturas' => $pieturas));

        } else {
            return redirect()->route('home');

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if(Auth::user()->role != 1) return redirect()->route('home');

        $stops = DB::table('pietura')->get();

        $route = DB::table('marsruti')->where('id', $id)->first();
        $routeStops = DB::table('marsruta_pieturas')->where('marsruta_id', $id)->get();

        if($request->session()->has('kartasNr')){
            $kartasNr = session()->get('kartasNr');
        } else {
            $kartasNr = DB::table('marsruta_pieturas')->where('marsruta_id', $id)
                ->select('pieturas_kartas_nr')
                ->orderBy('pieturas_kartas_nr', 'desc')
                ->first();

            if($kartasNr != NULL){
                $kartasNr = $kartasNr->pieturas_kartas_nr;
                $request->session()->put('kartasNr', $kartasNr);
            } else {
                $kartasNr = 0;
                $request->session()->put('kartasNr', $kartasNr);
            }

        }

        return view('route_edit', array('stops' => $stops, 'kartasNr' => $kartasNr, 'empty' => false, 'duplicate' => false, 'route' => $route, 'routeStops' => $routeStops));
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
        $route = DB::table('marsruti')->where('id', $id)->first();
        $routeStops = DB::table('marsruta_pieturas')->where('marsruta_id', $id)->get();

        $kartasNr = $request->kartasNr;
        $stops = DB::table('pietura')->get();
        $empty = false;
        $duplicate = false;

        for($i = 1; $i <= $kartasNr; $i++){
            if($request->$i == NULL){
                $empty = true;
            }
        }

        for($i = 1; $i <= $kartasNr; $i=$i+1){
            for($j = $i+1; $j <= $kartasNr; $j=$j+1){
                if($request->$i == $request->$j && $request->$i != NULL){
                    $duplicate = true;
                }
            }
        }

        $validator = Validator::make($request->all(), [
            'nosaukums' => 'required|string|min:2|max:50',
            'apraksts' => 'required|string|min:2|max:200',
        ]);

        if ($validator->fails()) {
            return view('route_edit', ['id' => $id], array('stops' => $stops, 'kartasNr' => $kartasNr, 'empty' => $empty, 'duplicate' => $duplicate, 'errors' => $validator->messages(), 'route' => $route, 'routeStops' => $routeStops));
        } else if ($empty == true || $duplicate == true) {
            return view('route_edit', ['id' => $id], array('stops' => $stops, 'kartasNr' => $kartasNr, 'empty' => $empty, 'duplicate' => $duplicate, 'route' => $route, 'routeStops' => $routeStops));
        }


        DB::table('marsruti')
            ->where('id', $id)
            ->update([
                'nosaukums' => $request->nosaukums,
                'apraksts' => $request->apraksts,
            ]);

        DB::table('marsruta_pieturas')->where('marsruta_id', $id)->delete();

        DB::table('pienaksanas_laiki')
            ->whereNotIn('marsruta_pietura', DB::table('marsruta_pieturas')->pluck('id'))
            ->delete();

        for($i = 1; $i <= $kartasNr; $i++){
            $routeStop = new MarsrutaPieturas();
            $routeStop->pieturas_kartas_nr = $i;
            $routeStop->pietura = $request->$i;
            $routeStop->marsruta_id = $route->id;
            $routeStop->save();
        }

        session()->forget('kartasNr');

        return redirect()->route('route.show', ['id' => $id]);
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

        DB::table('transportlidzeklis')
            ->where('marsruta_id', $id)
            ->update([
                'marsruta_id' => NULL,
            ]);

        DB::table('marsruti')->where('id', $id)->delete();
        DB::table('marsruta_pieturas')->where('marsruta_id', $id)->delete();

        DB::table('pienaksanas_laiki')
            ->whereNotIn('marsruta_pietura', DB::table('marsruta_pieturas')->pluck('id'))
            ->delete();

        return redirect()->route('allRoutes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addStop(Request $request)
    {
        if(Auth::user()->role != 1) return redirect()->route('home');

        $kartasNr = session()->get('kartasNr');
        session()->forget('kartasNr');

        $kartasNr = $kartasNr + 1;
        $request->session()->put('kartasNr', $kartasNr);

        return redirect()->route('route.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function removeStop(Request $request)
    {
        if(Auth::user()->role != 1) return redirect()->route('home');

        $kartasNr = session()->get('kartasNr');

        if($kartasNr != 1){
            session()->forget('kartasNr');

            $kartasNr = $kartasNr - 1;
            $request->session()->put('kartasNr', $kartasNr);
        }

        return redirect()->route('route.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addStop_edit(Request $request, $id)
    {
        if(Auth::user()->role != 1) return redirect()->route('home');

        $kartasNr = session()->get('kartasNr');
        session()->forget('kartasNr');

        $kartasNr = $kartasNr + 1;
        $request->session()->put('kartasNr', $kartasNr);

        return redirect()->route('route.edit', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function removeStop_edit(Request $request, $id)
    {
        if(Auth::user()->role != 1) return redirect()->route('home');

        $kartasNr = session()->get('kartasNr');

        if($kartasNr != 0){
            session()->forget('kartasNr');

            $kartasNr = $kartasNr - 1;
            $request->session()->put('kartasNr', $kartasNr);
        }

        return redirect()->route('route.edit', ['id' => $id]);
    }

    /**
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createTimetable($id)
    {
        if(Auth::user()->role != 1) return redirect()->route('home');

        $stops = DB::table('marsruta_pieturas')->where('marsruta_id', $id)->orderBy('pieturas_kartas_nr', 'asc')->get();

        $pieturas = DB::table('pietura')->get();

        return view('timetable_create', array('stops' => $stops, 'empty' => false, 'duplicate' => false, 'wrongOrder' => false, 'pieturas' => $pieturas));
    }

    /**
     *
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTimetable(Request $request, $id)
    {

        $stopCount = DB::table('marsruta_pieturas')->where('marsruta_id', $id)->count();
        $stops = DB::table('marsruta_pieturas')->where('marsruta_id', $id)->orderBy('pieturas_kartas_nr', 'asc')->get();

        $empty = false;
        $duplicate = false;
        $wrongOrder = false;

        for($i = 0; $i < $stopCount; $i++){
            if($request->$i == NULL){
                $empty = true;
            }
        }

        for($i = 0; $i < $stopCount; $i++){
            for($j = $i+1; $j < $stopCount; $j++){
                if($request->$i == $request->$j && $request->$i != NULL){
                    $duplicate = true;
                }
            }
        }

        for($i = 1; $i < $stopCount; $i++){
            $j = $i - 1;

            if($request->$i < $request->$j){
                $wrongOrder = true;
            }
        }

        if ($empty == true || $duplicate == true || $wrongOrder == true) {
            return view('timetable_create', array('stops' => $stops, 'empty' => $empty, 'duplicate' => $duplicate, 'wrongOrder' => $wrongOrder));
        }

        for($i = 0; $i < $stopCount; $i++){
            $pietura = DB::table('marsruta_pieturas')
                ->where('marsruta_id', $id)
                ->where('pieturas_kartas_nr', '=', $i+1)
                ->first();

            $time = new PienaksanasLaiki();
            $time->laiks = $request->$i;
            $time->marsruta_pietura = $pietura->id;
            $time->save();
        }

        return redirect()->route('route.show', ['id' => $id]);
    }

    /**
     *
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroyTimetable(Request $request, $id)
    {
        if(Auth::user()->role != 1) return redirect()->route('home');

        $stopCount = DB::table('marsruta_pieturas')->where('marsruta_id', $id)->count();
        $start_id = $request->toDelete;
        $end_id = $start_id + $stopCount;

        for($i = $start_id; $i < $end_id; $i++){
            $a = DB::table('pienaksanas_laiki')
                ->where('id', $i)
                ->delete();
        }

        return redirect()->route('route.show', ['id' => $id]);
    }

    public function postSearch(Request $request)
    {
        return DB::table('marsruti')
            ->where('id', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('nosaukums', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('apraksts', 'LIKE', '%'. $request->get('search') .'%')
            ->orderBy('id')
            ->get();
    }
}
