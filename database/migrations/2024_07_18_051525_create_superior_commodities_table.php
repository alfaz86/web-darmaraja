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
        Schema::create('superior_commodities', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('owner');
            $table->string('craft')->nullable();
            $table->string('food_processing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superior_commodities');
    }
};
