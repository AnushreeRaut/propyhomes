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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->string('type_of_bank')->nullable(); // Bank type as text
            $table->string('loan_type')->nullable(); // Loan type
            $table->decimal('loan_amount', 15, 2)->nullable(); // Loan amount
            $table->decimal('EMI', 10, 2)->nullable(); // EMI
            $table->date('start_date')->nullable(); // Loan start date
            $table->text('comment')->nullable(); // Comment, default NULL
            $table->boolean('is_delete')->default(false);
            $table->unsignedBigInteger('added_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
