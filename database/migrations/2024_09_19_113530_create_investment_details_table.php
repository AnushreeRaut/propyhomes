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
        Schema::create('investment_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->string('financial_institute_name')->nullable();
            $table->string('type_of_investment')->nullable();
            $table->enum('investments', ['Monthly', 'Yearly'])->nullable(); // Store the frequency and amount as a string
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('comments')->nullable();
            $table->boolean('is_delete')->default(false);
            $table->unsignedBigInteger('added_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps(); // Handles both created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investment_details');
    }
};
