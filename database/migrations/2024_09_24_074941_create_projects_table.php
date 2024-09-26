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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('cover_image')->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('title')->nullable();;
            $table->string('banner_image')->nullable();
            $table->string('video')->nullable();
            $table->string('floor_plan_image')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price_range_start', 10, 2)->nullable();
            $table->decimal('price_range_end', 10, 2)->nullable();
            $table->string('google_link')->nullable();
            $table->boolean('is_delete')->default(false);
            $table->unsignedBigInteger('added_by')->nullable();
            ;
            $table->unsignedBigInteger('updated_by')->nullable();
            ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
