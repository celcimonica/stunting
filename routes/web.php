<?php

use App\Http\Controllers\AnakController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BiodataController;
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
Route::get('/', function () {
    return view('dashboard',[
    "title"=>"Dashboard"
    ]);
   });

   Route::get('contac.php', function () {
    return view('contac',[
    "title"=>"contac"
    ]);
   });

   Route::get('cek.php', function () {
    return view('cek',[
    "title"=>"cek"
    ]);
   });
   Route::get('grafik.php', function () {
    return view('grafik',[
    "title"=>"grafik"
    ]);
   });


   Route::resource('anak', AnakController::class)->except('destroy');
//    Route::resource('contac', AnakController::class)->except('destroy');
 
