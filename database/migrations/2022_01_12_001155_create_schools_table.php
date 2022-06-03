<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('uuid', 36)->unique();
            $table->string('code', 36)->unique();
            $table->string('name', 250);
            $table->string('cnpj', 20)->unique();
            $table->string('phone', 16);
            $table->string('email', 250);
            $table->string('director_name', 150);
            $table->string('director_phone', 16);
            $table->string('address', 150);
            $table->string('address_number', 5)->default('S/N');
            $table->string('address_complement', 50);
            $table->string('address_district', 50);
            $table->string('address_postcode', 15);
            $table->tinyInteger('public')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->text('note')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
