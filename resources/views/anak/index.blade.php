@extends('layouts.layout') <!-- Extends the layout.blade.php -->

@section('title', 'Dashboard') <!-- Sets the page title -->

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Data Anak</h1>
    <p class="mb-4">Daftar informasi anak terdaftar.</p>


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
            <!-- DataTables Example -->
    <div class="card-body">
        <div class="input-group">
            <form action="{{ route('anak.index') }}" method="GET">
                <input type="text" name="search" placeholder="Cari Nama Anak" value="{{ request('search') }}">
                <button class="btn btn-primary mb-3 btn-sm mt-3" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </form>
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
@section('tambahScript')
        <script>
            $(document).ready(function() {
                // Inisialisasi DataTables
                $('#example1').DataTable({
                    "pagingType": simple,
                    "responsive": true,
                    "autoWidth": false,
                    "lengthChange": true,
                    "pageLength": 5,
                    "lengthMenu": [5, 10, 25, 50],
                    "searching": true,
                    "language": {
                        "search": "Cari:",
                        "lengthMenu": "Tampilkan MENU data per halaman",
                        "zeroRecords": "Tidak ada data yang ditemukan",
                        "info": "Menampilkan START hingga END dari TOTAL data",
                        "infoEmpty": "Tidak ada data tersedia",
                        "infoFiltered": "(disaring dari MAX total data)",
                        "paginate": {
                            "first": "Pertama",
                            "last": "Terakhir",
                            "next": "Berikutnya",
                            "previous": "Sebelumnya"
                        }
                    },
                
                    // Memindahkan elemen search ke kanan atas
            "dom": '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 text-right"f>>' +
                   '<"row"<"col-sm-12"tr>>' +
                   '<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
        });
    });
        </script>
        @endsection
