<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArraysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); 
            $table->integer('status_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('status_arrays')->onUpdate('cascade');
            $table->string('Codigo',10)->unique();
            $table->string('NombreAttangements',30);
            $table->string('imagen',30);
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
        Schema::dropIfExists('arrays');
    }
}
