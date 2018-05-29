@extends('layouts.app')

@section('title','Crear Factura')


@section('content')

    {!! Form::open(['route'=>['facturas.update',$factura],'method'=>'PUT']) !!}
   

        <div class="from--group">
            {!! Form::label('nombre_proveedor','Nombre proveedor') !!}
            {!! Form::text('nombre_proveedor',$factura->nombre_proveedor,['class'=>'form-control','placeholder'=>'Nombre proveedor','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('rut_proveedor','Rut proveedor') !!}
            {!! Form::text('rut_proveedor',$factura->rut_proveedor,['class'=>'form-control','placeholder'=>'Rut proveedor','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('fecha_emision','Fecha emision') !!}
            {!! Form::date('fecha_emision',$factura->fecha_emision,['class'=>'form-control','placeholder'=>'Fecha emision','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('neto','Valor neto') !!}
            {!! Form::text('neto',$factura->neto,['class'=>'form-control','placeholder'=>'Valor neto','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('iva','IVA') !!}
            {!! Form::text('iva',$factura->iva,['class'=>'form-control','placeholder'=>'IVA','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('valor_total','Valor Total') !!}
            {!! Form::text('valor_total',$factura->valor_total,['class'=>'form-control','placeholder'=>'Valor Total','required']) !!}
        </div>

        <div class="from--group">
            {!! Form::label('tipo_pago','Forma de pago') !!}
            {!! Form::select('tipo_pago',['Credito'=>'Credito','Debito'=>'Debito','Efectivo'=>'Efectivo'],null,['class'=>'form-control']) !!}
        </div>


        <div class="from--group">
        {!! Form::submit('Ingresar',['class'=>'btn btn-primary']) !!}
        
    </div>
    



    {!! Form::close() !!}



@endsection