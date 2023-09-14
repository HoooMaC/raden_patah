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
        Schema::create('konsultasikeagamaan', function (Blueprint $table) {
            $table->increments('id_konsultasi_keagamaan');
            $table->string('nama', 255)->nullable(false);
            $table->string('alamat', 255);
            $table->string('telpon');
            $table->string('email');
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
        Schema::dropIfExists('konsultasikeagamaan');
    }
};
