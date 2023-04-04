<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_extracurricular', function (Blueprint $table) {
            // $table->unsignedBigInteger('student_id');
            $table->uuid('student_id')->nullable(false);
            $table->foreign('student_id')->references('id')->on('students')->onDelete('restrict');
            // $table->unsignedBigInteger('extracurricular_id');
            $table->uuid('extracurricular_id')->nullable(false);
            $table->foreign('extracurricular_id')->references('id')->on('extracurriculars')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_extracurricular');
    }
};
