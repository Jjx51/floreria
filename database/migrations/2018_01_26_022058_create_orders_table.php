<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NombreCliente');
            $table->string('NombreDestinatario');
            $table->mediumText('DirecionEntrega');
            $table->mediumText('Referencia');
            $table->integer('Phone');
            $table->float('Costo',8,2);
            $table->text('Mensaje'); 
            $table->date('FechaEntrega');
            $table->time('HoraEntrega');
            $table->integer('Bloque');
            $table->integer('Prioridad');
            $table->integer('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->integer('status_id')->unsigned(); 
            $table->foreign('status_id')->references('id')->on('status_orders')->onUpdate('cascade');
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
        Schema::dropIfExists('orders');
    }
}
