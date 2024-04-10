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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('times_used');
            $table->timestamps();
        });

        Schema::create('time_blocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained();
            $table->time('start_time');
            $table->time('end_time');
            $table->date('date');
            $table->timestamps();
        });

        Schema::create('student_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });

        Schema::create('instructor_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('time_block_id')->constrained();
            $table->timestamps();
        });

        Schema::create('strip_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_info_id')->constrained();
            $table->integer('remaining_lessons');
            $table->timestamps();
        });

        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_info_id')->constrained();
            $table->foreignId('instructor_info_id')->constrained();
            $table->foreignId('car_id')->constrained();
            $table->time('start_time');
            $table->time('end_time');
            $table->string('notes');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_info');
        Schema::dropIfExists('instructor_info');
        Schema::dropIfExists('strip_cards');
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('time_blocks');
        Schema::dropIfExists('cars');
    }
};
