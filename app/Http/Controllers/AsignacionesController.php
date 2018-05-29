<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Obra;
use App\Factura;
use App\Material;
use App\Pertenece;


class AsignacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::all();
        return view('asignaciones.asignaciones', ['facturas' => $facturas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asi = Pertenece::leftjoin('materiales', 'materiales.id', '=', 'perteneces.material_id')
            ->leftjoin('obras', 'materiales.obra_id', '=', 'obras.id')
            ->select('materiales.id', 'nombre', 'codigo', 'cantidad', 'obra_id', 'obras.nombre_obra')
            ->where('perteneces.factura_id', '=', $id)
            ->getQuery()
            ->get();
        return view('asignaciones.asignacion', ['id' => $id, 'asi' => $asi]);
    }
}