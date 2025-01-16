@extends('layouts.layout') <!-- Extends the layout.blade.php -->

@section('title', 'Edit Data Anak') <!-- Sets the page title -->

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Data Anak</h1>
    <p class="mb-4">Perbarui informasi anak.</p>

    <!-- Edit Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Anak</h6>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('anak.update', $anak->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Nama_Anak">Nama Anak</label>
                    <input type="text" class="form-control" id="Nama_Anak" name="Nama_Anak" value="{{ $anak->Nama_Anak }}" required>
                </div>
                <div class="form-group">
                    <label for="Tanggal_Lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir" value="{{ $anak->Tanggal_Lahir }}" required>
                </div>
                <div class="form-group">
                    <label for="Jenis_Kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="Jenis_Kelamin" name="Jenis_Kelamin" required>
                        <option value="Laki-laki" {{ $anak->Jenis_Kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $anak->Jenis_Kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Tinggi_Badan">Tinggi Badan (cm)</label>
                    <input type="number" class="form-control" id="Tinggi_Badan" name="Tinggi_Badan" value="{{ $anak->Tinggi_Badan }}" required>
                </div>
                <div class="form-group">
                    <label for="Berat_Badan">Berat Badan (kg)</label>
                    <input type="number" class="form-control" id="Berat_Badan" name="Berat_Badan" value="{{ $anak->Berat_Badan }}" required>
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <textarea class="form-control" id="Alamat" name="Alamat" rows="3" required>{{ $anak->Alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label for="Nama_Orang_Tua">Nama Orang Tua</label>
                    <input type="text" class="form-control" id="Nama_Orang_Tua" name="Nama_Orang_Tua" value="{{ $anak->Nama_Orang_Tua }}" required>
                </div>
                <div class="form-group">
                    <label for="No_Telepon_Orang_Tua">No Telepon Orang Tua</label>
                    <input type="text" class="form-control" id="No_Telepon_Orang_Tua" name="No_Telepon_Orang_Tua" value="{{ $anak->No_Telepon_Orang_Tua }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('anak.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>

</div>
@endsection
