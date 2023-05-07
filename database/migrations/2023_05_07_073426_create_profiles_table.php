<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("img1");
            $table->string("img2");
            $table->string("img3");
            $table->string("nickname");
            $table->string("bio");
            $table->string("course");
            $table->string("school");
            $table->unsignedBigInteger("age");
            $table->string("height");
            $table->string("hobbies1");
            $table->string("hobbies2");
            $table->string("hobbies3");
            $table->string("interest1");
            $table->string("interest2");
            $table->string("interest3");
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
