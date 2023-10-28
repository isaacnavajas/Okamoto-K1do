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



        //Creación de tabla más la creación de las anteriores para poder hacer las llaves foraneas
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recipe_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('favorite')->default(0);
            $table->timestamps();


        });


    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
