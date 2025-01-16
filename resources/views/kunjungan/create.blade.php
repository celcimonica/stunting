<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/img/stuntingg-removebg-preview.png') }}" rel="icon">
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
            max-width: 500px;
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
            box-sizing: border-box;
        }

        button {
            width: 100%;
            height: 40px;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        button[type="submit"] {
            background-color: #0814f3;
            margin-bottom: 10px; /* Menambahkan jarak bawah */
        }

        button[type="submit"]:hover {
            background-color: #4169E1;
        }

        button[type="button"] {
            background-color: #dc3545;
        }

        button[type="button"]:hover {
            background-color: #b02a37;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Data Pengunjung</h1>
        <!-- Form -->
        <form action="{{ route('kunjungan.store') }}" method="POST" id="form-input-data">  
            @csrf  
            <div class="form-group">
                <label for="Nama_Pengunjung">Nama Pengunjung:</label>
                <input type="text" id="Nama_Pengunjung" name="Nama_Pengunjung" required>
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

        <!-- Tombol Kembali -->
        <button type="button" onclick="history.back()">Kembali</button>
    </div>

    <!-- Toastify Success Notification -->
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#4CAF50",
                    stopOnFocus: true,
                }).showToast();
            });
        </script>
    @endif

    <!-- Tambahkan sebelum penutup </body> untuk JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>
