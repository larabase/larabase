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
        Schema::create('school_time_tables', function (Blueprint $table) {
            $table->id();
            $table->time('started_at');
            $table->time('ended_at');
            $table->enum('week_day', ['mon', 'tue', 'wen', 'thu', 'fri', 'sat', 'sun']);
            $table->foreignId('teacher_id')->constrained('teachers', 'user_id')->cascadeOnDelete();
            $table->foreignId('school_subject_id')->constrained('school_subjects', 'id')->cascadeOnDelete();
            $table->foreignId('school_class_id')->constrained('school_classes', 'id')->cascadeOnDelete();
            $table->foreignId('school_year_id')->constrained('school_years', 'id')->cascadeOnDelete();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scool_time_tables');
    }
};
