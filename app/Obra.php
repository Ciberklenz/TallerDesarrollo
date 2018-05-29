<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Obra extends Model
{
    protected $table = 'obras';
    protected $primaryKey = 'id';
    protected $fillable = array(
        'nombre_obra',
        'direccion_obra',
        'empresa_obra',
        'rubro_obra',
        'telefono_obra',
    );

    public function Material()
    {

        return $this->belongsTo('App\Material');
    }


}
