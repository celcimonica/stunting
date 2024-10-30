@extends('layouts.layout')

@section('title', 'Detail Anak') <!-- Judul halaman -->

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Data Anak</h1>
    <p class="mb-4">Informasi lengkap dari data anak terpilih.</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Anak</h6>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Nama Anak:</div>
                <div class="col-sm-9">{{ $anak->Nama_Anak }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Tanggal Lahir:</div>
                <div class="col-sm-9">{{ $anak->Tanggal_Lahir }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Jenis Kelamin:</div>
                <div class="col-sm-9">{{ $anak->Jenis_Kelamin }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Tinggi Badan:</div>
                <div class="col-sm-9">{{ $anak->Tinggi_Badan }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Berat Badan:</div>
                <div class="col-sm-9">{{ $anak->Berat_Badan }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Status Gizi:</div>
                <div class="col-sm-9">{{ $anak->Status_Gizi }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Alamat:</div>
                <div class="col-sm-9">{{ $anak->Alamat }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">Nama Orang Tua:</div>
                <div class="col-sm-9">{{ $anak->Nama_Orang_Tua }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3 font-weight-bold">No Telepon:</div>
                <div class="col-sm-9">{{ $anak->No_Telepon_Orang_Tua }}</div>
            </div>

            <div class="text-right">
                <a href="{{ url('/anak') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>

</div>
@endsection
