<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programharian', function (Blueprint $table) {
            $table->increments('id_program_harian');
            $table->string('nama_program', 255)->nullable(false);
            $table->string('pelaksanaan', 255);
            $table->integer('jumlah_hadir');
            $table->string('keterangan');
            $table->string('gambar');
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
        Schema::dropIfExists('programharian');
    }
};
