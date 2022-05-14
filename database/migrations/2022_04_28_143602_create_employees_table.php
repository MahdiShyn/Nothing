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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accountant_id')->nullable();
            $table->foreignId('worker_id')->nullable();
            $table->foreignId('deskClerk_id')->nullable();
            $table->enum('action',['accountant','deskclerk','worker'])->nullable(false);
            $table->double('salary')->nullable(false);
            $table->timestamp('birthday')->nullable(false);
            $table->string('address')->nullable(false);
            $table->timestamp('overTime')->nullable(true);
            $table->string('fathersName')->nullable(false);
            $table->string('educationDegree')->nullable(false);
            $table->string('Duty')->nullable(false);
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
        Schema::dropIfExists('employees');
    }
};
