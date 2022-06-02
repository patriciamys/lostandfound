<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('lostandfound/login');
});

Route::get('/dashboard', function () {
    return view('lostandfound/index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('lostandfound/index', [PageController::class, 'viewIndex']);
Route::get('lostandfound/editProfil', [PageController::class, 'viewEditProfil']);
Route::get('lostandfound/forgot-password', [PageController::class, 'viewForgotPass']);
Route::get('lostandfound/foundform', [PageController::class, 'viewFoundForm']);
Route::get('lostandfound/about', [PageController::class, 'viewAbout']);
Route::get('lostandfound/lostform', [PageController::class, 'viewLostForm']);
Route::get('lostandfound/register', [PageController::class, 'viewRegister']);

Route::get('lostandfound/editItemFound', [PageController::class, 'viewEditItemFound']);

Route::post('lostandfound/registerproses', [UsersController::class, 'store']);
Route::post('lostandfound/loginproses', [UsersController::class, 'postlogin']);
Route::get('logout', [UsersController::class, 'logout']);

Route::get('lostandfound/editprofil', [MahasiswaController::class, 'edit']);
Route::post('lostandfound/saveprofil', [MahasiswaController::class, 'update']);
Route::get('lostandfound/profil', [MahasiswaController::class, 'viewProfil']);

Route::post('lostandfound/addFoundItem', [BarangController::class, 'addFoundItem']);
Route::get('lostandfound/viewFoundItem', [BarangController::class, 'indexFound']);
Route::post('lostandfound/addLostItem', [BarangController::class, 'addLostItem']);
Route::get('lostandfound/viewLostItem', [BarangController::class, 'indexLost']);
Route::get('lostandfound/history', [BarangController::class, 'show']);
Route::get('lostandfound/editItem/{id}', [BarangController::class, 'editItem']);
Route::post('lostandfound/updateItemLost/{id}', [BarangController::class, 'updateItemLost']);
Route::post('lostandfound/updateItemFound/{id}', [BarangController::class, 'updateItemFound']);
Route::get('lostandfound/deleteHistory/{id}', [BarangController::class, 'destroy']);
