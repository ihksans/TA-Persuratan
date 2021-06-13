<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodeUnitKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kode_unit_kerja', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->increments('ID_KODE_UNIT_KERJA')->unsigned();
            $table->string('NAMA_UNIT_KERJA',100)->nullable();
            $table->string('KODE',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kode_unit_kerja');
    }
}
