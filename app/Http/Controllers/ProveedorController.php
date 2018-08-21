<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedor = Proveedor::all();
        return view('proveedor.index')->with('proveedor',$proveedor);
    }

    public function create()
    {
        $proveedor = Proveedor::orderBy('name','ASC')->lists('name','id');
        return view('proveedor.create')->with('proveedor', $proveedor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedor($request->all());
        $proveedor->save();

        Flash::success('El Proveedor a sido ingresada con exito');
        return redirect()->route('proveedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($numero_factura)
    {
        $proveedor = Proveedor::find($id_proveedor);
        return view('proveedor.edit')->with('proveedor',$proveedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $numero_factura)
    {
        $proveedor = Proveedor::find($proveedor);
        $proveedor->fill($request->all());
        $proveedor->save();
        Flash::warning('El proveedor ha sido modificada');
        return redirect()->route('proveedor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_proveedor)
    {
        $proveedor = Proveedor::find($id_proveedor);
        $proveedor->delete();
        Flash::error('Proveedor eliminada');
        return redirect()->route('proveedor.index');
    }
}
