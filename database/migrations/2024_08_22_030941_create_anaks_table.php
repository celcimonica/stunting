<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anaks', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Anak');
            $table->date('Tanggal_Lahir');
            $table->enum('Jenis_Kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('Alamat');
            $table->decimal('Tinggi_Badan', 5, 2);
            $table->decimal('Berat_Badan', 5, 2);
            $table->enum('Status_Gizi', ['Stunting']);
            $table->string('Nama_Orang_Tua');
            $table->string('No_Telepon_Orang_Tua');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anaks');
    }
};
