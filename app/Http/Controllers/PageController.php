<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    //
    public function viewIndex(){
        $dataLost = DB::table('barang')->where('lostandfound', '=', 'lost')->join('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'barang.id_mahasiswa')
        ->orderBy('id_barang', 'desc')->limit(3)->get();

        $dataFound = DB::table('barang')->where('lostandfound', '=', 'found')->join('mahasiswa', 'mahasiswa.id_mahasiswa', '=', 'barang.id_mahasiswa')
        ->orderBy('id_barang', 'desc')->limit(3)->get();

        return view('lostandfound.index', compact('dataLost', 'dataFound'));
    }
    public function viewEditProfil(){
        return view('lostandfound.editProfil');
    }
    public function viewForgotPass(){
        return view('lostandfound.forgot-password');
    }
    public function viewFoundForm(){
        return view('lostandfound.foundform');
    }
    public function viewAbout(){
        return view('lostandfound.about');
    }
    public function viewHistory(){
        return view('lostandfound.history');
    }
    public function viewLogin(){
        return view('lostandfound.login');
    }
    public function viewLostForm(){
        return view('lostandfound.lostform');
    }
    public function viewRegister(){
        return view('lostandfound.register');
    }
    public function viewEditItemLost(){
        return view('lostandfound.editItemLost');
    }
    public function viewEditItemFound(){
        return view('lostandfound.editItemFound');
    }
}
