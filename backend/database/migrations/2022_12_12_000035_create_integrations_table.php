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
        Schema::create('integrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->enum('type', ['marketplace', 'provider']);
            $table->integer('place_id');

            $table->enum('auth_type', [
                'authorization_code',
                'client_credentials',
                'bearer',
                'token'
            ]);


            $table->string('client_id')->nullable();
            $table->string('client_secret')->nullable();
            $table->string('partner_id')->nullable();
            $table->string('auth_code')->nullable();
            $table->string('auth_token')->nullable();
            $table->string('auth_expires')->nullable();


            $table->foreignId('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('integrations');
    }
};
