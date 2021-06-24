<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSifatNaskah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sifat_naskah', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->increments('ID_SIFAT_NASKAH')->unsigned();
            $table->string('KODE_SIFAT_NASKAH',100)->nullable();
            $table->string('SIFAT_NASKAH',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sifat_naskah');
    }
}
