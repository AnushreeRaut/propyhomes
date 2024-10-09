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
        Schema::table('property_locations', function (Blueprint $table) {
            $table->dropForeign(['landmark_id']);
            $table->dropColumn('landmark_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('property_locations', function (Blueprint $table) {
            $table->foreignId('landmark_id')->constrained('landmarks')->onDelete('cascade');
        });
    }
};
