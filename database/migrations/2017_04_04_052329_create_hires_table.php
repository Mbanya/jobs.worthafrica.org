<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
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
            $table->date('start_date');
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hires');
    }
}
