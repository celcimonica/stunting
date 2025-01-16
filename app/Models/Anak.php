<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; // Pastikan namespace ini diimpor

class Anak extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama_Anak',
        'tanggal_pendaftaran',
        'Tanggal_Lahir',
        'Jenis_Kelamin',
        'Umur',
        'Alamat',
        'Nama_Orang_Tua',
        'No_Telepon_Orang_Tua',
        'Tinggi_Badan',
        'Berat_Badan',
    ];

    // Event yang dihitung sebelum menyimpan data
    protected static function boot()
    {
        parent::boot();

        // Event untuk menghitung umur saat data dibuat
        static::creating(function ($anak) {
            if ($anak->Tanggal_Lahir) {
                $anak->Umur = Carbon::parse($anak->Tanggal_Lahir)->age; // Pastikan nama properti sesuai
            }
        });

        // Event untuk menghitung umur saat data diperbarui
        static::updating(function ($anak) {
            if ($anak->Tanggal_Lahir) {
                $anak->Umur = Carbon::parse($anak->Tanggal_Lahir)->age; // Pastikan nama properti sesuai
            }
        });
    }
}
