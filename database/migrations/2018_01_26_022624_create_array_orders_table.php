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
            $table->integer('Cantidad');
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
