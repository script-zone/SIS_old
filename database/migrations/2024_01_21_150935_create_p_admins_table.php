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
        Schema::create('p_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('morada');
            $table->string('bi')->unique();
            $table->string('localidade');
            $table->string('codigoPostal');
            $table->string('telefone')->unique();
            $table->char('sexo', 1);
            $table->string('data_nascimento');
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
        Schema::dropIfExists('p_admins');
    }
};
