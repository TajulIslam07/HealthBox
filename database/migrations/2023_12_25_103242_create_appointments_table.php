<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('p_name');
            $table->string('email');
            $table->integer('phone');
            //$table->string('speciality');
            $table->integer('doctor_id');
            $table->date('date');
            $table->string('message')->nullable();
           // $table->integer('serial')->nullable();
            //$table->integer('room')->nullable();
            //$table->string('status')->nullable();
            $table->string('age')->nullable();
            $table->string('bloodGroup')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
