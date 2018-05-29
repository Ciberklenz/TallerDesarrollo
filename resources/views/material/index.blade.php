@extends('layouts.app')

@section('title','LISTA DE MATERIALES')

@section('content')
    <table class="table table-striped">
        <thead>
        <a href="{{route('material.create')}}" class="btn btn-success">
        <span class="glyphicon glyphicon-plus" aria-hidden="true">
               <a class="btn btn-primary " href="./home">Home</a>
        </span> </a>

        <th> ID</th>
        <th> Nombre Material</th>
        <th> Codigo</th>
        <th> Cantidad</th>
        <th> Precio Unitario</th>

        </thead>
        <tbody>
        @foreach($materiales as $material)
            <tr>
                <td>{{$material->id}}</td>
                <td>{{$material->nombre}}</td>
                <td>{{$material->codigo}}</td>
                <td>{{$material->cantidad}}</td>
                <td>{{$material->precio_unitario}}</td>

                <td>
                    <a class="btn btn-xs btn-primary glyphicon glyphicon-eye-open"
                       href="{!! URL::to('material/'.$material->id) !!}"></a>
                    <a class="btn btn-xs btn-success glyphicon glyphicon-pencil"
                       href="{!! URL::to('material/'.$material->id.'/edit') !!}"></a>
                    <a class="btn btn-xs btn-danger glyphicon glyphicon-erase"
                       href="{{route('material.destroy',$material->id)}}"
                       onclick="return confirm('¿Seguro de Eliminar ese Material?')"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection