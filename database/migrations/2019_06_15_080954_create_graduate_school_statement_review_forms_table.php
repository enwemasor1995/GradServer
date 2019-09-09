<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduateSchoolStatementReviewFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduate_school_statement_review_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('university_and_course_applied_for');
            $table->longText('summary_of_interest');
            $table->string('curriculum_vitae');
            $table->string('package');
            $table->string('has_expert')->nullable();
            $table->string('form_id');
            $table->string('status');
            $table->boolean('completed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduate_school_statement_review_forms');
    }
}
