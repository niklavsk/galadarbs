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
        $payrolls = $this->getPayrolls();

        return view('payrolls', array('payrolls' => $payrolls));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        if(Auth::user()->role == 1) {
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

            $nodalas = DB::table('nodala')->get();

            $request->session()->put('employees', $employees);
            $request->session()->put('employeesCount', $employeesCount);

            return view('payroll_create', array('employees' => $employees, 'error' => false, 'nodalas' => $nodalas));

        } elseif(Auth::user()->role == 4){

            $user = DB::table('darbinieki')
                ->join('users', 'darbinieki.user_id', '=', 'users.id')
                ->select('*', 'darbinieki.id as d_id')
                ->where('user_id', Auth::user()->id)
                ->first();

            $depoNum = DB::table('amats')
                ->where('darba_pilditajs', '=', $user->d_id)
                ->where('nosaukums', '=', 'Gramatvedis')
                ->whereNull('darba_beigsanas_datums')
                ->pluck('depo');

            $start_date = date('Y-m-d', strtotime('first day of previous month'));
            $end_date = date('Y-m-d', strtotime('last day of previous month'));

            $this_start_date = date('Y-m-d', strtotime('first day of this month'));
            $this_end_date = date('Y-m-d', strtotime('last day of this month'));

            $employees = DB::table('darbinieki')
                ->join('amats', 'darbinieki.id', '=', 'amats.darba_pilditajs')
                ->where(function ($query) use ($depoNum, $this_start_date, $this_end_date) {
                    $query->whereNull('amats.darba_beigsanas_datums')
                        ->where('amats.depo', '=', $depoNum)
                        ->whereNotIn('darbinieki.id',
                            DB::table('maksajumu_vesture')
                                ->whereBetween('izsniegsanas_datums', [$this_start_date, $this_end_date])
                                ->pluck('maksajumu_vesture.pers_kods')
                        );

                })->orWhere(function ($query) use ($start_date, $end_date, $depoNum, $this_start_date, $this_end_date) {
                    $query->orWhereBetween('amats.darba_beigsanas_datums', [$start_date, $end_date])
                        ->where('amats.depo', '=', $depoNum)
                        ->whereNotIn('darbinieki.id',
                            DB::table('maksajumu_vesture')
                                ->whereBetween('maksajumu_vesture.izsniegsanas_datums', [$this_start_date, $this_end_date])
                                ->pluck('maksajumu_vesture.pers_kods')
                        );
                })

                ->select('*', 'amats.id as job_id', 'darbinieki.id as emp_id')
                ->orderBy('darbinieki.id')
                ->get();

            $employeesCount = DB::table('darbinieki')
                ->join('amats', 'darbinieki.id', '=', 'amats.darba_pilditajs')
                ->where(function ($query) use ($depoNum, $this_start_date, $this_end_date) {
                    $query->whereNull('amats.darba_beigsanas_datums')
                        ->where('amats.depo', '=', $depoNum)
                        ->whereNotIn('darbinieki.id',
                            DB::table('maksajumu_vesture')
                                ->whereBetween('izsniegsanas_datums', [$this_start_date, $this_end_date])
                                ->pluck('maksajumu_vesture.pers_kods')
                        );

                })->orWhere(function ($query) use ($start_date, $end_date, $depoNum, $this_start_date, $this_end_date) {
                    $query->orWhereBetween('amats.darba_beigsanas_datums', [$start_date, $end_date])
                        ->where('amats.depo', '=', $depoNum)
                        ->whereNotIn('darbinieki.id',
                            DB::table('maksajumu_vesture')
                                ->whereBetween('maksajumu_vesture.izsniegsanas_datums', [$this_start_date, $this_end_date])
                                ->pluck('maksajumu_vesture.pers_kods')
                        );
                })

                ->select('*', 'amats.id as job_id', 'darbinieki.id as emp_id')
                ->orderBy('darbinieki.id')
                ->count();

            $nodalas = DB::table('nodala')->get();

            $request->session()->put('employees', $employees);
            $request->session()->put('employeesCount', $employeesCount);

            return view('payroll_create', array('employees' => $employees, 'error' => false, 'nodalas' => $nodalas));

        } else {
            return redirect()->route('home');

        }
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
        $nodalas = DB::table('nodala')->get();

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
            return view('payroll_create', array('employees' => $employees,'error' => $error, 'nodalas' => $nodalas));
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
        $payrolls = $this->getPayrolls();

        foreach ($payrolls as $pay){

            if($pay->pay_id == $id){
                $payroll = DB::table('maksajumu_vesture')
                    ->join('darbinieki', 'maksajumu_vesture.pers_kods', '=', 'darbinieki.id')
                    ->join('amats', 'maksajumu_vesture.amats', '=', 'amats.id')
                    ->select('*', 'maksajumu_vesture.id as pay_id', 'darbinieki.id as emp_id')
                    ->where('maksajumu_vesture.id', $id)
                    ->first();

                return view('payroll', array('payroll' => $payroll));
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
    public function edit($id){

        if(Auth::user()->role == 1 || Auth::user()->role == 4){
            $payrolls = $this->getPayrolls();

            foreach ($payrolls as $pay){

                if($pay->pay_id == $id){
                    $payroll = DB::table('maksajumu_vesture')
                        ->join('darbinieki', 'maksajumu_vesture.pers_kods', '=', 'darbinieki.id')
                        ->join('amats', 'maksajumu_vesture.amats', '=', 'amats.id')
                        ->where('maksajumu_vesture.id', $id)
                        ->select('*', 'maksajumu_vesture.id as pay_id')
                        ->first();

                    return view('payroll_edit', array('payroll' => $payroll));
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
    public function update(Request $request, $id){

        $rules = $rules = array(
            'stundu_sk' => 'required|numeric|min:0',
        );

        $this->validate($request, $rules);

        DB::table('maksajumu_vesture')->where('id', $id)
            ->update([
                'stundu_sk' => $request->stundu_sk,
            ]);

        return redirect()->route('payroll.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        if(Auth::user()->role == 1 || Auth::user()->role == 4){
            $payrolls = $this->getPayrolls();

            foreach ($payrolls as $pay){

                if($pay->pay_id == $id){
                    DB::table('maksajumu_vesture')->where('id', $id)->delete();
                    return redirect()->route('allPayrolls');
                }
            }

            return redirect()->route('home');

        } else {
            return redirect()->route('home');
        }
    }

    protected function getPayrolls(){
        $user = DB::table('darbinieki')
            ->join('users', 'darbinieki.user_id', '=', 'users.id')
            ->select('*', 'darbinieki.id as d_id')
            ->where('user_id', Auth::user()->id)
            ->first();

        if($user->role == 0){ //regular

            $payrolls = DB::table('maksajumu_vesture')
                ->join('darbinieki', 'maksajumu_vesture.pers_kods', '=', 'darbinieki.id')
                ->select('*', 'maksajumu_vesture.id as pay_id')
                ->where('maksajumu_vesture.pers_kods','=', $user->d_id)
                ->orderBy('maksajumu_vesture.id')
                ->get();

        } elseif ($user->role == 1){ //admin

            $payrolls = DB::table('maksajumu_vesture')
                ->join('darbinieki', 'maksajumu_vesture.pers_kods', '=', 'darbinieki.id')
                ->select('*', 'maksajumu_vesture.id as pay_id')
                ->orderBy('maksajumu_vesture.id')
                ->get();

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

            $payrolls = DB::table('maksajumu_vesture')
                ->join('darbinieki', 'maksajumu_vesture.pers_kods', '=', 'darbinieki.id')
                ->select('*', 'maksajumu_vesture.id as pay_id')
                ->whereIn('maksajumu_vesture.pers_kods', $usersUnder)
                ->orWhere('maksajumu_vesture.pers_kods', '=', $user->d_id)
                ->orderBy('maksajumu_vesture.id')
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

            $payrolls = DB::table('maksajumu_vesture')
                ->join('darbinieki', 'maksajumu_vesture.pers_kods', '=', 'darbinieki.id')
                ->select('*', 'maksajumu_vesture.id as pay_id')
                ->whereIn('maksajumu_vesture.pers_kods', $usersUnder)
                ->orWhere('maksajumu_vesture.pers_kods', '=', $user->d_id)
                ->orderBy('maksajumu_vesture.id')
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

            $payrolls = DB::table('maksajumu_vesture')
                ->join('darbinieki', 'maksajumu_vesture.pers_kods', '=', 'darbinieki.id')
                ->select('*', 'maksajumu_vesture.id as pay_id')
                ->whereIn('maksajumu_vesture.pers_kods', $usersUnder)
                ->orWhere('maksajumu_vesture.pers_kods', '=', $user->d_id)
                ->orderBy('maksajumu_vesture.id')
                ->get();
        }

        return $payrolls;
    }

    public function postSearch(Request $request)
    {
        $login_id = Auth::id();
        $user = DB::table('darbinieki')->where('user_id', $login_id)->first();
        $lietotajs = DB::table('users')->where('id', $login_id)->first();

        if ($lietotajs->role == 1) // admin
        {
            return DB::table('maksajumu_vesture')
                ->join('darbinieki', 'maksajumu_vesture.pers_kods', '=', 'darbinieki.id')
                ->where('darbinieki.vards', 'LIKE', '%'. $request->get('search') .'%')
                ->orWhere('darbinieki.uzvards', 'LIKE', '%'. $request->get('search') .'%')
                ->orWhere('darbinieki.id', 'LIKE', '%'. $request->get('search') .'%')
                ->select('darbinieki.vards as vards', 'darbinieki.uzvards as uzvards', 'darbinieki.pk as pk',
                    'maksajumu_vesture.id as pay_id', 'maksajumu_vesture.likme as likme',
                    'maksajumu_vesture.stundu_sk as stundu_sk', 'maksajumu_vesture.izsniegsanas_datums as izsniegsanas_datums')
                ->get();
        }
        elseif ($lietotajs->role == 4) // accountaint
        {
            $depoNum = DB::table('amats')->where('pers_kods', '=', $user->id)->pluck('depo');
            $usersUnder = DB::table('darbinieki')->where('depo', '=', $depoNum)->pluck('id')->toArray();

            return $payrolls = DB::table('maksajumu_vesture')
                ->join('darbinieki', 'maksajumu_vesture.pers_kods', '=', 'darbinieki.id')
                ->whereIn('maksajumu_vesture.pers_kods', $usersUnder)
                ->where('darbinieki.vards', 'LIKE', '%'. $request->get('search') .'%')
                ->orWhere('darbinieki.uzvards', 'LIKE', '%'. $request->get('search') .'%')
                ->orWhere('darbinieki.id', 'LIKE', '%'. $request->get('search') .'%')
                ->select('darbinieki.vards as vards', 'darbinieki.uzvards as uzvards', 'darbinieki.id as pk',
                    'maksajumu_vesture.id as pay_id', 'maksajumu_vesture.likme as likme',
                    'maksajumu_vesture.stundu_sk as stundu_sk', 'maksajumu_vesture.izsniegsanas_datums as izsniegsanas_datums')
                ->get();
        }

    }
}
