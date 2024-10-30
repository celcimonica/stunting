@extends('layouts.layout')

@section('title', 'Detail kunjungan') <!-- Judul halaman -->

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Data Pengunjung</h1>
    <p class="mb-4">Informasi lengkap dari data kunjungan terpilih.</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail kunjungan</h6>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Nama kunjungan:</div>
                <div class="col-sm-9">{{ $kunjungan->Nama_Pengunjung }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Tanggal Lahir:</div>
                <div class="col-sm-9">{{ $kunjungan->Tanggal_Kunjungan }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Keterangan:</div>
                <div class="col-sm-9">{{ $kunjungan->Keterangan }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Alamat:</div>
                <div class="col-sm-9">{{ $kunjungan->Alamat }}</div>
            </div>

            <div class="text-right">
                <a href="{{ url('/kunjungan') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>

</div>
@endsection
