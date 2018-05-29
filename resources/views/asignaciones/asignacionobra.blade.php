@extends('layouts.app')

@section('title','LISTA DE ASIGNACIONES')

@section('content')

    <div class="container">
        <div>
            <a class="btn btn-primary btn-lg" href="./home">Home</a>
        </div>

        <h1>ASIGNACIONES</h1>
        <div>
            <h3>Aquí se puede conocer el listado de obras y el detalle de los materiales asignados</h3>


            <table class="table table-responsive table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Nombre de la Obra</th>
                    <th>Direccion de la Obra</th>
                    <th>Empresa Mandante</th>
                    <th>Rubro de la Empresa</th>
                    <th>detalles</th>
                </tr>
                </thead>
                <tbody>
                @foreach($obras as $obra)
                    <tr id="f1">
                        <td>{{$obra->nombre_obra}}</td>
                        <td>{{$obra->direccion_obra}}</td>
                        <td>{{$obra->empresa_obra}}</td>
                        <td>{{$obra->rubro_obra}}</td>
                        <td><a href="./AsignacionesObra/{{$obra->id}}">{{$obra->id}}</a></td>
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