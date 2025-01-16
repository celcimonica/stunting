<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama_Pengunjung',
        'tanggal_kunjungan',
        'Keterangan',
        'Alamat',
    ];
}

