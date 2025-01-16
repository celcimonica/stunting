<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Anak</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }
        .data-container {
            margin-bottom: 20px;
            border: 1px solid #000;
            padding: 15px;
            border-radius: 5px;
        }
        .data-container h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
            text-decoration: underline;
        }
        .data-item {
            margin: 5px 0;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Data Anak</h2>

    @foreach ($anak as $item)
    <div class="data-container">
        <h3>Data Anak: {{ $item->Nama_Anak }}</h3>
        <div class="data-item"><strong>Tanggal Pendaftaran:</strong> {{ \Carbon\Carbon::parse($item->tanggal_pendaftaran)->format('d F Y') }}</div>
        <div class="data-item"><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($item->Tanggal_Lahir)->format('d F Y') }}</div>
        <div class="data-item"><strong>Umur:</strong> {{ $item->Umur }} Tahun</div>
        <div class="data-item"><strong>Jenis Kelamin:</strong> {{ $item->Jenis_Kelamin }}</div>
        <div class="data-item"><strong>Tinggi Badan:</strong> {{ $item->Tinggi_Badan }} Cm</div>
        <div class="data-item"><strong>Berat Badan:</strong> {{ $item->Berat_Badan }} kg</div>
        <div class="data-item"><strong>Alamat:</strong> {{ $item->Alamat }}</div>
        <div class="data-item"><strong>Nama Orang Tua:</strong> {{ $item->Nama_Orang_Tua }}</div>
        <div class="data-item"><strong>No Telepon:</strong> {{ $item->No_Telepon_Orang_Tua }}</div>
    </div>
    <div class="page-break"></div> <!-- Pisahkan setiap data anak di halaman baru -->
    @endforeach
</body>
</html>
