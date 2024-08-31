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
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Anak</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('anak.update',$anak->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
                <div class="form-group">
                    <label for="nama">Nama </label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="" value="{{$anak->nama}}">
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{$anak->price}}">
                </div>
                <div class="form-group">
                    <label for="stock">Stok</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{$anak->stock}}">
                </div>
                <div class="form-group">
                    <label for="jeniskategori">Jenis</label>
                    <input type="text" class="form-control" id="jeniskategori" name="jeniskategori" value="{{$anak->jeniskategori}}">
                </div>
                <div class=" form-group">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description" class="
form-control" rows="4">{{ $anak->description }}</textarea>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-warning float-
right">Ubah</button>
            </div>
        </form>
    </div>
</div>
@endsection