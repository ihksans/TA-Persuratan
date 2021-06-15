<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomorSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomor_surat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->increments('ID_NOMOR_SURAT')->unsigned();
            // $table->string('NOMOR_URUT',10)->unsigned();

            $table->integer('ID_KODE_HAL')->unsigned();
            $table->foreign('ID_KODE_HAL')->references('ID_KODE_HAL')->on('kode_hal')->onDelete('cascade');
            
            $table->integer('ID_KODE_UNIT_KERJA')->unsigned();
            $table->foreign('ID_KODE_UNIT_KERJA')->references('ID_KODE_UNIT_KERJA')->on('kode_unit_kerja')->onDelete('cascade');
            
            $table->integer('ID_KODE_PERGURUAN_TINGGI')->unsigned();
            $table->foreign('ID_KODE_PERGURUAN_TINGGI')->references('ID_KODE_PERGURUAN_TINGGI')->on('kode_perguruan_tinggi')->onDelete('cascade');
            
            $table->integer('ID_SIFAT_NASKAH')->unsigned();
            $table->foreign('ID_SIFAT_NASKAH')->references('ID_SIFAT_NASKAH')->on('sifat_naskah')->onDelete('cascade');

            $table->string('NOMOR_URUT',10)->nullable();
            // $table->foreign('ID_KODE_UNIT_KERJA')->references('ID_KODE_UNIT_KERJA')->on('kode_unit_kerja');
            // $table->foreign('ID_KODE_HAL')->references('ID_KODE_HAL')->on('kode_hal');
            // $table->foreign('ID_KODE_PERGURUAN_TINGGI')->references('ID_KODE_PERGURUAN_TINGGI')->on('kode_perguruan_tinggi');
            // $table->foreign('ID_SIFAT_NASKAH')->references('ID_SIFAT_NASKAH')->on('sifat_naskah');

            $table->date('TAHUN')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomor_surat');
    }
}
