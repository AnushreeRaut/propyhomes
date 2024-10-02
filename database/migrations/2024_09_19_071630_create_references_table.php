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
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('mobile')->unique()->nullable();
            $table->boolean('real_estate')->nullable()->default(false);
            $table->boolean('loan')->nullable()->default(false);
            $table->enum('real_estate_type', ['buy', 'sell', 'rent','other'])->nullable();; // Add your specific types
            $table->enum('loan_type', ['personal loan', 'housing loan', 'loan for business','other'])->nullable(); // Add your specific types
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('references');
    }
};
