<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('family', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained('customers')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->date('DOB')->nullable();
            $table->string('profession')->nullable();
            $table->enum('relation', ['Mother', 'Father', 'Daughter', 'Son', 'Sibling', 'Cousin', 'Wife', 'Husband', 'Grandchild', 'Grandmother', 'Grandfather', 'Sister-in-Law', 'Mother-in-Law', 'Father-in-Law', 'Brother-in-Law', 'Nephew', 'Niece', 'Uncle', 'Aunty', 'Other'])->nullable();
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
        Schema::dropIfExists('family');
    }
};
