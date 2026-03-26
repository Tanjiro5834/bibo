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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('question');
            $table->text('answers');
            $table->text('correct_answer');
            $table->integer('time_limit')->nullable();
            $table->integer('max_attempts')->nullable();
            $table->integer('status')->nullable();
            $table->integer('difficulty_level')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('user_age_range')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
