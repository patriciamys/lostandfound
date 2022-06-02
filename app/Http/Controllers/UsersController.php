<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $request->validate([
            'fullname' => ['required', 'string'],
            'username' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', 'min:8'],
        ]);
        
        $query = DB::table('users')->insert([
            'username'=>$request->input('username'),
            'password'=>$request->input('password'),
        ]);

        if ($query){
            $user_id = DB::table('users')->where('username', '=', $request->input('username'))->select('id_users')->first();
            
            $query = DB::table('mahasiswa')->insert([
                'nama'=>$request->input('fullname'),
                'email'=>$request->input('email'),
                'user_id'=>$user_id->id_users,
            ]);

            return redirect('/');
        }

        // Users::create([
        //     'username' => $request->username,
        //     'password' => $request->password,
        // ]);
        // if ($insertUser->save()) {
        //     Mahasiswa::create([
        //         'nama' => $request->fullname,
        //         'email' => $request->email,
        //     ]);
        // }

        // return redirect('/');
    }

    public function postlogin(Request $request)
    {
        $data = DB::table('users')->where('username', $request->username)->where('password', $request->password)->join('mahasiswa', 'mahasiswa.user_id', '=', 'users.id_users')->first();

        if($data){
            $request->session()->put('nama', $data->nama);
            $request->session()->put('username', $data->username);
            $request->session()->put('users_id', $data->id_users);

            return redirect('lostandfound/index');
        }

        return redirect('/')->with('error', 'Invalid username or password!');
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        session_unset();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }

}
