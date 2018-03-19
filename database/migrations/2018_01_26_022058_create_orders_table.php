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
            $table->string('NombreCliente')->default('floreria');
            $table->string('NombreDestinatario')->default('cliente');
            $table->mediumText('DirecionEntrega')->nullable();
            $table->mediumText('Referencia')->nullable();
            $table->string('Phone')->default('0')->nullable();
            $table->float('Costo',8,2);
            $table->text('Mensaje')->nullable();
            $table->date('FechaEntrega')->default($date->toDateString());
            $table->time('HoraEntrega')->default($date->toTimeString());
            $table->integer('Bloque')->default(1);
            $table->integer('Prioridad')->default(1);
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
