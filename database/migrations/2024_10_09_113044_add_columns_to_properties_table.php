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
        Schema::table('properties', function (Blueprint $table) {
            $table->decimal('flat_area', 8, 2)->nullable()->after('size'); // Flat Area (Sq Ft)
            $table->date('project_completion_date')->nullable()->after('flat_area'); // Project Completion Date
            $table->boolean('rera')->default(false)->after('project_completion_date'); // RERA
            $table->unsignedInteger('no_of_flats')->nullable()->after('rera'); // No of Flats
            $table->unsignedInteger('no_of_floors')->nullable()->after('no_of_flats'); // No of Floors
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn(['flat_area', 'project_completion_date', 'rera', 'no_of_flats', 'no_of_floors']);
        });
    }
};
