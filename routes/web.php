<?php

use App\Http\Controllers\Karyawan;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route untuk view data karyawan
Route::get("/",[Karyawan::class, 'index']);
Route::get("/add",[Karyawan::class, 'index']);