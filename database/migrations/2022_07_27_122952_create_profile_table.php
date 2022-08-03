<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name')->nullable();
            $table->string('cover_img')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('gender')->nullable();
            $table->string('looking_for')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('age')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('summary')->nullable();
            $table->string('relationship')->nullable();
            $table->string('like')->nullable();
            $table->string('looking')->nullable();
            $table->string('interest')->nullable();
            $table->string('favorite_spot')->nullable();
            $table->string('smoking')->nullable();
            $table->string('language')->nullable();
            $table->string('status')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('body_type')->nullable();
            $table->string('education')->nullable();
            $table->string('religion')->nullable();
            //$table->string('looking')->nullable;

        });
    }

    /**
     * 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
