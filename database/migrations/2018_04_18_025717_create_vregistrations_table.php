<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vregistrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enroll_number');
            $table->string('name');
            $table->string('fname');
            $table->string('course');
            $table->integer('year');
            $table->string('email');
            $table->string('dept');
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
        Schema::dropIfExists('vregistrations');
    }
}
