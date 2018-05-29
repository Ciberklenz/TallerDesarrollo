@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">INFORMES DISPONIBLES SISTEMA</h3>
                        <a class="btn btn-primary " href="./home">Home</a>
                        <div class="box-tools">
                            <div class="input-group" style="width: 150px;">
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE REPORTE</th>
                            <th>VISUALIZAR</th>
                            <th>DESCARGAR</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1</td>
                            <td>VER TODAS LAS FACTURAS</td>
                            <td><a href="reportes/crear_reporte_todas_facturas/1" target="_blank">
                                    <button class="btn btn-block btn-primary btn-xs">Ver</button>
                                </a></td>
                            <td><a href="reportes/crear_reporte_todas_facturas/2" target="_blank">
                                    <button class="btn btn-block btn-success btn-xs">Descargar</button>
                                </a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>VER TODAS LAS OBRAS</td>
                            <td><a href="reportes/crear_reporte_todas_obras/1" target="_blank">
                                    <button class="btn btn-block btn-primary btn-xs">Ver</button>
                                </a></td>
                            <td><a href="reportes/crear_reporte_todas_obras/2" target="_blank">
                                    <button class="btn btn-block btn-success btn-xs">Descargar</button>
                                </a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td> VER DETALLE FACTURA EN ESPECIFICO&nbsp;&nbsp;
                                <select id="selectnf" onchange="setestado();" name="numero_factura_a_seleccionar"
                                        METHOD="POST">

                                    @foreach($facturas as $facturas)
                                        <option value= {{$facturas->numero_factura}}>{{$facturas->numero_factura}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td><a id="linka" href="reportes/crear_reporte_factura_especifica/1/1" target="_blank">
                                    <button class="btn btn-block btn-primary btn-xs">Ver</button>
                                </a></td>
                            <td><a id="linkb" href="reportes/crear_reporte_factura_especifica/2/1" target="_blank">
                                    <button class="btn btn-block btn-success btn-xs">Descargar</button>
                                </a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td> VER DETALLE OBRA EN ESPECIFICO&nbsp;&nbsp;
                                <select id="selectobra" onchange="setestado_obra();" name="nombre_obra_a_seleccionar"
                                        METHOD="POST">

                                    @foreach($obra as $obra)
                                        <option value= {{$obra->id}}>{{$obra->nombre_obra}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td><a id="linkaobra" href="reportes/crear_reporte_obra_especifica/1/1" target="_blank">
                                    <button class="btn btn-block btn-primary btn-xs">Ver</button>
                                </a></td>
                            <td><a id="linkbobra" href="reportes/crear_reporte_obra_especifica/2/1" target="_blank">
                                    <button class="btn btn-block btn-success btn-xs">Descargar</button>
                                </a></td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
    <script>
        function setestado() {
            document.getElementById("linka").setAttribute("href", "reportes/crear_reporte_factura_especifica/1/" + document.getElementById("selectnf").options[document.getElementById("selectnf").selectedIndex].value);
            document.getElementById("linkb").setAttribute("href", "reportes/crear_reporte_factura_especifica/2/" + document.getElementById("selectnf").options[document.getElementById("selectnf").selectedIndex].value);
        }

        function setestado_obra() {
            document.getElementById("linkaobra").setAttribute("href", "reportes/crear_reporte_obra_especifica/1/" + document.getElementById("selectobra").options[document.getElementById("selectobra").selectedIndex].value);
            document.getElementById("linkbobra").setAttribute("href", "reportes/crear_reporte_obra_especifica/2/" + document.getElementById("selectobra").options[document.getElementById("selectobra").selectedIndex].value);
        }


    </script>

@endsection




