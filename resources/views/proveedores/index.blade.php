@extends('layouts.app')

@section('title','LISTADO DE PROVEEDORES')

@section('content')
    <table class="table table-striped">
        <thead>

        <button href="{{route('proveedores.create')}}" type="button" class="btn btn-success" data-toggle="modal"
                data-target=".bs-example-modal-lg">Crear Proveedor
        </button>
        <a class="btn btn-primary " href="./home">Home</a>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                </div>
            </div>
        </div>

        <th> ID PROVEEDOR</th>
        <th> Nombre Proveedor</th>
        <th> Rut Proveedor</th>
        <th> Contacto</th>
        <th> Correo</th>
        <th> Direccion</th>
        <th> Rubro</th>

        </thead>
        <tbody>
@foreach($proveedores as $proveedor)
            <tr>
                <td>{{$proveedor->id}}</td>
                <td>{{$proveedor->nombre_proveedor}}</td>
                <td>{{$proveedor->rut_proveedor}}</td>
                <td>{{$proveedor->contacto}}</td>
                <td>{{$proveedor->email_proveedor}}</td>
                <td>{{$proveedor->direccion}}</td>
                <td>{{$proveedor->rubro}}</td>


                <td><a href="{{route('proveedores.edit',$proveedor->id)}}" class="btn btn-warning">
                            <span class="glyphicon glyphicon-wrench" aria-hidden="true">
                            </span> </a>
                    <a href="{{route('proveedores.destroy',$proveedor->id)}}"
                       onclick="return confirm('¿Seguro de Eliminar esa factura?')" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">
                            </span> </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$proveedores->render()}}

@endsection
