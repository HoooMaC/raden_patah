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
        Schema::disableForeignKeyConstraints();
        if (!Schema::hasTable('program_execution'))
            Schema::create('program_execution', function (Blueprint $table) {
                $table->id();
                $table->date('date');
                $table->integer('attendances');
                $table->string('image');
                $table->text('information');
                $table->foreignId('program_id')->constrained('programs');
                $table->timestamps();
            });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_execution');
    }
};
