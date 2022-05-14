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
            $table->foreignId('service_id')->nullable();
            $table->foreignId('carModel_id')->nullable();
            $table->string('paymentMethod');
            // $table->enum('paymentMethod',['online','cardToCard','creditCard']);
            $table->enum('status',[
                'deskClerkAnswer',
                'accountantAnswer',
                'done',
                'canceled'
            ])->default('accountantAnswer');
            $table->boolean('paid');
            $table->boolean('confirm')->default(false);
            $table->boolean('discount')->default(false);
            $table->string('')->nullable();
            $table->string('description');
            $table->string('accountantNote');
            $table->string('deskClerkNote');
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
