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
            $table->id();
            $table->string('name'); //nombre
            $table->string('email')->unique();
            //$table->timestamp('email_verificado_en')->nullable(); email_verified_a
            $table->string('password'); //contraseña
            $table->boolean('admin')->default(0);
            $table->rememberToken(); //mantener la sesion inicial
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
