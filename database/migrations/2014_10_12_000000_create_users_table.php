<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('username', 16);
            $table->string('email')->unique();
            $table->string('password', 64);
            // $table->string('phone');
            // $table->string('institution', 64);
            // $table->foreignId('membership_id');
            // $table->foreign('membership_id')->references('membership_id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('posts_id');
            // $table->foreign('posts_id')->references('posts_id')->on('posts')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamp('email_verified_at');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
