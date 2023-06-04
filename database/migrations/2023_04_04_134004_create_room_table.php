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
        Schema::create('room', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('partner_id');
            $table->string('room_name'); 
            $table->string('address1');
            $table->string('address2');
            $table->string('subdistrict');
            $table->string('city');
            $table->string('zipcode');
            $table->string('room_type');
            $table->string('room_area');
            $table->string('person');
            $table->text('room_description');
            $table->string('properties1');
            $table->string('properties2');
            $table->string('properties3');
            $table->string('properties4');
            $table->string('properties5')->nullable();
            $table->string('properties6')->nullable();
            $table->string('properties7')->nullable();
            $table->string('properties8')->nullable();
            $table->string('special_note');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->string('price');
            $table->string('review')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
