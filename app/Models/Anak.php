<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;


    protected $fillable = [  
        'Nama_Anak', 
        'Tanggal_Lahir', 
        'Jenis_Kelamin', 
        'Alamat', 
        'Nama_Orang_Tua', 
        'No_Telepon_Orang_Tua',
        'Tinggi_Badan' ,
            'Berat_Badan',
            'Status_Gizi' ,
    ];
}
