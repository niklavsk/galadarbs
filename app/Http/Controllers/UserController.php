<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Mail;
use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
            ->join('darbinieki', 'users.id', '=', 'darbinieki.user_id')
            ->select('*', 'users.id as u_id')
            ->orderBy('users.id')
            ->get();

        return view('users', array('users' => $users));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = DB::table('darbinieki')
            ->whereNull('user_id')
            ->orderBy('id')
            ->get();

        $roles = [ 0 => __('messages.Ordinary_user'),
            1 => __('messages.Admin'),
            2 => __('messages.Depot_director'),
            3 => __('messages.Department_director'),
            4 => __('messages.Accountant')];

        return view('user_create', array('employees' => $employees, 'roles' => $roles));
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
            'darbinieks' => 'required|numeric|min:1',
            'email' => 'required|string|min:2|max:50',
            'password' => 'required|string|min:2|max:50',
            'role' => 'required|numeric|min:0|max:4',
        );

        $this->validate($request, $rules);

        $employee = DB::table('darbinieki')
            ->where('id', $request->darbinieks)
            ->first();

        $user = new User();
        $user->name = $employee->vards;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        DB::table('darbinieki')
            ->where('id', $request->darbinieks)
            ->update([
                'user_id' => $user->id
            ]);

        return $this->sendMail();
//        return redirect()->route('user.show', ['id' => $user->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = DB::table('users')
            ->join('darbinieki', 'users.id', '=', 'darbinieki.user_id')
            ->where('users.id', $id)
            ->select('*', 'users.id as u_id')
            ->orderBy('users.id')
            ->first();

        $roles = [ 0 => __('messages.Ordinary_user'),
            1 => __('messages.Admin'),
            2 => __('messages.Depot_director'),
            3 => __('messages.Department_director'),
            4 => __('messages.Accountant')];

        return view('user', array('user' => $user, 'roles' => $roles));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $employee = DB::table('darbinieki')
            ->where('user_id', $id)
            ->first();

        $request->session()->put('name', $employee->vards);

        $roles = [ 0 => __('messages.Ordinary_user'),
            1 => __('messages.Admin'),
            2 => __('messages.Depot_director'),
            3 => __('messages.Department_director'),
            4 => __('messages.Accountant')];

        $user = DB::table('users')
            ->where('id', $id)
            ->first();

        return view('user_edit', array('employee' => $employee, 'roles' => $roles, 'user' => $user));
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
            'email' => 'required|string|min:2|max:50',
            'password' => 'required|string|min:2|max:50',
            'role' => 'required|numeric|min:0|max:4',
        );

        $this->validate($request, $rules);

        $name = $request->session()->get('name');

        DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);

        return redirect()->route('user.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('darbinieki')
            ->where('user_id', $id)
            ->update([
                'user_id' => NULL,
            ]);

        DB::table('users')->where('id', $id)->delete();

        return redirect()->route('allUsers');
    }

    public function sendMail()
    {
        $login_id = Auth::id();
        $user = DB::table('darbinieki')->where('user_id', $login_id)->first();

        if($user->otrais_vards != NULL)
        {
            $to_name = $user->vards . ' ' . $user->otrais_vards . ' ' . $user->uzvards;
        } else {
            $to_name = $user->vards . ' ' . $user->uzvards;
        }

//        $to_email = $user->epasts; //izkomentēts, lai varētu pārbaudīt, ka strādā, izmantojot nākošo līniju
        $to_email = 'anitra.beinare@gmail.com';
        $data = array('name'=> $to_name, 'body' => "Test mail");

        Mail::send('emails/testMail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('RiMSIS pieslēguma izveidošana');
            $message->from('rimsislv@gmail.com','RiMSIS Administrators');
        });

        return redirect()->route('user.show', ['id' => $user->id]);
    }

    public function postSearch(Request $request)
    {
        return DB::table('users')
            ->join('darbinieki', 'users.id', '=', 'darbinieki.user_id')
            ->where('users.email', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('darbinieki.vards', 'LIKE', '%'. $request->get('search') .'%')
            ->orWhere('darbinieki.uzvards', 'LIKE', '%'. $request->get('search') .'%')
            ->select('darbinieki.vards as vards', 'darbinieki.uzvards as uzvards', 'users.email as email', 'users.id as id')
            ->get();
    }
}
