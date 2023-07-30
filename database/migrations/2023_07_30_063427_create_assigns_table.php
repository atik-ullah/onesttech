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
        Schema::create('assigns', function (Blueprint $table) {
            $table->id();
            $table->string('fees_group');           
            $table->foreignId('class_id')->constrained();    
            $table->foreignId('section_id')->constrained();   
            $table->enum('gender',['M','F','O']);
            $table->foreignId('category_id')->constrained(); 
            $table->string('fees_type');
            $table->string('students_list');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigns');
    }
};
