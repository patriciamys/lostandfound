<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class MahasiswaController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $data = DB::table('mahasiswa')->where('user_id', Session::get('users_id'))->first();

        $dataMahasiswa = [
            'dataMahasiswa' => $data
        ];

        return view('lostandfound.editprofil', $dataMahasiswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'fullname' => ['required', 'string'],
            'email' => ['required', 'string'],
        ]);
        
        $query = DB::table('mahasiswa')->where('user_id', Session::get('users_id'))
                ->update([
                    'nama'=>$request->input('fullname'),
                    'nim'=>$request->input('nim'),
                    'prodi'=>$request->input('prodi'),
                    'email'=>$request->input('email'),
                    'no_telepon'=>$request->input('no_telepon'),
                ]);
        return redirect('lostandfound/profil')->with('success', 'Data simpan');
    }
    public function viewProfil(){
        $data = DB::table('mahasiswa')->where('user_id', Session::get('users_id'))->first();

        $dataMahasiswa = [
            'dataMahasiswa' => $data
        ];
        return view('lostandfound.profil', $dataMahasiswa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
