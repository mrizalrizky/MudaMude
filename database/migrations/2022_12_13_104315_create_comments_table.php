<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            // user pemilik comment
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // commentnya ada di post id berapa
            $table->foreignId('post_id');
            $table->foreign('post_id')->references('id')->on('posts');

            $table->string('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
