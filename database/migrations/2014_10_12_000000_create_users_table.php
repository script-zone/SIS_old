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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('password');
            $table->string('nome');
            $table->string('sobreNome');
            $table->string('email')->unique();
            $table->string('bi')->nullable()->unique();
            $table->string('telefone')->nullable()->unique();
            $table->string('morada')->nullable();
            $table->string('localidade')->nullable();
            $table->string('codigoPostal')->nullable();
            $table->string('tipo')->nullable();
            $table->string('foto')->nullable();
            $table->char('sexo', 1)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
