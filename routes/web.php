<?php

use App\Http\Controllers\AnakController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;

Route::get('/pengukuran', function () {
    return view('pengukuran'); // Tampilkan form
});

Route::post('/pengukuran', function (Request $request) {
    // Ambil data dari form
    $jenis_kelamin = $request->input('jenis_kelamin');
    $tinggi = $request->input('tinggi');
    $umur = $request->input('umur');

    // Logika kategori tinggi badan
    if ($umur <= 24) {
        $kategori = ($tinggi >= 75) ? "Normal" : "Stunting";
    } else {
        $kategori = ($tinggi >= 85) ? "Normal" : "Stunting";
    }

    // Kirim hasil ke view
    return view('pengukuran', compact('jenis_kelamin', 'tinggi', 'umur', 'kategori'));
});
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
    return view('welcome');
});


   Route::get('contac.php', function () {
    return view('contac',[
    "title"=>"contac"
    ]);
   });

//    Route::get('cek.php', function () {
//     return view('cek',[
//     "title"=>"cek"
//     ]);
//    });
   Route::get('grafik.php', function () {
    return view('grafik',[
    "title"=>"grafik"
    ]);
   });

   

Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route untuk menampilkan semua kunjungan
Route::get('/kunjungan', [KunjunganController::class, 'index'])->name('kunjungan.index');

// Route untuk menampilkan form tambah data kunjungan
Route::get('/kunjungan/create', [KunjunganController::class, 'create'])->name('kunjungan.create');

// Route untuk menyimpan data kunjungan
Route::post('/kunjungan/store', [KunjunganController::class, 'store'])->name('kunjungan.store');

// Route untuk menghapus data kunjungan
Route::delete('/kunjungan/{id}', [KunjunganController::class, 'destroy'])->name('kunjungan.destroy');
Route::get('/kunjungan/{id}', [KunjunganController::class, 'show'])->name('kunjungan.show');



Route::resource('/anak',AnakController::class)->except('destroy','create','show','update'.'edit');
Route::get('/anak/create', [AnakController::class, 'create'])->name('anak.create');
Route::post('/anak/store', [AnakController::class, 'store'])->name('anak.store');


Route::get('/anak/{id}', [AnakController::class, 'show'])->name('anak.show');
Route::delete('/anak/{id}', [AnakController::class, 'destroy'])->name('anak.destroy');
Route::get('/anak/pdf/{id}', [AnakController::class, 'printPDF'])->name('anak.pdf');

Route::resource('/user',UserController::class);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/users', [UserController::class, 'index'])->name('user.index')->middleware('auth');


Route::get('login',[LoginController::class,'loginView'])->name('login');
Route::post('login',[LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::post('/logout',[LoginController::class,'logout'])->name('auth.logout');
