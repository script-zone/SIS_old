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
        Schema::create('dias_trabalho', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('p_clinic_id');
            $table->unsignedBigInteger('dia_id');
            $table->foreign('p_clinic_id')->references('id')->on('p_clinics')->onDelete('CASCADE');
            $table->foreign('dia_id')->references('id')->on('dias')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dias_trabalho');
    }
};
