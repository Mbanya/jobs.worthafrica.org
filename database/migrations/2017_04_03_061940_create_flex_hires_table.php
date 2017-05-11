<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlexHiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flexhires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('organisation_name');
            $table->string('organisation_size');
            $table->string('organisation_type');
            $table->string('Physical_Address');
            $table->string('email');
            $table->string('key_qualification');
            $table->longText('Qualification_Description')->nullable();
            $table->string('experience');
            $table->longText('Responsibilities')->nullable();
            $table->longText('skills')->nullable;
            $table->integer('minSal')->nullable();
            $table->integer('maxSal')->nullable();
            $table->string('Frequency_Rate');
            $table->string('location');
            $table->string('job_type');
            $table->date('start_date');
            $table->date('end_date');

            $table->index('user_id');
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
        Schema::dropIfExists('flexhires');
    }
}
