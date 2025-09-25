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
        Schema::create('student_care_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attendance_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('implementer_id')->nullable()->constrained('users')->nullOnDelete(); // ai gọi
            $table->enum('status', ['success', 'failed', 'no_answer'])->default('no_answer');
            $table->text('parent_response')->nullable(); // phụ huynh trả lời sao
            $table->text('note')->nullable(); // ghi chú thêm
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_care_histories');
    }
};
