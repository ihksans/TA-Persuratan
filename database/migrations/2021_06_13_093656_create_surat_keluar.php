<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluar', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('ID_PENGGUNA')->unsigned();
            $table->integer('ID_PENCATATAN')->unsigned();

            // $table->primary(['ID_PENGGUNA','ID_PENCATATAN']);
            $table->integer('ID_NOMOR_SURAT')->unsigned();
            $table->foreign('ID_NOMOR_SURAT')->references('ID_NOMOR_SURAT')->on('nomor_surat')->onDelete('cascade');
            $table->integer('ID_JENIS_SURAT')->unsigned();
            $table->string('KODE_ARSIP_KOM',100)->nullable();
            $table->string('KODE_ARSIP_HLM',100)->nullable();
            $table->string('KODE_ARSIP_MANUAL',100)->nullable();
            $table->string('NAMA_FILE_SURAT')->nullable();
            $table->string('NAMA_FILE_LAMPIRAN')->nullable();
            $table->string('DERAJAT_SURAT')->nullable();
            
            $table->string('NAMA_PEMOHON',100)->nullable();
            $table->string('UNIT_PEMOHON',100)->nullable();
            $table->string('PENANDATANGAN',100)->nullable();
            $table->string('TUJUAN_SURAT',100)->nullable();
            $table->string('PERIHAL',100)->nullable();
            $table->date('TGL_KIRIM')->nullable();
            $table->date('TGL_SURAT')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_keluar');
    }
}
