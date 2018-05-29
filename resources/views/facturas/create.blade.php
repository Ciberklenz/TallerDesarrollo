@extends('layouts.app')

@section('title','Crear Factura')


@section('content')

    {!! Form::open(['route'=>'facturas.store','method'=>'POST']) !!}
    <div class="container-fluid">
    <div class="from--group">

        {!! Form::label('numero_factura','N°Factura') !!}
        {!! Form::number('numero_factura',null,['class'=>'form-control','placeholder'=>'N°Factura','required']) !!}
    </div>

        <div class="from--group">
            {!! Form::label('nombre_proveedor','Nombre proveedor') !!}
            {!! Form::text('nombre_proveedor',null,['class'=>'form-control','placeholder'=>'Nombre proveedor','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('rut_proveedor','Rut proveedor') !!}
            {!! Form::text('rut_proveedor',null,['class'=>'form-control','placeholder'=>'Rut proveedor','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('fecha_emision','Fecha emision') !!}
            {!! Form::date('fecha_emision',null,['class'=>'form-control','placeholder'=>'Fecha emision','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('neto','Valor neto') !!}
            {!! Form::text('neto',null,['class'=>'form-control','placeholder'=>'Valor neto','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('iva','IVA') !!}
            {!! Form::text('iva',19,['class'=>'form-control','placeholder'=>'IVA','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('valor_total','Valor Total') !!}
            {!! Form::text('valor_total',null,['class'=>'form-control','placeholder'=>'Valor Total','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('tipo_pago','Forma de pago') !!}
            {!! Form::select('tipo_pago',['Credito'=>'Credito','Debito'=>'Debito', 'Efectivo'=>'Efectivo'],null,['class'=>'form-control']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('user_id','Usuario') !!}
            {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => 'seleccione el usuario a quien corresponde', 'required']) !!}
        </div>


        <div class="from--group">
        {!! Form::submit('Ingresar',['class'=>'btn btn-primary']) !!}
        
    </div>
    </div>



    {!! Form::close() !!}



@endsection