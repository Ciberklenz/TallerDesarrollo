<style type="text/css">
  

{ 
  margin: 0; 
  padding: 0; 
}
body { 
  font: 14px/1.4 Georgia, Serif; 
}
#page-wrap {
  margin: 50px;
}
p {
  margin: 20px 0; 
}

  /* 
  Generic Styling, for Desktops/Laptops 
  */
  table { 
    width: 40%; 
    border-collapse: collapse; 
  }

#tabla_principal {
    width: 100%; 
    border-collapse: collapse; 
  }


  /* Zebra striping */
  tr:nth-of-type(odd) { 
    background: #eee; 
  }
  th { 
    background: #333; 
    color: white; 
    font-weight: bold; 
  }
  td, th { 
    padding: 6px; 
    border: 1px solid #ccc; 
    text-align: left; 
  }


</style>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FACTURAS SISTEMA</title>

</head>
<body>

@foreach($factura_especifica as $factura_especifica)
<h1>INFORMACION FACTURA N° {{$factura_especifica->numero_factura}}</h1>

<h3>Datos proveedor</h3>
  <TABLE BORDER class="tabla_1">
 

 
  <TR>
    <TD >N° Factura: </TD> <TD>{{$factura_especifica->numero_factura}}</TD>
  </TR>
  <TR>
    <TD>Nombre Proveedor: </TD> <TD>{{$factura_especifica->nombre_proveedor}}</TD> 
  </TR>
  <TR>
    <TD>Rut Proveedor: </TD> <TD>{{$factura_especifica->rut_proveedor}}</TD> 
  </TR>
  <TR>
    <TD>Fecha Emision: </TD> <TD>{{$factura_especifica->fecha_emision}}</TD> 
  </TR>
   
</TABLE>


  <br><br>

  <div  class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Detalle de factura</h3>
      </div>
      <div class="box-body">
        <table id="tabla_principal" class="table table-striped">
          <thead>

            <th >Id </th>
            <th> Material</th>
           <th> Codigo</th>
          <th> Cantidad</th>
          <th> Obra asociada</th>

          </thead>
          <tbody>
            <tr>
    
            </tr>
          @foreach($mates as $mates)
            <tr>
                <td>{{$mates->id}}</td>
                <td>{{$mates->nombre}}</td>
                <td>{{$mates->codigo}}</td>

                <td >{{$mates->cantidad}}</td>
                <td >{{$mates->nombre_obra}}</td>
             
               
            

            </tr>
            @endforeach
           
        
          </tbody>
        </table>
        
      </div><!-- /.box-body -->
<br><br>

<TABLE BORDER class="tabla_3">
  <TR>
    <TD>TIPO PAGO </TD> <TD>{{$factura_especifica->tipo_pago}}</TD>
  </TR>
  <TR>
    <TD>NETO: </TD> <TD>{{$factura_especifica->neto}}</TD> 
  </TR>
  <TR>
    <TD>IVA: </TD> <TD>{{$factura_especifica->iva}}</TD> 
  </TR>
  <TR>
    <TD>TOTAL: </TD> <TD>{{$factura_especifica->valor_total}}</TD> 
  </TR>
</TABLE>

@endforeach


      <div class="box-footer clearfix">

      </div>
    </div>

  </div>



</body>
</html>


