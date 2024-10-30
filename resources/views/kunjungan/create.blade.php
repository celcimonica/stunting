<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Data Pengunjung</title>
        <!-- Tambahkan di bagian <head> untuk CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(90deg, #00c6ff, #0072ff);
    }

    .container {
        width: 80%;
        max-width: 500px; /* Added max-width for better alignment on larger screens */
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
        border: 1px solid rgb(0, 0, 0);
        box-sizing: border-box; /* Ensures padding does not affect width */
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
    }

    button[type="submit"]:hover {
        background-color: #4169E1;
    }
</style>

</head>
<body>
    
    <div class="container">
        <h1>Form Data Pengunjung</h1>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('kunjungan.store') }}" method="POST" id="form-input-data">  
            @csrf  <!-- Token CSRF wajib untuk keamanan -->
            
            <div class="form-group">
                <label for="Nama_Pengunjung">Nama Pengunjung:</label>
                <input type="text" id="Nama_Pengunjung" name="Nama_Pengunjung" required>
            </div>
        
            <div class="form-group">
                <label for="Tanggal_Kunjungan">Tanggal Kunjungan:</label>
                <input type="date" id="Tanggal_Kunjungan" name="Tanggal_Kunjungan" required>
            </div>     
            
            <div class="form-group">
                <label for="Keterangan">Keterangan</label>
                <input type="text" name="Keterangan" id="Keterangan" class="form-control" required>
            </div>
        
            <div class="form-group">
                <label for="Alamat">Alamat:</label>
                <input type="text" id="Alamat" name="Alamat" required>
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