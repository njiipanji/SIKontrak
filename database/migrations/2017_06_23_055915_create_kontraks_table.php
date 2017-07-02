<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontraksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontraks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kontrak_nomor');
            $table->string('kontrak_nama_perjanjian');
            $table->string('kontrak_nama_pihak', 100);
            $table->string('kontrak_tipe', 10);
            $table->date('kontrak_mulai');
            $table->date('kontrak_selesai');
            $table->string('kontrak_deskripsi');
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
        Schema::dropIfExists('kontraks');
    }
}
