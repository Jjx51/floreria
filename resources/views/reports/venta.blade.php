<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>Reporte de Venta</title>
  <link rel="stylesheet" type="text/css" href="css/pdf.css" media="all">
</head>

<body>
  <header class="clearfix">
    <div class="center">
      <img id="logo" src="img/pdf/logo.jpeg">
    </div>
    <h1 class="empresa">REPORTE DE VENTA</h1>
    
    <table id="letra" class="table">
      <thead>
        <tr class="text-center">
          <th class="ancho50">FECHA INICIO: {{ $generalData['fecha_inicio'] }}</th>
          <th class="ancho50">FECHA FINAL: {{ $generalData['fecha_fin'] }}</th>
        </tr>                    
      </thead>
    </table>      
  </header>

  <!--TABLA VENTAS-->
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title text-center">Tabla de Productos</h3>
      </div><!-- /.box-header -->

      <div class="box-body">
        <table class="table table-bordered">

          <thead >
            <tr class="text-center">
              <th >NOMBRE DEL PRODUCTO</th>
              <th >CANTIDAD VENDIDA</th>
              <th >DESCRIPCIÓN</th>
            </tr>
          </thead>
                      
          <tbody>                           
            <tr class="text-center">
              <td class="ancho30" >Arreglo de Rosas</td>
              <td class="ancho20" >15</td>
              <td class="ancho50" >
                <a >12 Rosa</a>
                <a >1 Caja</a>
                <a >1 Moño</a>
                <a >12 Rosa</a>
                <a >1 Caja</a>
                <a >1 Moño</a>
                <a>1 Moño</a>
                <a >12 Rosa</a>
                <a >1 Caja</a>
                <a >1 Moño</a>
              </td>
            </tr>
                      
            <tr class="text-center">
              <td class="ancho20" >Rosas</td>
              <td class="ancho15">120</td>
              <td class="ancho50" >
                <a> Producto Individual</a>
              </td>
            </tr >

            <tr class="text-center">
              <td class="ancho20" >Rosas</td>
              <td class="ancho15">14</td>
              <td class="ancho50" >
                <a> Producto Individual</a>
              </td>
            </tr >

            <tr class="text-center">
              <td class="ancho20" >Rosas</td>
              <td class="ancho15">120</td>
              <td class="ancho50" >
                <a> Producto Individual</a>
              </td>
            </tr >
          </tbody>
        </table>
      </div><!-- /.box-body -->
      
      <div class="box-footer clearfix"></div>
    </div><!-- /.box -->
  </div>
  <!--FIN TABLA VENTAS-->
  <div class="col-md-12">
    <div class="box">
    <!-- TABLA VENDIDOS-->
      <div class="box-header with-border">
        <h3 class="box-title text-center">Lo más vendido</h3>
      </div><!-- /.box-header -->

      <div class="box-body">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th class="ancho50">NOMBRE DEL PRODUCTO</th>
              <th class="ancho50">CANTIDAD VENDIDA</th>
            </tr>                    
          </thead>
            <tbody>
            <tr class="text-center">
              <td class="ancho50">{{ $salesData['mostSoldName'] }}</td>
              <td class="ancho50">{{ $salesData['mostSoldQuantity'] }}</td>
            </tr>
            </tbody>
        </table>
        <!--FIN TABLA VENDIDOS-->

        <!--TABLA INFORME-->
        <div class="box-header with-border">
          <h3 class="box-title text-center">INFORME</h3>
        </div>
                    
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th class="ancho50">Costo de Envio</th>
              <th class="ancho50">${{ $salesData['shippingCost'] }}</th>
            </tr>                    
          </thead>
            <tbody>
            <tr class="text-center">
              <td class="ancho50 letra-negra">Total Vendido</td>
              <td class="ancho50 letra-negra">${{ $salesData['totalSold'] }}</td>
            </tr>
            </tbody>
        </table>
        <!--FIN TABLA INFORME-->
      
      </div><!-- /.box-body -->
      <div class="box-footer clearfix"></div>
    </div><!-- /.box -->
  </div>

  </body>
</html>


