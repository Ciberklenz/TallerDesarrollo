@extends('layouts.app')

@section('title','Editar Usuario')

@section('content')

    {!! Form::open(['route'=>['users.update',$user],'method'=>'PUT']) !!}


    <div class="from--group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
    </div>

    <div class="from--group">
        {!! Form::label('email','Correo Electronico') !!}
        {!! Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'example@gmail.com','required']) !!}
    </div>

    <div class="from--group">
        {!! Form::label('type','Tipo Usuario') !!}
        {!! Form::select('type',['member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control']) !!}
    </div>
    <div class="from--group">
        {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    </div>



    {!! Form::close() !!}

@endsection