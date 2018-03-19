<?php

use Illuminate\Database\Seeder;
use App\Order;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{

    public function run()
    {
        $date = Carbon::now();
        //$fecha = $carbon->formt('d-m-Y');
        Order::create([

            'NombreCliente'         => 'floreria' ,
            'NombreDestinatario'    => 'Venta directa' ,
            'DirecionEntrega'       => 'floreria' ,
            'Referencia'            => 'no aplica' ,
            'Phone'                 => 0 ,
            'Costo'                 => 0 ,
            'Mensaje'               => 'no aplica' ,
            'FechaEntrega'          =>  $date->toDateString(),
            'HoraEntrega'           =>  $date->toTimeString(),
            'Bloque'                =>  1,
            'Prioridad'             =>  1,
            'user_id'               =>  1,
            'status_id'             =>  1,
        ]);




    }
}
