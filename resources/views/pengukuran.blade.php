<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/img/stuntingg-removebg-preview.png') }}" rel="icon">

    <title>Pengukuran Anak</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="assets/img/kominfo-removebg-preview.png" rel="kominfo">
    
    <style>
        body {
            background-color: #f0f8ff;
            font-family: 'Arial', sans-serif;
        }
        h1 {
            color: #007bff;
            font-weight: bold;
        }
        .container {
            max-width: 700px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .alert {
            font-size: 0.95rem;
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body class="container mt-5">
    <center>
        <div class="container mb-4">
            <h1>KALKULATOR STUNTING</h1>
            <p class="text-muted">Membantu mengukur risiko stunting pada anak</p>
        </div>
    </center>

    <div class="alert alert-info">
        <strong>Catatan:</strong> Pengukuran anak usia ≤ 24 bulan dilakukan dalam posisi berbaring terlentang.
    </div>
    <div class="alert alert-warning">
        Jika hasil menunjukkan anak mengalami stunting, segera daftarkan untuk tindak lanjut.
    </div>

    <form action="{{ url('/pengukuran') }}" method="POST" id="formPengukuran" class="bg-white p-4 shadow rounded">
        @csrf
        <div class="form-group">
            <label>Jenis Kelamin:</label><br>
            <div class="form-check form-check-inline">
                <input type="radio" name="jenis_kelamin" id="lakiLaki" value="Laki-Laki" class="form-check-input" required>
                <label for="lakiLaki" class="form-check-label">Laki-Laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" class="form-check-input">
                <label for="perempuan" class="form-check-label">Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="tinggi">Tinggi Badan (CM):</label>
            <input type="number" name="tinggi" id="tinggi" class="form-control" placeholder="Masukkan tinggi badan anak" min="0" required>
        </div>

        <div class="form-group">
            <label for="umur">Umur (0 - 60 Bulan):</label>
            <input type="number" name="umur" id="umur" class="form-control" placeholder="Masukkan umur anak dalam bulan" min="0" max="60" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-danger" id="resetButton">Reset</button>
            <button type="button" class="btn btn-secondary" onclick="history.back();">Kembali</button>
        </div>
    </form>

    @isset($kategori)
        <div class="mt-4 alert alert-success">
            <h4>Hasil Pengukuran</h4>
            <p>Jenis Kelamin: <strong>{{ $jenis_kelamin }}</strong></p>
            <p>Tinggi Badan: <strong>{{ $tinggi }} cm</strong></p>
            <p>Umur: <strong>{{ $umur }} bulan</strong></p>
            <p>Kategori: <strong>{{ $kategori }}</strong></p>
        </div>

        @if($kategori === 'Stunting')
            <div class="mt-3">
                <form action="{{ url('anak/create') }}" method="GET">
                    <button type="submit" class="btn btn-warning">Daftarkan Anak</button>
                </form>
            </div>
        @else
            <div class="mt-3">
                <form action="{{ url('kunjungan/create') }}" method="GET">
                    <button type="submit" class="btn btn-success">Isi Data Kunjungan</button>
                </form>
            </div>
        @endif
    @endisset

    <script>
        // Script untuk tombol reset agar bekerja dengan baik
        document.getElementById('resetButton').addEventListener('click', function () {
            document.getElementById('formPengukuran').reset(); // Reset form
        });
    </script>
</body>
</html>
