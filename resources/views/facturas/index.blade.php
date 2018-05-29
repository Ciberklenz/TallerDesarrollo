@extends('layouts.app')

@section('title','LISTA DE FACTURAS')

@section('content')
    <table class="table table-striped">
        <thead>

        <button href="{{route('facturas.create')}}" type="button" class="btn btn-success" data-toggle="modal"
                data-target=".bs-example-modal-lg">Crear Factura
        </button>
        <a class="btn btn-primary " href="./home">Home</a>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                </div>
            </div>
        </div>

        <th> N°Factura</th>
        <th> Nombre Proveedor</th>
        <th> Rut Proveedor</th>
        <th> Fecha emision</th>
        <th> neto</th>
        <th> iva</th>
        <th> valor Total</th>
        <th> Forma de pago</th>
        <th> Accion</th>
        <th>Creador por ID_USER</th>


        </thead>
        <tbody>
@foreach($facturas as $factura)
            <tr>
                <td>{{$factura->numero_factura}}</td>
                <td>{{$factura->nombre_proveedor}}</td>
                <td>{{$factura->rut_proveedor}}</td>
                <td>{{$factura->fecha_emision}}</td>
                <td>$ {{number_format($factura->neto, 0, '', '.')}}</td>
                <td>{{$factura->iva}} %</td>
                <td>$ {{number_format($factura->valor_total, 0, '', '.')}}</td>


                <td>
                    @if($factura->tipo_pago =='Debito')
                        <span class="label label-danger">{{$factura->tipo_pago}}</span>
                    @else
                        <span class="label label-primary">{{$factura->tipo_pago}}</span>
                    @endif

                </td>

                <td><a href="{{route('facturas.edit',$factura->numero_factura)}}" class="btn btn-warning">
                            <span class="glyphicon glyphicon-wrench" aria-hidden="true">
                            </span> </a>
                    <a href="{{route('facturas.destroy',$factura->numero_factura)}}"
                       onclick="return confirm('¿Seguro de Eliminar esa factura?')" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">
                            </span> </a></td>
                <td>{{$factura->user_id}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$facturas->render()}}

@endsection
