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
        Schema::create('school_fees_transactions', function (Blueprint $table) {
            $table->id();
            $table->uuid('reference')->unique();
            $table->enum('status', ['pending', 'success', 'failed'])->default('pending');
            $table->foreignId('student_id')->constrained('students', 'user_id')->cascadeOnDelete();
            $table->foreignId('school_fee_id')->nullable()->constrained('school_fees', 'id')->nullOnDelete();
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_fees_transactions');
    }
};
