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
        Schema::create('promote_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->constrained();    
            $table->foreignId('section_id')->constrained();    
            $table->string('p_sec')->nullable();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promote_students');
    }
};
