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
        Schema::create('p_clinics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estado');/** 0 - cadastro incompleto; 1 - cadastro completo */
            $table->string('CRM');
            $table->integer('especialidade');
            $table->string('horario')->nullable();                                                                                                                              ;
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_clinics');
    }
};
