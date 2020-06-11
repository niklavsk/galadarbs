<?php

namespace App\Http\Controllers;

use App\MaksajumuVesture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PayController extends Controller
{
    /* testing git
     *
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payrolls = DB::table('maksajumu_vesture')->get();

        return view('payrolls', array('payrolls' => $payrolls));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amati = DB::table('amats')->whereNull('darba_beigsanas_datums')->get();
        $lastPayrollDate = DB::table('maksajumu_vesture')->max('izsniegsanas_datums');
        $beigtieAmati = DB::table('amats')->where('darba_beigsanas_datums','>',$lastPayrollDate)->get();


        return view('payroll_create', array('aktualie' => $amati, 'atlaistie' => $beigtieAmati));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'stundu_sk' => 'required|integer',
        ]);
        if ($validator->fails()) {
            $amati = DB::table('amats')->whereNull('darba_beigsanas_datums')->get();
            $lastPayrollDate = DB::table('maksajumu_vesture')->max('izsniegsanas_datums');
            $beigtieAmati = DB::table('maksajumu_vesture')->has('izsniegsanas_datums','>',$lastPayrollDate)->get();

            return view('payroll_create', array('errors' => $validator->messages(), 'aktualie' => $amati, 'atlaistie' => $beigtieAmati));
        }

        $maksajums = new MaksajumuVesture();
        $maksajums->pers_kods = $request->pers_kods;
        $maksajums->amats = $request->amats;
        $maksajums->likme = $request->likme;
        $maksajums->stundu_sk = $request->stundu_sk;
        $maksajums->izsniegsanas_datums = $request->izsniegsanas_datums;
        $maksajums->save();

        return redirect()->route('payroll.show', ['id' => $maksajums->id]);
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
        $payroll = DB::table('maksajumu_vesture')->where('id', $id)->first();

        return view('payroll_edit', array('payroll'=>$payroll));
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
        $validator = Validator::make($request->all(), [
            'stundu_sk' => 'required|integer',
        ]);
        if ($validator->fails()) {
            $payroll = DB::table('maksajumu_vesture')->where('id', $id)->first();

            return view('payroll_edit', array('errors' => $validator->messages(), 'payroll'=>$payroll));
        }

        DB::table('maksajumu_vesture')->where('id', $id)
            ->update([
                'stundu_sk' => $request->stundu_sk,
            ]);

        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('maksajumu_vesture')->where('id', $id)->delete();
        return $this->index();
    }

    //for submitting multiple payments
    public function submitMany(Request $request)
    {
        foreach ($request as $form)
        {
            $this->store($form);
        }
    }
}
