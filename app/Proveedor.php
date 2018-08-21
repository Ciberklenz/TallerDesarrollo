<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
	protected $primaryKey = 'id_proveedor';
	
	protected $fillable = array(
	
		'nombre_proveedor',
		'rut_proveedor',
		'contacto',
		'email_proveedor',
		'direccion',
		'rubro',
	
	);
	
	public function Factura(){

        return $this->hasMany('App\Factura');
    }
}
