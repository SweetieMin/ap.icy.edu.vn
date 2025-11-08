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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_schedule_id')->nullable()->constrained('class_schedules')->nullOnDelete();
            $table->foreignId('student_id')->nullable()->constrained('users')->nullOnDelete();
            $table->date('date');
            $table->foreignId('checked_by')
            ->nullable()
            ->constrained('users')
            ->nullOnDelete();
            $table->enum('status', ['absent', 'present']);
            $table->enum('student_care_status', ['no_answer', 'success', 'not_contact'])->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
