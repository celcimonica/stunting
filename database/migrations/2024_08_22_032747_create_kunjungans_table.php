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
        Schema::create('kunjungans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anak_id');
            $table->unsignedBigInteger('user_id');
            $table->date('Tanggal_Kunjungan');
            $table->decimal('Tinggi_Badan', 5, 2);
            $table->decimal('Berat_Badan', 5, 2);
            $table->enum('Status_Gizi', ['Stunting', 'Normal']);
            $table->text('Catatan_Kesehatan')->nullable();
            $table->timestamps();
        });
        Schema::table('kunjungans',function(Blueprint $table){
            $table->foreign('anak_id')->references('id')->on('anaks')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
           
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kunjungans', function(Blueprint $table) {
            $table->dropForeign('kunjungans_anak_id_foreign');
        });

        Schema::table('kunjungans', function(Blueprint $table) {
            $table->dropIndex('kunjungans_anak_id_foreign');
        });

        Schema::table('kunjungans', function(Blueprint $table) {
            $table->dropForeign('kunjungans_user_id_foreign');
        });

        Schema::table('kunjungans', function(Blueprint $table) {
            $table->dropIndex('kunjungans_user_id_foreign');
        });
       
        
              
        Schema::dropIfExists('kunjungans');
    }
};
