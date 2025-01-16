@extends('layouts.layout') <!-- Extends the layout.blade.php -->

@section('title', 'Dashboard') <!-- Sets the page title -->

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Data Anak</h1>
    <p class="mb-4">Daftar informasi anak terdaftar.</p>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Pencarian Data</h6>
            <form class="form-inline" method="GET" action="{{ route('anak.index') }}">
                <input type="text" id="customSearchInput" name="query" class="form-control form-control-sm mr-2" placeholder="Cari data...">
                <button type="submit" id="customSearchButton" class="btn btn-primary btn-sm">
                    <i class="fas fa-search"></i> Cari
                </button>
            </form>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="card-body">
            <!-- Filter Tanggal -->
            <form method="GET" action="{{ route('anak.index') }}" class="d-flex mb-4">
                <div class="mr-3">
                    <label for="startDate" class="form-label">Dari Tanggal:</label>
                    <input type="date" id="startDate" name="startDate" class="form-control" value="{{ request('startDate') }}">
                </div>
                <div class="mr-3">
                    <label for="endDate" class="form-label">Sampai Tanggal:</label>
                    <input type="date" id="endDate" name="endDate" class="form-control" value="{{ request('endDate') }}">
                </div>
                <button type="submit" class="btn btn-primary align-self-end">
                    <i class="fas fa-filter"></i> Filter
                </button>
            </form>
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ url('/cetak-semua-anak') }}" target="_blank">
                        <i class="fas fa-file-pdf"></i> Export PDF Semua
                    </a>
                </div>
            </div>
            
            <!-- Tabel Data Anak -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Anak</th>
                            <th>Tanggal Pendafataran Anak</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th> <!-- Tambahkan kolom Umur -->
                            <th>Tinggi Badan</th>
                            <th>Berat Badan</th>
                            <th>Alamat</th>
                            <th>Nama Orang Tua</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $dt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dt->Nama_Anak }}</td>
                                <td>{{ \Carbon\Carbon::parse($dt->created_at)->translatedFormat('l, d F Y') }}</td>
                                <td>{{ $dt->Tanggal_Lahir }}</td>
                                <td>{{ $dt->Jenis_Kelamin }}</td>
                                <td>{{ $dt->Umur }} tahun</td> <!-- Menampilkan umur -->
                                <td>{{ $dt->Tinggi_Badan }}</td>
                                <td>{{ $dt->Berat_Badan }}</td>
                                <td>{{ $dt->Alamat }}</td>
                                <td>{{ $dt->Nama_Orang_Tua }}</td>
                                <td>{{ $dt->No_Telepon_Orang_Tua }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('anak.destroy', $dt->id) }}" method="POST" 
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        <a class="btn btn-success" href="{{ route('anak.show', $dt->id) }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-warning" href="{{ route('anak.edit', $dt->id) }}">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="{{ route('anak.pdf', $dt->id) }}" class="btn btn-primary">
                                            <i class="fas fa-file-pdf"></i> Cetak PDF
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('tambahanJS')
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable({
            "language": {
                "search": "Cari:",
                "searchPlaceholder": "Masukkan kata kunci...",
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Berikutnya",
                    "previous": "Sebelumnya"
                }
            }
        });
    });
</script>
@endsection
