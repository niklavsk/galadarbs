<?php

namespace App\Http\Controllers;

use App\Nodala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        if(Auth::user()->role == 1 || Auth::user()->role == 3){
            $departments = DB::table('nodala')->orderBy('id')->get();

            return view('departments', array('departments' => $departments));

        } else {
            return redirect()->route('home');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        if(Auth::user()->role != 1) return redirect()->route('home');

        $addresses = DB::table('adrese')
            ->whereNotIn('id', DB::table('darbinieki')->pluck('adrese'))
            ->whereNotIn('id', DB::table('pietura')->pluck('atrasanas_vieta'))
            ->get();

        $directors = DB::table('darbinieki')
            ->join('amats', 'darbinieki.id', '=', 'amats.darba_pilditajs')
            ->where('amats.nosaukums', 'like','%' . 'nodalas vaditajs')
            ->whereNull('amats.darba_beigsanas_datums')
            ->select('darbinieki.id as director_id','darbinieki.*')
            ->get();

        return view('department_create', array('addresses' => $addresses, 'directors' => $directors));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $rules = $rules = array(
            'apraksts' => 'required|string|min:2|max:50',
            'nodalas_vaditajs' => 'numeric|min:1|nullable',
            'atrasanas_vieta' => 'required|numeric|min:1',
            'epasts' => 'required|string|min:2|max:30',
            'kontakttalrunis' => 'required|string|min:2|max:20',
        );

        $this->validate($request, $rules);

        $department = new Nodala();
        $department->apraksts = $request->apraksts;
        $department->nodalas_vaditajs = $request->nodalas_vaditajs;
        $department->atrasanas_vieta = $request->atrasanas_vieta;
        $department->epasts = $request->epasts;
        $department->kontakttalrunis = $request->kontakttalrunis;
        $department->save();

        return redirect()->route('department.show', ['id' => $department->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        if(Auth::user()->role == 1 || Auth::user()->role == 3){
            $department = DB::table('nodala')
                ->join('darbinieki', 'nodala.nodalas_vaditajs', '=', 'darbinieki.id')
                ->select('*', 'nodala.epasts as nod_epasts', 'nodala.id as dep_id')
                ->where('nodala.id', $id)
                ->first();

            $address = DB::table('nodala')
                ->join('adrese', 'nodala.atrasanas_vieta', '=', 'adrese.id')
                ->select('adrese.*')
                ->where('nodala.id', $id)
                ->first();

            return view('department', array('department' => $department, 'address' => $address));

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

        if(Auth::user()->role != 1) return redirect()->route('home');

        $addresses = DB::table('adrese')
            ->whereNotIn('id', DB::table('darbinieki')->pluck('adrese'))
            ->whereNotIn('id', DB::table('pietura')->pluck('atrasanas_vieta'))
            ->get();

        $directors = DB::table('darbinieki')
            ->join('amats', 'darbinieki.id', '=', 'amats.darba_pilditajs')
            ->where('amats.nosaukums', 'like','%' . 'nodalas vaditajs')
            ->whereNull('amats.darba_beigsanas_datums')
            ->select('darbinieki.id as director_id','darbinieki.*')
            ->get();

        $department = DB::table('nodala')
            ->where('id', $id)
            ->first();

        return view('department_edit', array('addresses' => $addresses, 'directors' => $directors, 'department' => $department));
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

        $rules = $rules = array(
            'apraksts' => 'required|string|min:2|max:50',
            'nodalas_vaditajs' => 'numeric|min:1|nullable',
            'atrasanas_vieta' => 'required|numeric|min:1',
            'epasts' => 'required|string|min:2|max:30',
            'kontakttalrunis' => 'required|string|min:2|max:20',
        );

        $this->validate($request, $rules);

        $department = DB::table('nodala')->where('id', $id)->first();

        if($department->nodalas_vaditajs != $request->nodalas_vaditajs && $department->nodalas_vaditajs != NULL){
            DB::table('amats')
                ->where('nodala', $id)
                ->whereNull('darba_beigsanas_datums')
                ->where('nosaukums', 'like','%' . 'nodalas vaditajs')
                ->update([
                    'darba_beigsanas_datums' => date('Y-m-d', time()),
                ]);
        }

        DB::table('nodala')
            ->where('id', $id)
            ->update([
                'apraksts' => $request->apraksts,
                'nodalas_vaditajs' => $request->nodalas_vaditajs,
                'atrasanas_vieta' => $request->atrasanas_vieta,
                'epasts' => $request->epasts,
                'kontakttalrunis' => $request->kontakttalrunis,
            ]);

        return redirect()->route('department.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        if(Auth::user()->role != 1) return redirect()->route('home');

        date_default_timezone_set('Europe/Riga');

        $nodala = DB::table('nodala')->where('id', $id)->first();

        DB::table('amats')
            ->where('nodala', $id)
            ->whereNull('darba_beigsanas_datums')
            ->update([
                'darba_beigsanas_datums' => date('Y-m-d', time()),
            ]);

        DB::table('nodala')->where('id', $id)->delete();

        return redirect()->route('allDepartments');
    }

    public function postSearch (Request $request)
    {
        return DB::table('nodala')
            ->where('id', 'LIKE', '%'.$request->get('search').'%')
            ->orWhere('apraksts', 'LIKE', '%'.$request->get('search').'%')->get();
    }
}
