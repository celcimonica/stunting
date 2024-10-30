<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\User;
use App\Models\Kunjungan;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah data dari database
        $anakCount = Anak::count();
        $userCount = User::count();
        $kunjunganCount = Kunjungan::count();

        // Kirim data ke view menggunakan compact()
        return view('dashboard', compact('anakCount', 'userCount', 'kunjunganCount'));
    }
}

    
    





