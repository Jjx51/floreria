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
            $table->string('Codigo',10)->unique();
            $table->string('NombreAttangements',30);
            $table->string('imagen',30)->nullable()->default('Sin imagen');;
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
