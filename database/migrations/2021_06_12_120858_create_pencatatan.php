<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePencatatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::enableForeignKeyConstraints();
        Schema::create('pencatatan', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();

            $table->increments('ID_PENCATATAN')->unsigned();
            

            $table->integer('ID_PENGGUNA')->unsigned();
            
            $table->integer('ID_JENIS_SURAT')->unsigned();
            
            $table->foreign('ID_PENGGUNA')->references('ID_PENGGUNA')->on('pengguna')->onDelete('cascade');
            $table->foreign('ID_JENIS_SURAT')->references('ID_JENIS_SURAT')->on('jenis_surat')->onDelete('cascade');
            
            $table->string('KODE_ARSIP_KOM',100);
            $table->string('KODE_ARSIP_HLM',100);
            $table->string('KODE_ARSIP_MANUAL',100);
            $table->string('NAMA_FILE_SURAT',100);
            $table->string('NAMA_FILE_LAMPIRAN',100);
            $table->string('DERAJAT_SURAT',100);

            $table->timestamps();
            // $table->dropPrimary();
            // $table->primary(['ID_PENCATATAN','ID_PENCATATAN','ID_PENGGUNA']);
        });
        // Schema::table('pencatatan',function (Blueprint $table){
            
        // });
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
