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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id');
            $table->foreignId('user_id');
            $table->string('fullname');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('address1');
            $table->string('address2');
            $table->string('state');
            $table->string('zipcode');
            $table->string('specialrequest');
            $table->string('paymentmethod');
            $table->string('cardholdername');
            $table->string('cardnumber');
            $table->string('expirydate');
            $table->string('cvc');
            $table->string('members');
            $table->timestamps();
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
