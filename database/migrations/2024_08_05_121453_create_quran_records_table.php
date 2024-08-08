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
        Schema::create('quran_records', function (Blueprint $table) {
            $table->id('QuranRecordID');
            $table->foreignId('HafizID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreignId('ReviewerID')->nullable()->references('UserID')->on('users')->onDelete('cascade');
            $table->string('Category');
            $table->string('StartChapter');
            $table->string('EndChapter');
            $table->integer('StartVerse');
            $table->integer('EndVerse');
            $table->date('ZiyaadahDate');
            $table->text('Feedback')->nullable();
            $table->string('Score');
            $table->boolean('IsVerified')->default(false);
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
        Schema::dropIfExists('ziyaadah_record');
    }
};
