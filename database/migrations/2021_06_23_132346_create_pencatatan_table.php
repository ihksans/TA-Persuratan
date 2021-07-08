<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePencatatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencatatan', function (Blueprint $table) {
            $table->unsignedInteger('ID_PENGGUNA')->index('FK_PENCATAT_MEMBUAT_PENGGUNA');
            $table->integer('ID_PENCATATAN', false);
            $table->integer('ID_JENIS_SURAT')->index('FK_PENCATAT_BERJENIS_JENIS_SU');
            $table->integer('ID_DERAJAT_SURAT')->index('FK_PENCATAT_BERDERAJA_DERAJAT_');
            $table->string('KODE_ARSIP_KOM', 100)->nullable();
            $table->string('KODE_ARSIP_HLM', 100)->nullable();
            $table->string('KODE_ARSIP_MANUAL', 100)->nullable();
            $table->string('NAMA_FILE_SURAT', 100)->nullable();
            $table->string('NAMA_FILE_LAMPIRAN', 100)->nullable();
            $table->primary(['ID_PENCATATAN', 'ID_PENGGUNA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pencatatan');
    }
}
