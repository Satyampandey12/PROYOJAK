<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregistrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enroll_number');
            $table->string('name');
            $table->string('fname');
            $table->string('course');
            $table->integer('year');
            $table->string('email');
            $table->string('field');
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
        Schema::dropIfExists('pregistrations');
    }
}
