<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifikasi', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->increments('ID_NOTIFIKASI')->unsigned();
            $table->integer('ID_PENGGUNA')->unsigned();
            $table->foreign('ID_PENGGUNA')->references('ID_PENGGUNA')->on('pengguna')->onDelete('cascade');
            $table->integer('ID_PENCATATAN')->unsigned();
            $table->foreign('ID_PENCATATAN')->references('ID_PENCATATAN')->on('pencatatan')->onDelete('cascade');

            // $table->primary(['ID_NOTIFIKASI','ID_PENGGUNA','ID_PENCATATAN']);
            // $table->foreign('ID_PENGGUNA')->references('ID_PENGGUNA')->on('pengguna');
            // $table->foreign('ID_PENCATATAN')->references('ID_PENCATATAN')->on('pencatatan');

            
            $table->string('DESKRIPSI');
            $table->timestamp('WAKTU');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifikasi');
    }
}
