<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengukuran Anak</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <CENTER>
    <div class="container">
        <h1>KALKULATOR STUNTING</h1>
    </CENTER>
    <div class="alert alert-info">
        Pengukuran anak umur ≤ 24 bulan dalam posisi anak berbaring terlentang
    </div>
    <div class="alert alert-info">
        Jika anak mengalami stunting daftarkan anak agar ditindak lanjuti
    </div>

    <form action="{{ url('/pengukuran') }}" method="POST" id="formPengukuran">
        @csrf
        <div class="form-group">
            <label>Jenis Kelamin:</label><br>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" required> Laki-Laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
        </div>

        <div class="form-group">
            <label for="tinggi">Tinggi Badan (CM):</label>
            <input type="number" name="tinggi" id="tinggi" class="form-control" min="0" required>
        </div>

        <div class="form-group">
            <label for="umur">Umur (0 - 60 Bulan):</label>
            <input type="number" name="umur" id="umur" class="form-control" min="0" max="60" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger" id="resetButton">Reset</button>
        <button type="button" class="btn btn-secondary" onclick="history.back();">Kembali</button>

    </form>

    @isset($kategori)
        <div class="mt-4 alert alert-success">
            <h4>Hasil Pengukuran</h4>
            <p>Jenis Kelamin: <strong>{{ $jenis_kelamin }}</strong></p>
            <p>Tinggi Badan: <strong>{{ $tinggi }} cm</strong></p>
            <p>Umur: <strong>{{ $umur }} bulan</strong></p>
            <p>Kategori: <strong>{{ $kategori }}</strong></p>
        </div>
    @endisset

    <script>
        // Script untuk tombol reset agar bekerja dengan baik
        document.getElementById('resetButton').addEventListener('click', function () {
            document.getElementById('formPengukuran').reset(); // Reset form
        });
        
    </script>

</body>
</html>
