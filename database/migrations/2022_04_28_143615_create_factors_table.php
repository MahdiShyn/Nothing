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
        Schema::create('factors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->nullable(false);
            $table->foreignId('carModel_id')->nullable(false);
            $table->string('discount_id')->nullable();
            $table->enum('paymentMethod',['online','cardToCard','creditCard'])->nullable(false);
            $table->enum('status',[
                'deskClerkAnswer',
                'accountantAnswer',
                'done',
                'canceled'
            ])->default('accountantAnswer')->nullable(false);
            $table->boolean('paid')->default(false)->nullable(false);
            $table->boolean('confirm')->default(false);
            $table->boolean('discount')->default(false);
            $table->string('description')->default(NULL)->nullable(true);
            $table->string('accountantNote')->default(NULL)->nullable(true);
            $table->string('deskClerkNote')->default(NULL)->nullable(true);
            $table->time('reserveDate')->nullable(false);
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
        Schema::dropIfExists('factors');
    }
};
