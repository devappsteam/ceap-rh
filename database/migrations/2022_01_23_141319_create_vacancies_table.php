<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('job_id');
            $table->string('uuid')->unique();
            $table->tinyInteger('scholarity')->default(0);
            $table->tinyInteger('type')->default(1);
            $table->text('description')->nullable();
            $table->tinyInteger('shift_morning')->default('1');
            $table->tinyInteger('shift_evening')->default('0');
            $table->tinyInteger('shift_night')->default('0');
            $table->tinyInteger('minimum_age')->default(16);
            $table->tinyInteger('maximum_age')->default(65);
            $table->tinyInteger('sex')->default(1);
            $table->string('time_experience');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->tinyInteger('publicize_city')->default(0);
            $table->tinyInteger('publicize_hour')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->dateTime('public_date')->nullable();
            $table->dateTime('closing_date')->nullable();
            $table->tinyInteger('closed_by')->default(0);
            $table->dateTime('approve');
            $table->text('internal_note')->nullable();
            $table->tinyInteger('multiplier')->default(0);
            $table->tinyInteger('percentage')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('job_id')->references('id')->on('job_positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
