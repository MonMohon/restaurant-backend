<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResturantsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('title');                //Title field
            $table->string('body');                 //History field
            $table->string('slug');
            $table->string('image_url');   //Resturant image Path
            $table->string('site_url');               //QR Code
            $table->string('area');
            $table->string('country');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('resturant_id')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->text('body');     //comments
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
        Schema::dropIfExists('comments');
    }
}
