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
        Schema::table('landmarks', function (Blueprint $table) {
            // Drop the foreign key constraint and the 'area_id' column
            $table->dropForeign(['area_id']);
            $table->dropColumn('area_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('landmarks', function (Blueprint $table) {
            // Restore the 'area_id' column and foreign key constraint
            $table->foreignId('area_id')->constrained('areas')->onDelete('cascade');
        });
    }
};
