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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->enum('status', [
                'confirmed',
                'hard',
                'payment_required',
                'payment_in_process',
                'partially_paid',
                'paid',
                'partially_refunded',
                'pending_cancel',
                'cancelled',
                'invalid'
            ]);
            $table->dateTime('expiration_date');
            $table->string('status_detail');
            $table->double('total_amount');


            $table->foreignId('marketplace_integration_id')->references('id')->on('integrations');
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
        Schema::dropIfExists('orders');
    }
};
