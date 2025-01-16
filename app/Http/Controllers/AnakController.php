<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;  // Import PDF facade
use App\Models\Anak;


class AnakController extends Controller
{
    public function index()
    {
        \Carbon\Carbon::setLocale('id');

        return view('Anak.index',[
            "title"=>"Data Anak",
            "data"=>Anak::all()
        ]);
    }

    public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'Nama_Anak' => 'required|string|max:255',
        'Tanggal_Lahir' => 'required|date',
        'Jenis_Kelamin' => 'required|in:Laki-laki,Perempuan',  // Validasi ENUM
        'Alamat' => 'required|string',
        'Nama_Orang_Tua' => 'required|string|max:255',
        'No_Telepon_Orang_Tua' => 'required|numeric',
        'Tinggi_Badan' => 'required|numeric|between:0,999.99',  // Format 5,2
        'Berat_Badan' => 'required|numeric|between:0,999.99',   // Format 5,2
    ]);

    // Hitung umur berdasarkan Tanggal_Lahir
    $validated['Umur'] = \Carbon\Carbon::parse($validated['Tanggal_Lahir'])->age;

    // Simpan data ke database
    Anak::create($validated);

    // Redirect dengan pesan sukses
    return redirect()->back()->with('success', 'Data anak berhasil disimpan!');
}

    
    public function create()
    {
        return view('anak.create')->with([
            "title" => "Tambah Data Anak"]);
    }
    
    
    public function printPDF($id)
{
    // Ambil data anak berdasarkan ID
    $data = Anak::findOrFail($id);

    // Buat PDF dengan data spesifik
    $pdf = Pdf::loadView('anak.pdf', compact('data'));

    // Download PDF dengan nama file dinamis
    return $pdf->download('data-anak-' . $data->Nama_Anak . '.pdf');
}
public function cetakSemua()
    {
        $anak = Anak::orderBy('created_at', 'DESC')->get();

        $pdf = Pdf::loadView('anak.semua', ['anak' => $anak])
          ->setPaper('a4', 'portrait'); // Atur ukuran dan orientasi kertas


        return $pdf->download('laporan_semua_anak.pdf');
    }


    // public function show():View
    // {
    //     $anak=Anak::all();
    //     return view('anak.show')->with([
    //         "title"=>"Tampil Data anak",
    //         "data"=>$anak
    //     ]);
    // }
    public function show($id)
{
    $anak = Anak::findOrFail($id); // Ambil data berdasarkan ID
    return view('anak.show', compact('anak')); // Kirim data ke view
}
public function destroy($id)
{
    $anak = Anak::findOrFail($id);  // Cari data berdasarkan ID

    try {
        $anak->delete();  // Hapus data
        return redirect()->route('anak.index')->with('success', 'Data berhasil dihapus.');
    } catch (\Exception $e) {
        return redirect()->route('anak.index')->with('error', 'Gagal menghapus data.');
    }
}
public function edit($id)
{
    // Cari data anak berdasarkan ID
    $anak = Anak::findOrFail($id);

    // Tampilkan view edit dengan data anak
    return view('anak.edit', compact('anak'));
}
public function update(Request $request, $id)
{
    // Validasi input
    $validated = $request->validate([
        'Nama_Anak' => 'required|string|max:255',
        'Tanggal_Lahir' => 'required|date',
        'Jenis_Kelamin' => 'required|in:Laki-laki,Perempuan',  // Validasi ENUM
        'Alamat' => 'required|string',
        'Nama_Orang_Tua' => 'required|string|max:255',
        'No_Telepon_Orang_Tua' => 'required|numeric',
        'Tinggi_Badan' => 'required|numeric|between:0,999.99',  // Format 5,2
        'Berat_Badan' => 'required|numeric|between:0,999.99',   // Format 5,2
    ]);

    // Cari data anak berdasarkan ID
    $anak = Anak::findOrFail($id);

    // Hitung umur berdasarkan Tanggal_Lahir yang baru
    $validated['Umur'] = \Carbon\Carbon::parse($validated['Tanggal_Lahir'])->age;

    // Update data anak
    $anak->update($validated);

    // Redirect ke halaman yang sesuai dengan pesan sukses
    return redirect()->route('anak.index')->with('success', 'Data anak berhasil diperbarui.');
}

}
