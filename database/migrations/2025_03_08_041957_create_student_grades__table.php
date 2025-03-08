<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
      Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('course');
        $table->text('name');
        $table->text('year');
        $table->text('semester');
        $table->integer('prelim');
        $table->integer('midterm');
        $table->integer('prefinal');
        $table->integer('final');

        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_grades_');
    }
};
