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
            $table->string('email_address');
            $table->string('job_title');
            $table->longText('description');
            $table->longText('responsibilities')->nullable();
            $table->longText('requirements');
            $table->integer('minSal')->nullable();
            $table->integer('maxSal')->nullable();
            $table->date('start_date');
            $table->date('deadline');
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
