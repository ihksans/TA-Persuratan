<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengingat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::enableForeignKeyConstraints();
        Schema::create('pengingat', function (Blueprint $table) {
            $table->increments('ID_PENGINGAT')->unsigned();
            
            $table->integer('ID_PENGGUNA')->unsigned();
            $table->integer('ID_PENCATATAN')->unsigned();
            
            $table->foreign('ID_PENGGUNA')->references('ID_PENGGUNA')->on('pengguna')->onDelete('cascade');
            $table->foreign('ID_PENCATATAN')->references('ID_PENCATATAN')->on('pencatatan')->onDelete('cascade');
            // $table->primary(['ID_PENGGUNA','ID_PENCATATAN']);
            
            $table->date('WAKTU_PENGINGAT');
            $table->string('DESKRIPSI');
            $table->boolean('STATUS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengingat');
    }
}
