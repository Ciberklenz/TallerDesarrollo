<?php

namespace App\Http\Controllers;

use App\Material;
use App\Obra;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AsignacionesObraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obras = Obra::all();
        return view('asignaciones.asignacionobra', ['obras' => $obras]);
        //
    }

    public function show($id)
    {

        $mates = Material::leftjoin('obras', 'materiales.obra_id', '=', 'obras.id')
            ->select('materiales.id', 'materiales.nombre', 'materiales.codigo', 'materiales.cantidad', 'materiales.precio_unitario')
            ->where('materiales.obra_id', '=', $id)
            ->getQuery()
            ->get();
        $total = Material::leftjoin('obras', 'materiales.obra_id', '=', 'obras.id')
            ->select(DB::raw('SUM(cantidad*precio_unitario) as asd'))
            ->where('materiales.obra_id', '=', $id)
            ->getQuery()
            ->get();
        return view('asignaciones.asignaobra', ['id' => $id, 'mates' => $mates, 'total' => $total]);
    }

}
