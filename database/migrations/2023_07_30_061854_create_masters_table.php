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
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->string('fees_group');
            $table->string('fees_type');
            $table->date('due_date');
            $table->string('amount');
            $table->string('fine_type');
            $table->tinyInteger('status')->default(0)->comment('0=>Inactive, 1=>Active');
            $table->string('percentage');
            $table->string('fine_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masters');
    }
};
