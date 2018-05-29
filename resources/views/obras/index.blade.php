@extends('layouts.app')

@section('title','LISTA DE OBRAS')

@section('content')
    <table class="table table-striped">
        <thead>
        <button href="{{route('obras.create')}}" type="button" class="btn btn-success" data-toggle="modal"
                data-target=".bs-example-modal-lg">Crear Obra
        </button>
        <a class="btn btn-primary " href="./home">Home</a>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                </div>
            </div>
        </div>


        <th> ID</th>
        <th> Nombre Obra</th>
        <th> Direccion Obra</th>
        <th> Empresa</th>
        <th> Rubro Empresa</th>
        <th> Contacto(FONO)</th>

        </thead>
        <tbody>
        @foreach($obras as $obra)
            <tr>
                <td>{{$obra->id}}</td>
                <td>{{$obra->nombre_obra}}</td>
                <td>{{$obra->direccion_obra}}</td>
                <td>{{$obra->empresa_obra}}</td>
                <td>{{$obra->rubro_obra}}</td>
                <td>{{$obra->telefono_obra}}</td>


                <td><a href="{{route('obras.edit',$obra->id)}}" class="btn btn-warning">
                            <span class="glyphicon glyphicon-wrench" aria-hidden="true">
                            </span> </a>

                    <a href="{{route('obras.destroy',$obra->id)}}"
                       onclick="return confirm('¿Seguro de Eliminar esa obra?')" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">
                            </span> </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$obras->render()}}

@endsection