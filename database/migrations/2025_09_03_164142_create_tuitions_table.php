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
        Schema::create('tuitions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('receipt_number')->unique()->nullable();
            $table->foreignId('program_id')->nullable()->constrained('programs')->nullOnDelete();
            $table->foreignId('season_id')->nullable()->constrained('seasons')->nullOnDelete();
            $table->decimal('price', 10, 2);
            $table->enum('status', ['pending', 'paid', 'failed'])->default('pending');
            $table->enum('payment_method', ['cash', 'bank_transfer'])->default('cash');
            $table->foreignId('bank_id')->nullable()->constrained('banks')->nullOnDelete();
            $table->string('content_transaction')->nullable();
            $table->string('note')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuitions');
    }
};
