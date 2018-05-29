@extends('layouts.app')

@section('title','LISTA DE ASIGNACIONES')

@section('content')

    <div class="container">
        <div>
            <a class="btn btn-primary btn-lg" href="../home">Home</a>
            <a class="btn btn-primary btn-lg" href="../AsignacionesObra">Atrás</a>
        </div>

        <h1>ASIGNACIONES</h1>
        <div>
            <h3>Estos son los materiales de la obra {{$id}}</h3>

            <table class="table table-responsive table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>ID. Material</th>
                    <th>Nombre del Material</th>
                    <th>Codigo del Material</th>
                    <th>Cantidad de Material</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mates as $mate)
                    <tr id="f1">
                        <td>{{$mate->id}}</td>
                        <td>{{$mate->nombre}}</td>
                        <td>{{$mate->codigo}}</td>
                        <td>{{$mate->cantidad}}</td>
                        <td>{{$mate->precio_unitario}}</td>
                        <td>{{$mate->cantidad*$mate->precio_unitario}}</td>
                    </tr>

                @endforeach
                <tr>
                    <td style="text-align: right; font-weight: bold;" colspan="5">Total</td>
                    <td>{{$total['0']->asd}}</td>
                </tr>
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