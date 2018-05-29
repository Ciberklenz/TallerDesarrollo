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
      <div class="box-header with-border">
        <h3 class="box-title">OBRAS REGISTRADAS EN SISTEMA</h3>
      </div>
      <div class="box-body">
        <table class="table table-striped">
          <thead>
            
            <th> Identificador Obra</th>
            <th> Nombre Obra</th>
            <th> Direccion</th>
            <th> Empresa</th>
            <th> Rubro Empresa</th>
            <th> Telefono</th>

          </thead>
          <tbody>
            <tr>

            </tr>

           
        @foreach($obra as $obra)
            <tr>

              <td>{{$obra->id}}</td>               
            <td>{{$obra->nombre_obra}}</td>
              <td>{{$obra->direccion_obra}}</td>               
            <td>{{$obra->empresa_obra}}</td>
               <td>{{$obra->rubro_obra}}</td>               
            <td>{{$obra->telefono_obra}}</td>   
               
            

            </tr>
            @endforeach
          </tbody>
        </table>
        
      </div><!-- /.box-body -->
      <div class="box-footer clearfix">

      </div>
    </div>

  </div>



</body>
</html>