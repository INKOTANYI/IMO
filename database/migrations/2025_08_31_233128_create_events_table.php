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
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('title'); // String for event title (e.g., "Disability Awareness Campaign")
            $table->string('location'); // String for event location (e.g., "Kicukiro District, Rwanda")
            $table->dateTime('date_time'); // DateTime for event date and time (e.g., "2025-10-15 10:00:00")
            $table->text('description'); // Text for event description
            $table->string('image')->nullable(); // Nullable string for image file path (e.g., "event1.jpg")
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};