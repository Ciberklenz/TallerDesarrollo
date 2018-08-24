<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proveedor;
use Laracasts\Flash\Flash;
use App\Http\Controllers;




class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::orderBy('id','ASC')->paginate(5);
        //dd($proveedores);
        return view('proveedores.index')->with('proveedores',$proveedores);
    }

    public function create()
    {

        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedores = new Proveedor($request->all());
        $proveedores->save();

        Flash::success('El Proveedor a sido ingresada con exito');
        return redirect()->route('proveedores.index');
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
    public function edit($id)
    {
        $proveedores = Proveedor::find($id);
        return view('proveedores.edit')->with('proveedores',$proveedores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedores = Proveedor::find($id);
        $proveedores->fill($request->all());
        $proveedores->save();
        Flash::warning('El proveedor ha sido modificada');
        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedores = Proveedor::find($id);
        $proveedores->delete();
        Flash::error('Proveedor eliminada');
        return redirect()->route('proveedores.index');
    }
}
