<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('descrtiption');
            $table->integer('views')->default(0);

            //Users Foreign Key Setup
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            //Category Foreign Key Setup
            $table->integer('categori_id')->unsigned();
            $table->foreign('categori_id')->references('id')->on('categories');

            //Tag Foreign Key Setup
            $table->integer('tag1_id')->unsigned();
            $table->foreign('tag1_id')->references('id')->on('tags');
            $table->integer('tag2_id')->unsigned();
            $table->foreign('tag2_id')->references('id')->on('tags');
            $table->integer('tag3_id')->unsigned();
            $table->foreign('tag3_id')->references('id')->on('tags');


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
        Schema::dropIfExists('questions');
    }
}
