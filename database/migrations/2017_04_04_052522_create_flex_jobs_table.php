<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlexJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flex_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('phone_number');
            $table->string('key_qualification')->nullable();
            $table->string('other_key_qualification');
            $table->longText('experience')->nullable();
            $table->longText('skills')->nullable();
            $table->string('profession');
            $table->date('availability');
            $table->string('location');
            $table->string('job_type');
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
        Schema::dropIfExists('flex_jobs');
    }
}
