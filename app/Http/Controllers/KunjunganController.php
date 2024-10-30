<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    // Menampilkan daftar kunjungan
    public function index()
    {
        $data = Kunjungan::all(); // Ambil semua data kunjungan
        return view('kunjungan.index', [
            'title' => 'Data Kunjungan',
            "data"=>Kunjungan::all()

        ]);
    }

    // Menampilkan form tambah data kunjungan
    public function create()
    {
        return view('kunjungan.create')->with([
            "title" => "Tambah Data Kunjungan"
        ]);
    }

   

public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
       'Nama_Pengunjung' => 'required',
        'Tanggal_Kunjungan' => 'required|date',
        'Keterangan' => 'nullable|string',     
        'Alamat' => 'nullable|string',
    ]);

    // Simpan data ke database
    Kunjungan::create($validated);


    // Redirect dengan pesan sukses
    return redirect()->back()->with('success', 'Data pengunjung berhasil disimpan!');
}
    

     // }
     public function show($id)
{
    // Contoh: Ambil data kunjungan berdasarkan ID
    $kunjungan = Kunjungan::findOrFail($id);

    // Return view dengan data kunjungan
    return view('kunjungan.show', compact('kunjungan'));
}


    // Menghapus data kunjungan berdasarkan ID
    public function destroy($id)
    {
        $kunjungan = Kunjungan::findOrFail($id);  // Cari data berdasarkan ID

        try {
            $kunjungan->delete();  // Hapus data
            return redirect()->route('kunjungan.index')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('kunjungan.index')->with('error', 'Gagal menghapus data.');
        }
    }
}
