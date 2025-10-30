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
        Schema::create('syllabi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('subjects');
            $table->unsignedInteger('lesson_number');
            $table->string('content')->nullable();
            $table->string('vocabulary')->nullable();
            $table->string('grammar')->nullable();
            $table->string('assignment')->nullable();
            $table->string('CLO')->nullable();
            $table->boolean('is_url')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syllabi');
    }
};
