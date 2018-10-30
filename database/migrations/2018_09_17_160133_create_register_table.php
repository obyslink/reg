<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('passport')->default('default.jpg');
            $table->string('telephone');
            $table->integer('height');
            $table->date('dob');
            $table->string('country');
            $table->string('gender');
            $table->text('talent');
            $table->string('language');
            $table->text('link')->nullable();
            $table->text('video')->nullable();
            $table->string('Question1');
            $table->string('Question2');
            $table->string('Question3');
            $table->text('image');
            $table->text('message');
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
        Schema::dropIfExists('registers');
    }
}
