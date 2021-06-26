<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomorSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomor_surat', function (Blueprint $table) {
            $table->integer('ID_NOMOR_SURAT', true);
            $table->integer('ID_KODE_UNIT_KERJA')->index('FK_NOMOR_SU_OLEH_KODE_UNI');
            $table->integer('ID_KODE_HAL')->index('FK_NOMOR_SU_PERIHAL_KODE_HAL');
            $table->integer('ID_KODE_PERGURUAN_TINGGI')->index('FK_NOMOR_SU_PERGURUAN_KODE_PER');
            $table->integer('ID_SIFAT_NASKAH')->index('FK_NOMOR_SU_BERSIFAT_KODE_SIF');
            $table->string('NOMOR_URUT', 10)->nullable();
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
