<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Input Data Anak</title>
        <!-- Tambahkan di bagian <head> untuk CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(90deg, #00c6ff, #0072ff);
    }

    .container {
        width: 80%;
        max-width: 1400px; /* Limits the width for better alignment on larger screens */
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 10px;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        height: 40px;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid #000000;
        box-sizing: border-box; /* Ensures padding does not affect total width */
    }

    button[type="submit"] {
        width: 100%;
        height: 40px;
        background-color: #0814f3;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s; /* Smooth transition for hover effect */
    }

    button[type="submit"]:hover {
        background-color: #365AC9; /* Darker shade for hover */
    }
</style>
</head>
<body>
    
    <div class="container">
        <h1>Form Input Data Anak</h1>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('anak.store') }}" method="POST" id="form-input-data">  
            @csrf  <!-- Token CSRF wajib untuk keamanan -->
            
            <div class="form-group">
                <label for="Nama_Anak">Nama Anak:</label>
                <input type="text" id="Nama_Anak" name="Nama_Anak" required>
            </div>
        
            <div class="form-group">
                <label for="Tanggal_Lahir">Tanggal Lahir:</label>
                <input type="date" id="Tanggal_Lahir" name="Tanggal_Lahir" required>
            </div>
        
            <div class="form-group">
                <label for="Jenis_Kelamin">Jenis Kelamin:</label>
                <select id="Jenis_Kelamin" name="Jenis_Kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="Tinggi_Badan">Tinggi Badan:</label>
                <input type="text" id="Tinggi_Badan" name="Tinggi_Badan" required>
            </div>

            <div class="form-group">
                <label for="Berat_Badan">Berat Badan:</label>
                <input type="text" id="Berat_Badan" name="Berat_Badan" required>
            </div>

            <div class="form-group">
                <label for="Status_Gizi">Status Gizi:</label>
                <select id="Status_Gizi" name="Status_Gizi" required>
                    <option value="">Pilih Status Gizi</option>
                    <option value="Stunting">Stunting</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat:</label>
                <input type="text" id="Alamat" name="Alamat" required>
            </div>
        
            <div class="form-group">
                <label for="Nama_Orang_Tua">Nama Orang Tua:</label>
                <input type="text" id="Nama_Orang_Tua" name="Nama_Orang_Tua" required>
            </div>
        
            <div class="form-group">
                <label for="No_Telepon_Orang_Tua">Nomor Telepon Orang Tua:</label>
                <input type="number" id="No_Telepon_Orang_Tua" name="No_Telepon_Orang_Tua" required>
            </div>
            
            <button type="submit">Simpan Data</button>

            
        </form>
        @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Toastify({
                text: "{{ session('success') }}",  // Pesan sukses dari session
                duration: 3000,                    // Durasi 3 detik
                gravity: "top",                    // Posisi toast: atas
                position: "right",                 // Pojok kanan
                backgroundColor: "#4CAF50",        // Warna hijau (sukses)
                stopOnFocus: true,                 // Berhenti jika di-hover
            }).showToast();
        });
        
    </script>
@endif

        <!-- Tambahkan sebelum penutup </body> untuk JS -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        
</div>
</body>
</html>