<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrayOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('array_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('array_id')->unsigned();
            $table->foreign('array_id')->references('id')->on('arrays')->onUpdate('cascade');
			$table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade');
            $table->integer('user_id')->unsigned(); 
            $table->integer('status_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('status_arrays')->onUpdate('cascade');
            $table->integer('cantidad');
            $table->integer('pendientes');
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
        Schema::dropIfExists('array_orders');
    }
}
