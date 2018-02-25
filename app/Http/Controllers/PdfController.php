<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function index(Request $request){
    	/*Se obtiene el tipo de reporte*/
    	$reportType=$request->input('reportType');
    	/*Obtener informacion general que se pasara*/
    	$generalData = $this->getGeneralData();

    	if($reportType='ventas'){
    		$salesData= $this->getSalesData();
    		$pdf = PDF::loadView('reports.venta', compact('salesData'));
        	$pdf->setPaper("A4", "portrait");
       	 	return $pdf->stream('reports.venta');
    	}

    	if($reportType='merma'){
    		$wasteData= $this->getWasteData();
    		$pdf = PDF::loadView('reports.merma', compact('wasteData'));
        	$pdf->setPaper("A4", "portrait");
       	 	return $pdf->stream('reports.merma');
    	}

    	if($reportType='ambos'){
    		$salesData= $this->getWasteData();
    		$wasteData= $this->getWasteData();
    		$pdf = PDF::loadView('reports.ventaymerma', compact('salesData','wasteData'));
        	$pdf->setPaper("A4", "portrait");
       	 	return $pdf->stream('reports.ventaymerma');
    	}
        
    }

    /*Funcion para conseguir los datos que usara el reporte*/
    public function getGeneralData(){
        $data =  [
            'fecha_inicio'      => '24/02/18' ,
            'fecha_fin'   => '24/02/18',
        ];
        return $data;
    }

    /*Obtener los datos para mostrar en reporte de ventas*/
    public function getSalesData(){
        $data =  [
            'mostSoldName'      => 'Tulipanes' ,
            'mostSoldQuantity'   => '200',
            'shippingCost'   => '500.00',
            'totalSold'   => '4500.00',  
        ];
        return $data;
    }

    /*Obtener los datos para mostrar en reporte de merma*/
    public function getWasteData(){
        $data =  [
            'mostWastName'      => 'Rosas' ,
            'mostWasteQuantity'   => '300',
        ];
        return $data;
    }

}
