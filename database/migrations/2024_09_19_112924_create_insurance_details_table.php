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
        Schema::create('insurance_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->string('type_of_insurance_company')->nullable();
            $table->string('type_of_policy')->nullable();
            $table->decimal('premium', 10, 2)->nullable(); // assuming Premium is a decimal
            $table->date('policy_start_date')->nullable();
            $table->date('policy_end_date')->nullable();
            $table->text('comment')->nullable(); // Default is NULL
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
        Schema::dropIfExists('insurance_details');
    }
};
