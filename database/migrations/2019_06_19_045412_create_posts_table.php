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
            $table->bigIncrements('id');
            $table->string('post_title');
            $table->text('post_summary');
            $table->longText('post_content');
            $table->text('post_image');
            $table->text('post_image_thumb');
            $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->index('user_id');
            // $table->index('category_id');
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
