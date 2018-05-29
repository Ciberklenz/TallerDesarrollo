@extends('layouts.app')
@section('menus.admin')
@section('title','Crear Usuario')

@section('content')

    {!! Form::open(['route'=>'users.store','method'=>'POST']) !!}
    <div class="container-fluid">
        <div class="from--group">

            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('email','Correo Electronico') !!}
            {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('password','Contraseña') !!}
            {!! Form::password('password',['class'=>'form-control','placeholder'=>'************','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('type','Tipo Usuario') !!}
            {!! Form::select('type',['member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control']) !!}
        </div>
        <div class="from--group">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

        </div>

    </div>
    {!! Form::close() !!}

@endsection
