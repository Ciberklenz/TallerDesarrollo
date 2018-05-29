@extends('layouts.app')
@section('menus.admin')
@section('title','Editar Obra')

@section('content')

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{($error)}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route'=>['obras.update',$obra],'method'=>'PUT']) !!}
    <div class="container-fluid">
        <div class="from--group">

            {!! Form::label('nombre_obra','Nombre Obra') !!}
            {!! Form::text('nombre_obra',$obra->nombre_obra,['class'=>'form-control']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('direccion_obra','Dirección Obra') !!}
            {!! Form::text('direccion_obra',$obra->direccion_obra,['class'=>'form-control']) !!}
        </div>
        <div class="from--group">
            {!! Form::label('empresa_obra','Empresa Mandante') !!}
            {!! Form::text('empresa_obra',$obra->empresa_obra,['class'=>'form-control']) !!}
        </div>
        <div class="from--group">
            {!! Form::label('rubro_obra','Rubro de Obra') !!}
            {!! Form::select('rubro_obra',['Servicio Público'=>'Servicio Público','Privado'=>'Privado'],null,['class'=>'form-control']) !!}
        </div>
        <div class="from--group">
            {!! Form::label('telefono_obra','Teléfono Contacto') !!}
            {!! Form::text('telefono_obra',$obra->telefono_obra,['class'=>'form-control','placeholder'=>'Teléfono Contacto','required']) !!}
        </div>
        <div class="from--group">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

        </div>
    </div>



    {!! Form::close() !!}

@endsection