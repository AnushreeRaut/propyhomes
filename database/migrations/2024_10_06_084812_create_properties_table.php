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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('property_type', ['Residential', 'Commercial']);
            $table->boolean('recent_property')->default(false);
            $table->boolean('newly_added_property')->default(false);
            $table->boolean('top_projects')->default(false);
            $table->enum('bhk_type', ['1BHK', '2BHK', '3BHK','4BHK','5BHK']);
            $table->decimal('price_range_start', 10, 2)->nullable();
            $table->decimal('price_range_end', 10, 2)->nullable();
            $table->enum('possession_status', ['Under construction', 'Ready to Move']);
            $table->decimal('size', 8, 2);
            $table->string('video')->nullable();
            $table->unsignedBigInteger('added_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->boolean('is_delete')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
