<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->string('uuid')->unique();
            $table->string('code', 36)->unique();
            $table->string('name', 240);
            $table->tinyInteger('sex')->default(0);
            $table->date('birth_date');
            $table->string('cpf', 20);
            $table->string('rg', 20);
            $table->tinyInteger('marital_status')->default(0);
            $table->string('email', 150);
            $table->text('personal_presentation');
            $table->string('naturalness', 100);
            $table->string('address_number', 5)->default('S/N');
            $table->string('address_complement', 50)->nullable();
            $table->string('address_district', 50)->nullable();
            $table->string('father_name', 150)->nullable();
            $table->string('mother_name', 150)->nullable();
            $table->tinyInteger('special_needs')->default(0);
            $table->string('special_needs_description', 1000)->nullable(true);
            $table->string('video')->nullable();
            $table->dateTime('approve')->nullable();
            $table->tinyInteger('receive_email')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
