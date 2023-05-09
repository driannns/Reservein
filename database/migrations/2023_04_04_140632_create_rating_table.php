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
        Schema::create('rating', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id');
            $table->integer('room_id')->unsigned();
            $table->integer('star_rating');
            $table->text('description');
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('room')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating');
    }
};
