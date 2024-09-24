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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->boolean('salary')->nullable();
            $table->boolean('business')->nullable();
            $table->string('name_of_organization', 255)->nullable();
            $table->string('job_profile')->nullable();
            $table->enum('income_slab', [
                'Below 5 lacs',
                'Rs 5 lacs to Rs 10 lacs',
                'Rs 10 lacs to Rs 20 lacs',
                'Above Rs 20 lacs'
            ])->nullable();
            $table->enum('nature_of_business', [
                'Trading',
                'Manufacturing',
                'Contractor',
                'Service Provider',
                'Professional',
                'Other'
            ])->nullable();
            $table->text('nature_of_activity')->nullable();
            $table->string('turnover')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
