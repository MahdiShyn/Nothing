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
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable(false);
            $table->foreignId('discountCode_id')->nullable();
            $table->foreignId('factor_id')->nullable();
            $table->string('brandName')->nullable(false);
            $table->string('modelName')->nullable(false);
            $table->string('plateNumber')->nullable(false);
            $table->string('color')->nullable(false);
            $table->boolean('confirm')->default(false);
            $table->string('description');
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
        Schema::dropIfExists('car_models');
    }
};
