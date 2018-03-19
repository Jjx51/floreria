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
            'array_id'              => '1',
            'cantidad'              => '2',
            'NombreCliente'         => 'floreria' ,
            'NombreDestinatario'    => 'Venta directa' ,
            'DirecionEntrega'       => 'floreria' ,
            'Referencia'            => 'no aplica' ,
            'Phone'                 => '22-22-22-22-22' ,
            'Costo'                 => 100 ,
            'Mensaje'               => 'no aplica' ,
            'Prioridad'             =>  1,
            'FechaEntrega'          =>  $date->toDateString(),
            'HoraEntrega'           =>  $date->toTimeString(),
            'Bloque'                =>  1,
            'Florista'              =>  2,
            'Arreglo_status'        =>  1,
            'Repartidor'            =>  3,
            'Orden_status'          =>  1,
            'NotaEntrega'           =>  'sin comentarios'
        ]);




    }
}
