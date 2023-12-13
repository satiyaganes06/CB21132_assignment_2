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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('school', 2); // GP or MS
            $table->string('sex', 1); // F or M
            $table->integer('age');
            $table->string('address', 1); // U or R
            $table->string('famsize', 3); // LE3 or GT3
            $table->string('Pstatus', 1); // T or A
            $table->integer('Medu');
            $table->integer('Fedu');
            $table->string('Mjob');
            $table->string('Fjob');
            $table->string('reason');
            $table->string('guardian');
            $table->integer('traveltime');
            $table->integer('studytime');
            $table->integer('failures');
            $table->string('schoolsup');
            $table->string('famsup');
            $table->string('paid');
            $table->string('activities');
            $table->string('nursery');
            $table->string('higher');
            $table->string('internet');
            $table->string('romantic');
            $table->integer('famrel');
            $table->integer('freetime');
            $table->integer('goout');
            $table->integer('Dalc');
            $table->integer('Walc');
            $table->integer('health');
            $table->integer('absences');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
