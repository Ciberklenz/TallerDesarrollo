<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Factura extends Model
{
    protected $table = 'facturas';

    protected $primaryKey = 'numero_factura';
    protected $fillable = [
        'numero_factura',
        'nombre_proveedor',
        'rut_proveedor',
        'fecha_emision',
        'neto',
        'iva',
        'valor_total',
        'tipo_pago',
        'user_id',
    ];

    public function User(){

        return $this->belongsTo('App\User');
    }
}
