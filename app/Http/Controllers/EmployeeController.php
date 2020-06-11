<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Mail\testMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Mail;
use App\Darbinieki;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = DB::table('darbinieki')->orderBy('id')->get();

        return view('employees', array('employees' => $employees));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = DB::table('darbinieki')->where('id', $id)->first();
        $jobs = DB::table('amats')->where('darba_pilditajs', $id)->get();

        return view('employee', array('employee' => $employee, 'jobs' => $jobs));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    public function showProfile()
    {
        $login_id = Auth::id();
        $user = DB::table('darbinieki')->where('user_id', $login_id)->first();
        $id = $user->id;

        $employee = DB::table('darbinieki')->where('id', $id)->first();
        $jobs = DB::table('amats')->where('darba_pilditajs', $id)->get();

        return view('employee', array('employee' => $employee, 'jobs' => $jobs));
    }


    public function sendMail()
    {
        $login_id = Auth::id();
        $user = DB::table('darbinieki')->where('user_id', $login_id)->first();

        $to_name = $user->vards;
//        $to_email = $user->epasts; //izkomentēts, lai varētu pārbaudīt, ka strādā, izmantojot nākošo līniju
        $to_email = 'anitra.beinare@gmail.com';
        $data = array('name'=> $to_name, 'body' => "Test mail");

        Mail::send('emails/testMail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('RiMSIS pieslēguma izveidošana');
            $message->from('rimsislv@gmail.com','RiMSIS Administrators');
        });

        return $this->showProfile();
    }
}
