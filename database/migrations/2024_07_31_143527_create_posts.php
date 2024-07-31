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
        if (!Schema::hasTable('posts'))
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('slug');
                $table->text('excerpt');
                $table->text('body');
                $table->string('image');
                $table->date('published_at');

                $table->foreignId('writter_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreignId('category_id')->constrained('post_categories');
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
        Schema::dropIfExists('posts');
    }
};
