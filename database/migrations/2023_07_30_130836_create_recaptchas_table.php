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
        Schema::create('recaptchas', function (Blueprint $table) {
            $table->id();
            $table->string('sitekey');
            $table->string('secret');
            $table->tinyInteger('status')->default(0)->comment('0=>inactive, 1=>active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recaptchas');
    }
};
