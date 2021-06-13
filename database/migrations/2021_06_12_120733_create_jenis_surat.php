<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_surat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->increments('ID_JENIS_SURAT')->unsigned();
            // $table->increments('ID_JENIS_SURAT')->unsigned();
            $table->string('JENIS_SURAT',100)->nullable();
            $table->string('KETERANGAN',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_surat');
    }
}
