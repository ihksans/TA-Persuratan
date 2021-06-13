<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::enableForeignKeyConstraints();
        Schema::create('pengguna', function (Blueprint $table) {
            // $table->increments('ID_PENGGUNA');
            // $table->string('USERNAME')->unique();
            // $table->string('PASSWORD');
            // $table->string('NAMA');
            // $table->integer('ROLE');
            // $table->string('TOKEN');
            // $table->timestamps();
            $table->increments('ID_PENGGUNA')->unsigned();
            $table->string('USERNAME',100)->unique();
            $table->string('PASSWORD',100);
            $table->string('NAMA',100);
            $table->integer('ROLE');
            $table->string('TOKEN');
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
        Schema::dropIfExists('pengguna');
    }
}
