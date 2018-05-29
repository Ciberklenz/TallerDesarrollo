@extends('layouts.app')

@section('title','LISTA DE MATERIALES')

@section('content')
    <table class="table table-striped">
        <thead>
        <a class="btn btn-warning" href="{{route('material.index')}}">Back</a>

        <th> ID</th>
        <th> Nombre Material</th>
        <th> Codigo</th>
        <th> Cantidad</th>
        <th> Precio Unitario</th>
        <th> Obra Asociada</th>

        </thead>
        <tbody>
        <tr>
            <td>{{$material->id}}</td>
            <td>{{$material->nombre}}</td>
            <td>{{$material->codigo}}</td>
            <td>{{$material->cantidad}}</td>
            <td>{{$material->precio_unitario}}</td>
            <td>{{$material->obra_id}}</td>
        </tr>
        </tbody>
    </table>


@endsection
