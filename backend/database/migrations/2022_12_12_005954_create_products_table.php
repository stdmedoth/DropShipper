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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');

            // Dimension
            $table->double('height');
            $table->double('length');
            $table->double('width');

            $table->double('price');
            $table->double('weight');

            $table->string('SKU');

            $table->enum('status', ['UNLIST', 'NORMAL']);
            $table->double('stock');

            $table->foreignId('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('provider_integration_id')->nullable()->default(NULL);
            $table->foreign('provider_integration_id')->references('id')->on('integrations');
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
        Schema::dropIfExists('products');
    }
};
