<?php

namespace App\Http\Controllers;
use App\Adrese;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Darbinieki;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
        $employees = $this->getEmployees();

        return view('employees', array('employees' => $employees));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role != 1) return redirect()->route('home');

        return view('employee_create');
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
            'pk' => 'required|string|min:2|max:20',
            'vards' => 'required|string|min:2|max:20',
            'otrais_vards' => 'nullable|string|min:2|max:20',
            'uzvards' => 'required|string|min:2|max:20',
            'talrunis' => 'nullable|string|min:2|max:20',
            'epasts' => 'nullable|string|min:2|max:30',

            'valsts' => 'required|string|min:2|max:20',
            'novads' => 'nullable|string|min:2|max:20',
            'pilseta' => 'nullable|string|min:2|max:30',
            'iela' => 'nullable|string|min:2|max:30',
            'majas_nr' => 'nullable|string|min:1|max:10',
            'pagasts' => 'nullable|string|min:2|max:30',
            'majas_nosaukums' => 'nullable|string|min:2|max:20',
            'pasta_indekss' => 'required|string|min:2|max:10',
        );

        $this->validate($request, $rules);

        $address = new Adrese();
        $address->valsts = $request->valsts;
        $address->novads = $request->novads;
        $address->pilseta = $request->pilseta;
        $address->iela = $request->iela;
        $address->majas_nr = $request->majas_nr;
        $address->pagasts = $request->pagasts;
        $address->majas_nosaukums = $request->majas_nosaukums;
        $address->pasta_indekss = $request->pasta_indekss;
        $address->save();

        $employee = new Darbinieki();
        $employee->pk = $request->pk;
        $employee->vards = $request->vards;
        $employee->otrais_vards = $request->otrais_vards;
        $employee->uzvards = $request->uzvards;
        $employee->adrese = $address->id;
        $employee->talrunis = $request->talrunis;
        $employee->epasts = $request->epasts;
        $employee->save();

        return redirect()->route('employee.show', ['id' => $employee->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees = $this->getEmployees();

        foreach ($employees as $emp){

            if($emp->id == $id){
                $employee = DB::table('darbinieki')
                    ->join('adrese', 'darbinieki.adrese', '=', 'adrese.id')
                    ->where('darbinieki.id', $id)
                    ->select('*', 'darbinieki.id as empid')
                    ->first();

                $jobCount = DB::table('amats')
                    ->where('darba_pilditajs', $id)
                    ->whereNull('darba_beigsanas_datums')
                    ->count();

                $jobs = DB::table('amats')->where('darba_pilditajs', $id)->get();

                $nodalas = DB::table('nodala')->get();

                return view('employee', array('employee' => $employee, 'jobs' => $jobs, 'jobCount' => $jobCount, 'nodalas' => $nodalas));
            }
        }

        return redirect()->route('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = $this->getEmployees();

        foreach ($employees as $emp){

            if($emp->id == $id){
                $employee = DB::table('darbinieki')
                    ->join('adrese', 'darbinieki.adrese', '=', 'adrese.id')
                    ->where('darbinieki.id', $id)
                    ->first();

                return view('employee_edit', array('employee' => $employee));
            }
        }

        return redirect()->route('home');
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
            'pk' => 'required|string|min:2|max:20',
            'vards' => 'required|string|min:2|max:20',
            'otrais_vards' => 'nullable|string|min:2|max:20',
            'uzvards' => 'required|string|min:2|max:20',
            'talrunis' => 'nullable|string|min:2|max:20',
            'epasts' => 'nullable|string|min:2|max:30',

            'valsts' => 'required|string|min:2|max:20',
            'novads' => 'nullable|string|min:2|max:20',
            'pilseta' => 'nullable|string|min:2|max:30',
            'iela' => 'nullable|string|min:2|max:30',
            'majas_nr' => 'nullable|string|min:1|max:10',
            'pagasts' => 'nullable|string|min:2|max:30',
            'majas_nosaukums' => 'nullable|string|min:2|max:20',
            'pasta_indekss' => 'required|string|min:2|max:10',
        );

        $this->validate($request, $rules);

        DB::table('darbinieki')
            ->where('id', $id)
            ->update([
                'pk' => $request->pk,
                'vards' => $request->vards,
                'otrais_vards' => $request->otrais_vards,
                'uzvards' => $request->uzvards,
                'talrunis' => $request->talrunis,
                'epasts' => $request->epasts,
            ]);

        $employee = DB::table('darbinieki')
            ->where('id', $id)
            ->first();

        DB::table('adrese')
            ->where('id', $employee->adrese)
            ->update([
                'valsts' => $request->valsts,
                'novads' => $request->novads,
                'pilseta' => $request->pilseta,
                'iela' => $request->iela,
                'majas_nr' => $request->majas_nr,
                'pagasts' => $request->pagasts,
                'majas_nosaukums' => $request->majas_nosaukums,
                'pasta_indekss' => $request->pasta_indekss,
            ]);

        return redirect()->route('employee.show', ['id' => $id]);
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

        DB::table('amats')
            ->where('darba_pilditajs', $id)
            ->whereNull('darba_beigsanas_datums')
            ->update([
                'darba_beigsanas_datums' => date('Y-m-d', time()),
            ]);

        return redirect()->route('employee.show', ['id' => $id]);
    }

    public function showProfile()
    {
        $login_id = Auth::id();
        $user = DB::table('darbinieki')->where('user_id', $login_id)->first();
        $id = $user->id;

        $employee = DB::table('darbinieki')
            ->join('adrese', 'darbinieki.adrese', '=', 'adrese.id')
            ->where('darbinieki.id', $id)
            ->select('*', 'darbinieki.id as empid')
            ->first();

        $jobCount = DB::table('amats')
            ->where('darba_pilditajs', $id)
            ->whereNull('darba_beigsanas_datums')
            ->count();

        $jobs = DB::table('amats')->where('darba_pilditajs', $id)->get();

        $nodalas = DB::table('nodala')->get();

        return view('employee', array('employee' => $employee, 'jobs' => $jobs, 'jobCount' => $jobCount, 'nodalas' => $nodalas));
    }

    /**
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function addJob_add($id){

        if(Auth::user()->role != 1) return redirect()->route('home');

        $employee = DB::table('darbinieki')->where('id', $id)->first();
        $jobs = DB::table('amats')->whereNull('darba_pilditajs')->get();

        return view('employeeJob_create', array('employee' => $employee, 'jobs' => $jobs));
    }

    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function addJob_store(Request $request, $id){
        DB::table('amats')
            ->where('id', $request->job)
            ->whereNull('darba_pilditajs')
            ->update([
                'darba_pilditajs' => $id,
                'darba_uzsaksanas_datums' => date('Y-m-d', time()),
        ]);

        return redirect()->route('employee.show', ['id' => $id]);
    }

    /**
     *
     *
     * @param  int  $id
     * @param  int  $job
     * @return \Illuminate\Http\Response
     */

    public function removeJob($id, $job){

        if(Auth::user()->role != 1) return redirect()->route('home');

        DB::table('amats')
            ->where('id', $job)
            ->update([
                'darba_beigsanas_datums' => date('Y-m-d', time()),
            ]);

        return redirect()->route('employee.show', ['id' => $id]);
    }

    protected function getEmployees(){
        $user = DB::table('darbinieki')
            ->join('users', 'darbinieki.user_id', '=', 'users.id')
            ->select('*', 'darbinieki.id as d_id')
            ->where('user_id', Auth::user()->id)
            ->first();

        if ($user->role == 1) //admin
        {
            $employees = DB::table('darbinieki')->orderBy('id')->get();
        }

        elseif ($user->role == 2) { //depot main

            $depoNum = DB::table('amats')
                ->where('darba_pilditajs', '=', $user->d_id)
                ->where('nosaukums', '=', 'Depo Vaditajs')
                ->whereNull('darba_beigsanas_datums')
                ->pluck('depo');

            $usersUnder = DB::table('amats')
                ->where('depo', '=', $depoNum)
                ->pluck('darba_pilditajs');

            $employees = DB::table('darbinieki')
                ->whereIn('id', $usersUnder)
                ->get();

        } elseif ($user->role == 4) { //accountant

            $depoNum = DB::table('amats')
                ->where('darba_pilditajs', '=', $user->d_id)
                ->where('nosaukums', '=', 'Gramatvedis')
                ->whereNull('darba_beigsanas_datums')
                ->pluck('depo');

            $usersUnder = DB::table('amats')
                ->where('depo', '=', $depoNum)
                ->pluck('darba_pilditajs');

            $employees = DB::table('darbinieki')
                ->whereIn('id', $usersUnder)
                ->get();

        } elseif ($user->role == 3) { //department main

            $nodNum = DB::table('amats')
                ->where('darba_pilditajs', '=', $user->d_id)
                ->where('nosaukums', 'like', '%nodalas vaditajs')
                ->whereNull('darba_beigsanas_datums')
                ->pluck('nodala');

            $usersUnder = DB::table('amats')
                ->where('nodala', '=', $nodNum)
                ->pluck('darba_pilditajs');

            $employees = DB::table('darbinieki')
                ->whereIn('id', $usersUnder)
                ->get();
        }

        return $employees;
    }
}
