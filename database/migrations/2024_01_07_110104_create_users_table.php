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
        if (!Schema::hasTable('users'))
            Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('UserID');
                $table->string('name');
                $table->string('username')->unique();
                $table->string('email')->unique();
                $table->string('password')->nullable();
                $table->date('birth_date')->nullable();
                $table->integer('gender')->nullable();
                $table->string('phone_number')->nullable();
                $table->foreignId('RoleID')->references('RoleID')->on('roles')->onDelete('cascade');
                $table->timestamp('email_verified_at')->nullable();
                $table->string('image')->nullable();
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
        Schema::dropIfExists('users');
    }
};
