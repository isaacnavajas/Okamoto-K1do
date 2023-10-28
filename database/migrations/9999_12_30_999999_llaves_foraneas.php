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


        //llaves foraneas de favorites
        Schema::table('favorites', function (Blueprint $table) {
            $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
        });

        //llaves foraneas de recipes
        Schema::table('recipes', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            //$table->foreign('category_id')->references('id')->on('categories');
        });

        //llaves foraneas de categories
        //Schema::table('categories', function (Blueprint $table) {
           // $table->foreign('recipe_id')->references('id')->on('recipes');
        //});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
