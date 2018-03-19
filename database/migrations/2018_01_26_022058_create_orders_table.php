<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

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
            $date = Carbon::now();
            $table->increments('id');
            $table->integer('array_id')->unsigned(); 
            $table->integer('cantidad')->default(1); 
            
            $table->string('NombreCliente')->default('Sin Nombre');
            $table->string('NombreDestinatario')->default('Sin Nombre');
            $table->mediumText('DirecionEntrega')->nullable();
            $table->mediumText('Referencia')->nullable();
            $table->string('Phone')->default('Sin telefono')->nullable();
            $table->float('Costo',8,2);
            $table->text('Mensaje')->nullable();
            $table->string('Lugar')->default('Sin Nombre');
            $table->integer('Prioridad')->default(1);
            $table->date('FechaEntrega')->default($date->toDateString());
            $table->time('HoraEntrega')->default($date->toTimeString());
            $table->integer('Bloque')->default(1);
            $table->integer('Florista')->unsigned(); 
            $table->integer('Arreglo_status')->unsigned()->default(1);
            $table->integer('Repartidor')->unsigned(); 
            $table->integer('Orden_status')->unsigned()->default(1); 
            $table->date('Entrega')->nullable();
            $table->mediumText('NotaEntrega')->nullable();

            $table->foreign('array_id')->references('id')->on('arrays')->onUpdate('cascade');           
            $table->foreign('Florista')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('Arreglo_status')->references('id')->on('status_arrays')->onUpdate('cascade');
            $table->foreign('Repartidor')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('Orden_status')->references('id')->on('status_orders')->onUpdate('cascade');
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
