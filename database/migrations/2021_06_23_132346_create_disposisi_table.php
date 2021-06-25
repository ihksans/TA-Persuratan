<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisi', function (Blueprint $table) {
            $table->integer('ID_DISPOSISI', false);
            $table->unsignedInteger('ID_PENGGUNA');
            $table->integer('ID_PENCATATAN');
            $table->date('TANGGAL_DISPOSISI')->nullable();
            $table->integer('NOMOR_DISPOSISI')->nullable();
            $table->string('PROSES_SELANJUTNYA', 100)->nullable();
            $table->string('INFORMASI')->nullable();
            $table->string('NOMOR_AGENDA', 100)->nullable();
            $table->index(['ID_PENCATATAN', 'ID_PENGGUNA'], 'FK_DISPOSIS_MENAMBAHK_PENCATAT');
            $table->primary(['ID_DISPOSISI', 'ID_PENGGUNA', 'ID_PENCATATAN']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disposisi');
    }
}
