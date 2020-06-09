<?php

namespace App\Http\Controllers;
use App\MarsrutaPieturas;
use App\Marsruti;
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
        session()->forget('kartasNr');

        $routes = DB::table('marsruti')->get();

        return view('routes', array('routes' => $routes));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $stops = DB::table('pietura')->get();

        if($request->session()->has('kartasNr')){
            $kartasNr = session()->get('kartasNr');
        } else {
            $kartasNr = 4;
            $request->session()->put('kartasNr', $kartasNr);
        }

        return view('route_create', array('stops' => $stops, 'kartasNr' => $kartasNr, 'empty' => false, 'duplicate' => false));
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
            'nosaukums' => 'required|string|min:2|max:30',
            'apraksts' => 'required|string|min:2|max:200',
        ]);

        if ($validator->fails()) {
            return view('route_create', array('stops' => $stops, 'kartasNr' => $kartasNr, 'empty' => $empty, 'duplicate' => $duplicate, 'errors' => $validator->messages()));
        } else if ($empty == true || $duplicate == true) {
            return view('route_create', array('stops' => $stops, 'kartasNr' => $kartasNr, 'empty' => $empty, 'duplicate' => $duplicate));
        }

        $route = new Marsruti();
        $route->nosaukums = $request->nosaukums;
        $route->apraksts = $request->apraksts;
        $route->save();

        for($i = 1; $i <= $kartasNr; $i++){
            $routeStop = new MarsrutaPieturas();
            $routeStop->pieturas_kartas_nr = $i;
            $routeStop->pietura = $request->$i;
            $routeStop->marsruta_id = $route->id;
            $routeStop->save();
        }

        session()->forget('kartasNr');
        return redirect()->route('route.show', ['id' => $route->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        session()->forget('kartasNr');

        $route = DB::table('marsruti')->where('id', $id)->first();
        $stops = DB::table('marsruta_pieturas')->where('marsruta_id', $id)->orderBy('pieturas_kartas_nr', 'asc')->get();

        return view('route', array('route' => $route, 'stops' => $stops));
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
            'nosaukums' => 'required|string|min:2|max:30',
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

        $kartasNr = session()->get('kartasNr');

        if($kartasNr != 0){
            session()->forget('kartasNr');

            $kartasNr = $kartasNr - 1;
            $request->session()->put('kartasNr', $kartasNr);
        }

        return redirect()->route('route.edit', ['id' => $id]);
    }
}
