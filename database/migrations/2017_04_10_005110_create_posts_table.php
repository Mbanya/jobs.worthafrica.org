<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('Job_title');
            $table->string('location');
            $table->string('email');
            $table->string('reference_code');
            $table->string('key_qualification');
            $table->longText('Qualification_Description')->nullable();
            $table->string('experience');
            $table->longText('Responsibilities')->nullable();
            $table->longText('skills')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
