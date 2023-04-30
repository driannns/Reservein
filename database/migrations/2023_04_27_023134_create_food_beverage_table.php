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
        Schema::create('food_beverage', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id');
            $table->string('name', 50);
            $table->enum('type', ['Starter', 'Main Course', 'Deserts & Drinks']);
            $table->string('description', 250);
            $table->string('price', 250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_beverage');
    }
};
