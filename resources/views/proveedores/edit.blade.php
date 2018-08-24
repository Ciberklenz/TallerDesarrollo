@extends('layouts.app')

@section('title','Crear Proveedor')


@section('content')

    {!! Form::open(['route'=>['proveedores.update',$proveedores],'method'=>'PUT']) !!}
    <div class="container-fluid">
    <div class="from--group">

        {!! Form::label('nombre_proveedor','Nombre del Proveedor') !!}
        {!! Form::text('nombre_proveedor',$proveedores->nombre_proveedor,['class'=>'form-control','placeholder'=>'Example:CAP','required']) !!}
    </div>

        <div class="from--group">
            {!! Form::label('rut_proveedor','Rut Proveedor') !!}
            {!! Form::text('rut_proveedor',$proveedores->rut_proveedor,['class'=>'form-control','placeholder'=>'Example:96.443.453-3','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('contacto','Contacto del Proveedor') !!}
            {!! Form::text('contacto',$proveedores->contacto,['class'=>'form-control','placeholder'=>'Example:+41235523','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('email_proveedor','Email del Proveedor') !!}
            {!! Form::text('email_proveedor',$proveedores->email_proveedor,['class'=>'form-control','placeholder'=>'Example:contacto@enap.cl','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('direccion','Direccion') !!}
            {!! Form::text('direccion',$proveedores->direccion,['class'=>'form-control','placeholder'=>'Example:Ruta Americana 332, Parque Insdustrial','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('rubro','Rubro') !!}
            {!! Form::text('rubro',$proveedores->rubro,['class'=>'form-control','placeholder'=>'Example:Mineria','required']) !!}
        </div>

    


        <div class="from--group">
        {!! Form::submit('Ingresar',['class'=>'btn btn-primary']) !!}
        
    </div>
    </div>



    {!! Form::close() !!}



@endsection