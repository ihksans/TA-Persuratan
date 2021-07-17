<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->unsignedInteger('ID_PENGGUNA');
            $table->integer('ID_PENCATATAN');
            $table->integer('ID_JENIS_SURAT');
            $table->integer('ID_DERAJAT_SURAT');
            $table->string('KODE_ARSIP_KOM', 100)->nullable();
            $table->string('KODE_ARSIP_HLM', 100)->nullable();
            $table->string('KODE_ARSIP_MANUAL', 100)->nullable();
            $table->string('NAMA_FILE_SURAT', 100)->nullable();
            $table->string('NAMA_FILE_LAMPIRAN', 100)->nullable();
            $table->integer('ID_NOMOR_SURAT')->index('FK_SURAT_KE_MEMILIKI_NOMOR_SU');
            $table->integer('ID_PEMOHON')->index('FK_SURAT_KE_MEMOHON2_PEMOHON');
            $table->string('TUJUAN_SURAT', 100)->nullable();
            $table->string('PERIHAL', 100)->nullable();
            $table->date('TGL_KIRIM')->nullable();
            $table->date('TGL_SURAT')->nullable();
            $table->string('PENANDATANGAN', 100)->nullable();
            $table->string('NOMOR_AGENDA', 100)->nullable();
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
        Schema::dropIfExists('surat_keluar');
    }
}
