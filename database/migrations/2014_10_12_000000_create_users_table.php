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
            // $table->boolean('is_partner')->default(false);
            $table->string('name');
            $table->string('username')->unique();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dateofbirth')->nullable();
            $table->string('address')->nullable();
            $table->string('nomor')->nullable();
            $table->string('about')->nullable();
            $table->string('foto')->nullable();
            $table->integer('point')->default(0);
            $table->string('termsofservice');
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
