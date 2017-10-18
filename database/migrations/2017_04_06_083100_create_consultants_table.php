<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('phone_number');
            $table->string('city');
            $table->string('country');
            $table->string('key_qualification')->nullable();
            $table->string('experience')->nullable();
            $table->string('technical')->nullable();
            $table->string('donor');
            $table->string('wkexp');
            $table->integer('salary_rate');
            $table->string('conflict');
            $table->date('availability');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultants');
    }
}
