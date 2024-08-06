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
        Schema::create('tilawah_records', function (Blueprint $table) {
            $table->id('TilawahID');
            //TODO : CHECK HIS
            $table->foreignId('UserID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreignId('ReviewerID')->references('UserID')->on('users')->nullable()->onDelete('cascade');
            $table->string('Type');
            $table->string('ChapterStart')->nullable();
            $table->string('ChapterEnd')->nullable();
            $table->integer('StartVerse')->nullable();
            $table->integer('EndVerse')->nullable();
            $table->integer('StartPage')->nullable();
            $table->integer('EndPage')->nullable();
            $table->date('ZiyaadahDate');
            $table->text('Feedback')->nullable();
            $table->string('Score')->nullable();
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
        Schema::dropIfExists('tilawah_record');
    }
};
