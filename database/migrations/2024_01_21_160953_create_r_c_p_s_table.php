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
        Schema::create('r_c_p_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('grupo_sanguineo');
            $table->string('alergias');
            $table->string('deficiencia');
            $table->string('historico_familiar')->nullable();;
            $table->string('terapeutica')->nullable();;
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_c_p_s');
    }
};
