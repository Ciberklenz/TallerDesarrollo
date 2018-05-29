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


  <br><br>

  <div class="col-md-12">
    <div class="box">
       @foreach($obra_especifica as $obra_especifica)
      <h1>INFORMACION OBRA  {{$obra_especifica->nombre_obra}}</h1>

<h3>Datos Obra:</h3>
  <TABLE BORDER class="tabla_1">

  <TR>
    <TD >Id obra : </TD> <TD>{{$obra_especifica->id}}</TD>
  </TR>
  <TR>
    <TD>Nombre obra: </TD> <TD>{{$obra_especifica->nombre_obra}}</TD> 
  </TR>
  <TR>
    <TD>Direccion: </TD> <TD>{{$obra_especifica->direccion_obra}}</TD> 
  </TR>
  <TR>
    <TD>Empresa: </TD> <TD>{{$obra_especifica->empresa_obra}}</TD> 
  </TR>
  <TR>
    <TD>Rubro: </TD> <TD>{{$obra_especifica->rubro_obra}}</TD> 
  </TR>
  <TR>
    <TD>Telefono: </TD> <TD>{{$obra_especifica->telefono_obra}}</TD> 
  </TR>
   
</TABLE>
            @endforeach
          </tbody>
        </table>
        
      </div><!-- /.box-body -->
<br><br>

<h3>Materiales asignados a esta obra</h3>
<div class="box-body">
        <table id="tabla_principal" class="table table-striped">
          <thead>
            
            <th> Id</th>
            <th> Nombre </th>
           <th> Codigo</th>
            <th> Cantidad</th>
             <th> Precio Unitario</th>
            
         
          </thead>
          <tbody>
            <tr>

            </tr>

           @foreach($materiales as $materiales)
       
            <tr>

            <td >{{$materiales->id}}</td>               
            <td>{{$materiales->nombre}}</td>
            <td>{{$materiales->codigo}}</td>               
            <td id="cantidad">{{$materiales->cantidad}}</td>
            <td id="precio_unitario">{{$materiales->precio_unitario}}</td>               
            

                
               
            

            </tr>
            @endforeach
            
          </tbody>
        </table>
        
      </div>
@foreach($total as $total)
<h3> Total gastado en esta obra :   {{$total->asd}} </h3>

 @endforeach

      <div class="box-footer clearfix">

      </div>
    </div>

  </div>



</body>
</html>

<script>




  </script>