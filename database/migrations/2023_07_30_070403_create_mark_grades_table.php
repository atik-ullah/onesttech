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
        Schema::create('mark_grades', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('point');
            $table->string('parcent_from');
            $table->string('parcent_to');
            $table->string('remarks');
            $table->tinyInteger('status')->default(0)->comment('0=>Inactive, 1=>Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mark_grades');
    }
};
