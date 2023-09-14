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
        Schema::create('programinsidental', function (Blueprint $table) {
            $table->increments('id_program_insidental');
            $table->string('nama_kegiatan', 255)->nullable(false);
            $table->string('keterangan', 255);
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
        Schema::dropIfExists('programinsidental');
    }
};
