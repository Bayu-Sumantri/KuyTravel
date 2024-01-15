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
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            // $table->string('thumbnail');
            $table->string('location');
            $table->string('about');
            $table->string('featured_event');
            $table->string('language');
            $table->string('foods');
            $table->date('departure_date')->nullable();
            $table->string('duration')->nullable();
            $table->string('type');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_packages');
    }
};
