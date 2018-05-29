@extends('layouts.app')
@section('title','LISTA DE ASIGNACIONES')

@section('content')

    <div class="container">
        <div>
            <a class="btn btn-primary btn-lg" href="./home">Home</a>
        </div>
        <h1>ASIGNACIONES</h1>
        <div>
            <p>Aqui se puede ver la lista de Facturas y el detalle de sus materiales asignados</p>
            <table class="table table-responsive table-bordered">
                <thead>
                <tr>
                    <th>Numero de Factura</th>
                    <th>Nombre del Proveedor</th>
                    <th>Rut Proveedor</th>
                    <th>Fecha de emision</th>
                    <th>detalles</th>
                </tr>
                </thead>
                <tbody>
                @foreach($facturas as $factura)
                    <tr id="f1">
                        <td>{{$factura->numero_factura}}</td>
                        <td>{{$factura->nombre_proveedor}}</td>
                        <td>{{$factura->rut_proveedor}}</td>
                        <td>{{$factura->fecha_emision}}</td>
                        <td><a href="./asignaciones/{{$factura->numero_factura}}">{{$factura->numero_factura}}</a></td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
            integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <script>

    </script>
@endsection