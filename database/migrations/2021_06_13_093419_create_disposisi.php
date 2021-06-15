<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisi', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->increments('ID_DISPOSISI')->unsigned();
            $table->integer('ID_PENGGUNA')->unsigned();
            $table->foreign('ID_PENGGUNA')->references('ID_PENGGUNA')->on('pengguna')->onDelete('cascade');
            $table->integer('ID_PENCATATAN')->unsigned();
            $table->foreign('ID_PENCATATAN')->references('ID_PENCATATAN')->on('pencatatan')->onDelete('cascade');
            $table->date('TANGGAL_DISPOSISI')->nullable();
            $table->integer('NOMOR_DISPOSISI')->nullable();
            $table->string('PROSES_SELANJUTNYA',100)->nullable();
            $table->string('INFORMASI')->nullable();
            $table->integer('NOMOR_AGENDA')->nullable();

            // $table->primary(['ID_DISPOSISI']);

            // $table->unsignedBigInteger('ID_PENGGUNA');
            // $table->integer('ID_PENCATATAN');
            
            // $table->primary(['ID_DISPOSISI','ID_PENGGUNA','ID_PENCATATAN']);
            // $table->foreign('ID_PENGGUNA')->references('id')->on('pengguna');
            // $table->foreign('ID_PENCATATAN')->references('ID_PENCATATAN')->on('pencatatan')->onDelete('cascade');
            // $table->unique('ID_PENGGUNA')->references('ID_PENGGUNA')->on('pengguna')->onDelete('cascade');
            // $table->unique('ID_PENCATATAN')->references('ID_PENCATATAN')->on('pencatatan')->onDelete('cascade');

            // $table->date('TANGGAL_DISPOSISI')->nullable();
            // $table->integer('NOMOR_DISPOSISI')->nullable();
            // $table->string('PROSES_SELANJUTNYA',100)->nullable();
            // $table->string('INFORMASI')->nullable();

            //ini bisa 
            // $table->integer('ID_DISPOSISI')->autoIncrement();
            // $table->integer('ID_PENGGUNA')->unique();
            // $table->integer('ID_PENCATATAN')->unique(); 
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
