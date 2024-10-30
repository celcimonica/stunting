<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Anak</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Detail Data Anak</h2>
    <table>
        <tr>
            <th>Nama Anak</th>
            <td>{{ $data->Nama_Anak }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $data->Tanggal_Lahir }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $data->Jenis_Kelamin }}</td>
        </tr>
        <tr>
            <th>Tinggi_Badan</th>
            <td>{{ $data->Tinggi_Badan }}</td>
        </tr> <tr>
            <th>Berat_Badan</th>
            <td>{{ $data->Berat_Badan }}</td>
        </tr> <tr>
            <th>Status_Gizi</th>
            <td>{{ $data->Status_Gizi }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $data->Alamat }}</td>
        </tr>
        <tr>
            <th>Nama Orang Tua</th>
            <td>{{ $data->Nama_Orang_Tua }}</td>
        </tr>
        <tr>
            <th>No Telepon</th>
            <td>{{ $data->No_Telepon_Orang_Tua }}</td>
        </tr>
    </table>
</body>
</html>
