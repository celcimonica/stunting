@extends('layouts.template')
@section('judulh1','Admin - anak')
@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your
        input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Anak</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('anak.store') }}" method="POST">
            @csrf
            <div class=" card-body">
                <div class="form-group">
                    <label for="name">Nama_Anak Anak</label>
                    <input type="text" class="form-control" id="Nama_Anak" name="Nama_Anak" placeholder="">
                </div>
                <div class="form-group">
                    <label for="date">Tanggal_Lahir</label>
                    <input type="number" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jeniskategori">
                        <option value="active">Pilih Jenis kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control" id="Alamat" name="Alamat">
                </div>
                <div class="form-group">
                    <label for="Text">Nama Orang Tua</label>
                    <textarea id="Nama_Orang_Tua" name="Nama_Orang_Tua" class=" form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="No_Telepon_Orang_Tua">Nomor Telepon OrangTua</label>
                    <input type="number" class="form-control" id="No_Telepon_Orang_Tua" name="No_Telepon_Orang_Tua">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection