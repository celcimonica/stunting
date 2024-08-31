<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Anak;

class anakController extends Controller
{
    //
    public function index()
    {
        $anak=Anak::all();
        return view('anak.index', [
            "title" => "anak",
            "data" => $anak
        ]);
    }
    public function create(): View
    {
        return view('anak.create')->with([
            "title" => "Tambah Data anak",
        ]);
    }

    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "Nama_Anak"=>"required",
            "Tanggal_Lahir"=>"required",
            "Jenis_Kelamin"=>"required",
            "Alamat"=>"required",
            "Nama_Orang_Tua"=>"required",
            "No_Telepon_Orang_Tua"=>"required",
        ]);

        Anak::create($request->all());
        return redirect()->route('anak.index')->with('success','Data anak Berhasil Ditambahkan');
    }

    public function edit(Anak $anak):View
    {
        return view('anak.edit',compact('anak'))->with([
            "title"=>"Ubah Data anak",
        ]);
    }

    public function update(Anak $anak, Request $request):RedirectResponse
    {
        $request->validate([
            "Nama_Anak"=>"required",
            "Tanggal_Lahir"=>"required",
            "Jenis_Kelamin"=>"required",
            "Alamat"=>"required",
            "Nama_Orang_Tua"=>"required",
            "No_Telepon_Orang_Tua"=>"required",
        ]);

        $anak->update($request->all());
        return redirect()->route('anak.index')->with('updated','Data anak Berhasil Diubah');
    }

    public function show():View
    {
        $anak=Anak::all();
        return view('anak.show')->with([
            "title"=>"Tampil Data anak",
            "data"=>$anak
        ]);
    }

    public function destroy($id):RedirectResponse
    {
        Anak::where('id',$id)->delete();
        return Redirect()->route('anak.index')->with('deleted','Data anak Berhasil Dihapus');
    }
}
