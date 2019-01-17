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
            $table->integer('user_id')->unsigned();
            $table->string('property_image')->default('default.png');
            $table->string('property_title');
            $table->text('property_description');
            $table->integer('property_area');
            $table->integer('property_bedroom');
            $table->integer('property_bathroom');
            $table->integer('property_garage');
            $table->text('property_address');
            $table->string('property_status');
            $table->double('property_price');
            $table->year('property_year_built');
            $table->boolean('property_publication_status');
            $table->boolean('is_approve');
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}
