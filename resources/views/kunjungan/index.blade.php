@extends('layouts.layout') <!-- Extends the layout.blade.php -->

@section('title', 'Dashboard') <!-- Sets the page title -->

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Data Anak</h1>
    <p class="mb-4">Daftar informasi anak terdaftar.</p>
    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
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
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengunjung</th>
                            <th>Tanggal Pengunjung</th>
                            <th>Keterangan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $dt)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dt->Nama_Pengunjung }}</td>
                            <td>{{ $dt->Tanggal_Kunjungan }}</td>
                            <td>{{ $dt->Keterangan }}</td>
                            <td>{{ $dt->Alamat }}</td>
                            <td>
                                <div class="btn-group">
                                    <!-- Form Delete -->
                                    <form action="{{ route('kunjungan.destroy', $dt->id) }}" method="POST" 
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>

                                    <a type="button" class="btn btn-success" href="{{ route('kunjungan.show', $dt->id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
{{--                                     
                                    <a href="{{ route('anak.pdf', $dt->id) }}" class="btn btn-primary">
                                        <i class="fas fa-file-pdf"></i> Cetak PDF
                                    </a> --}}
                                                                        
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
<!-- jQuery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- SB Admin 2 -->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- DataTables Initialization -->
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
</script>
@endsection
