<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('account_id');
            $table->string('type');
            $table->string('provider');
            $table->bigInteger('provider_account_id');
            $table->string('refresh_token')->nullable();
            $table->string('access_token')->nullable();
            $table->integer('expires_at')->nullable();
            $table->string('token_type')->nullable();
            $table->bigInteger('id_token')->nullable();
            $table->string('scope')->nullable();
            $table->string('session_state')->nullable();
            $table->timestamps();

            // TODO: check this
            $table->foreignId('user_account_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
