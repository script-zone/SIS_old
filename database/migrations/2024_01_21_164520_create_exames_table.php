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
        Schema::create('exames', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estado');
            $table->date('data');
            $table->string('hora');
            $table->integer('tipo');
            $table->integer('resultado')->nullable();
            $table->string('descricao')->nullable();
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('medico_id')->nullable();
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
        Schema::dropIfExists('exames');
    }
};
