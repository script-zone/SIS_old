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
        Schema::create('procedimentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estado');
            $table->date('data');
            $table->integer('hora');
            $table->integer('tipo');
            $table->integer('descricao')->nullable();;
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('CASCADE');
            $table->unsignedBigInteger('medico_id');
            $table->foreign('medico_id')->references('id')->on('p_clinics')->onDelete('CASCADE');
            $table->unsignedBigInteger('rcp_id');
            $table->foreign('rcp_id')->references('id')->on('r_c_p_s')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedimentos');
    }
};
