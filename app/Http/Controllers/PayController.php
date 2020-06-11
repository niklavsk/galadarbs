<?php

namespace App\Http\Controllers;

use App\MaksajumuVesture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login_id = Auth::id();
        $user = DB::table('darbinieki')->where('user_id', $login_id)->first();
        $lietotajs = DB::table('users')->where('id', $login_id)->first();

        if ($lietotajs->role == 1) //admin
        {
            $payrolls = DB::table('maksajumu_vesture')->get();
        }
        elseif ($lietotajs->role == 0) //regular
        {
            $payrolls = DB::table('maksajumu_vesture')->where('pers_kods', '=', $user->id)->get();
        }
        elseif ($lietotajs->role == 2 || $lietotajs->role == 4) //depot main or accountaint
        {
            $depoNum = DB::table('amats')->where('pers_kods', '=', $user->id)->pluck('depo');
            $usersUnder = DB::table('darbinieki')->where('depo', '=', $depoNum)->pluck('id')->toArray();

            $payrolls = DB::table('maksajumu_vesture')->whereIn('pers_kods', $usersUnder)->get();
        }
        elseif ($lietotajs->role == 3) //department main
        {
            $nodNum = DB::table('amats')->where('pers_kods', '=', $user->id)->pluck('nodala');;
            $usersUnder = DB::table('darbinieki')->where('depo', '=', $nodNum)->pluck('id')->toArray();

            $payrolls = DB::table('maksajumu_vesture')->whereIn('pers_kods', $usersUnder)->get();
        }

        return view('payrolls', array('payrolls' => $payrolls, 'role' => $lietotajs->role));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $start_date = date('Y-m-d', strtotime('first day of previous month'));
        $end_date = date('Y-m-d', strtotime('last day of previous month'));

        $employees = DB::table('darbinieki')
            ->join('amats', 'darbinieki.id', '=', 'amats.darba_pilditajs')
            ->whereNull('amats.darba_beigsanas_datums')
            ->orWhereBetween('amats.darba_beigsanas_datums', [$start_date, $end_date])
            ->select('*', 'amats.id as job_id', 'darbinieki.id as emp_id')
            ->orderBy('darbinieki.id')
            ->get();

        $employeesCount = DB::table('darbinieki')
            ->join('amats', 'darbinieki.id', '=', 'amats.darba_pilditajs')
            ->whereNull('amats.darba_beigsanas_datums')
            ->orWhereBetween('amats.darba_beigsanas_datums', [$start_date, $end_date])
            ->count();

        $request->session()->put('employees', $employees);
        $request->session()->put('employeesCount', $employeesCount);

        return view('payroll_create', array('employees' => $employees, 'error' => false));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('Europe/Riga');
        $employees = $request->session()->get('employees');
        $employeesCount = $request->session()->get('employeesCount');

        $error = false;

        for($i = 0; $i < $employeesCount; $i++){

            if($request->$i == NULL){
                $error = true;

            } elseif(!is_numeric($request->$i)){
                $error = true;

            } elseif($request->$i < 0) {
                $error = true;

            }
        }

        if ($error) {
            return view('payroll_create', array('employees' => $employees,'error' => $error));
        }

        $request->session()->forget('employees');
        $request->session()->forget('employeesCount');

        for($i = 0; $i < $employeesCount; $i++){

            $maksajums = new MaksajumuVesture();
            $maksajums->pers_kods = $employees[$i]->emp_id;
            $maksajums->amats = $employees[$i]->job_id;
            $maksajums->likme = $employees[$i]->stundas_likme;
            $maksajums->stundu_sk = $request->$i;
            $maksajums->izsniegsanas_datums = date('Y-m-d', time());
            $maksajums->save();
        }

        return redirect()->route('allPayrolls');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payroll = DB::table('maksajumu_vesture')->where('id', $id)->first();
        $employee = DB::table('darbinieki')->where('id', $payroll->pers_kods)->first();

        return view('payroll', array('employee' => $employee, 'payroll' => $payroll));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $payroll = DB::table('maksajumu_vesture')->where('id', $id)->first();
//
//        return view('payroll_edit', array('payroll'=>$payroll));
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
//        $validator = Validator::make($request->all(), [
//            'stundu_sk' => 'required|integer',
//        ]);
//        if ($validator->fails()) {
//            $payroll = DB::table('maksajumu_vesture')->where('id', $id)->first();
//
//            return view('payroll_edit', array('errors' => $validator->messages(), 'payroll'=>$payroll));
//        }
//
//        DB::table('maksajumu_vesture')->where('id', $id)
//            ->update([
//                'stundu_sk' => $request->stundu_sk,
//            ]);
//
//        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        DB::table('maksajumu_vesture')->where('id', $id)->delete();
//        return redirect()->route('allPayrolls');
    }
}
