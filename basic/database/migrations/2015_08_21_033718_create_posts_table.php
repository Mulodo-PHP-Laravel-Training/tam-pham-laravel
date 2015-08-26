<?php

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
        //
        Schema::create('posts', function(Blueprint $table){
            $table->increments('id');
            $table->string('title', 100);
            $table->string('alias');
            $table->text('description');
            $table->longText('content');
            $table->string('image');
            $table->integer('user_id')->unsigned();
            $table->boolean('status');
            $table->integer('ordering');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('posts');
    }
}
