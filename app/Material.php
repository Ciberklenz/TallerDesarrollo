<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiales';
    protected $primaryKey = 'id';
    protected $fillable = array(

        'codigo',
        'nombre',
        'cantidad',
        'precio_unitario',
    );

    public function Obra()
    {

        return $this->hasMany('App\Obra');
    }
}
