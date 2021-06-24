<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->unsignedInteger('ID_PENGGUNA');
            $table->integer('ID_PENCATATAN');
            $table->integer('ID_JENIS_SURAT');
            $table->integer('ID_DERAJAT_SURAT');
            $table->string('KODE_ARSIP_KOM', 100)->nullable();
            $table->string('KODE_ARSIP_HLM', 100)->nullable();
            $table->string('KODE_ARSIP_MANUAL', 100)->nullable();
            $table->string('NAMA_FILE_SURAT', 100)->nullable();
            $table->string('NAMA_FILE_LAMPIRAN', 100)->nullable();
            $table->integer('ID_KODE_UNIT_KERJA')->index('FK_SURAT_MA_DARI_KODE_UNI');
            $table->integer('ID_SIFAT_NASKAH')->index('FK_SURAT_MA_BERUPA2_KODE_SIF');
            $table->string('NOMOR_SURAT', 100)->nullable();
            $table->string('NAMA_PENGIRIM', 100)->nullable();
            $table->string('TUJUAN_SURAT', 100)->nullable();
            $table->string('PERIHAL', 100)->nullable();
            $table->date('TGL_DITERIMA')->nullable();
            $table->date('TGL_SURAT')->nullable();
            $table->string('PENANDATANGAN', 100)->nullable();
            $table->integer('NOMOR_AGENDA')->nullable();
            $table->primary(['ID_PENGGUNA', 'ID_PENCATATAN']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_masuk');
    }
}
