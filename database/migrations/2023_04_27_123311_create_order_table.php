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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('room_id')->unsigned();
            $table->foreignId('user_id');
            $table->string('fullname');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('specialrequest');
            $table->string('checkinday');
            $table->string('checkinhour');
            $table->string('checkoutday');
            $table->string('checkouthour');
            $table->string('duration');
            $table->string('additionalItems');
            $table->string('totalprice');
            $table->string('status');
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('room')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
