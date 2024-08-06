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
        if (!Schema::hasTable('programs'))
            Schema::create('programs', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('description');
                $table->string('time')->nullable();
                $table->string('icon')->nullable();
                $table->boolean('isActive')->default(true);
                $table->foreignId('RoleID')->references('RoleID')->on('roles')->onDelete('cascade');
                $table->foreignId('program_category_id')->constrained('program_categories');
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
        Schema::dropIfExists('programs');
    }
};
