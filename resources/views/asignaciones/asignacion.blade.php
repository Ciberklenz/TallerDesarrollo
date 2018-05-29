@extends('layouts.app')

@section('title','LISTA DE ASIGNACIONES')

@section('content')

    <div class="container">
        <div class="container">
            <div>
                <a class="btn btn-primary btn-lg" href="../home">Home</a>
                <a class="btn btn-primary btn-lg" href="../asignaciones">Atrás</a>
            </div>

        <h1>ASIGNACIONES</h1>
        <div>
            <h3>Estos son los materiales de la factura {{$id}}</h3>

            <table class="table table-responsive table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>ID. Material</th>
                    <th>Nombre del Material</th>
                    <th>Codigo del Material</th>
                    <th>Cantidad de Material</th>
                    <th>Obra Asociada</th>
                </tr>
                </thead>
                <tbody>
                @foreach($asi as $asis)
                    <tr id="f1">
                        <td>{{$asis->id}}</td>
                        <td>{{$asis->nombre}}</td>
                        <td>{{$asis->codigo}}</td>
                        <td>{{$asis->cantidad}}</td>
                        <td>{{$asis->nombre_obra}}</td>
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