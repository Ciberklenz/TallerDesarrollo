<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Factura;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Controllers;
use App\Http\Controllers\Controller;


class FacturasController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->lists('name','id');
        $facturas = Factura::paginate(5);
        return view('facturas.index')->with('facturas',$facturas)->with('users',$users);
    }

    public function create()
    {
        $users = User::orderBy('name','ASC')->lists('name','id');
        return view('facturas.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factura = new Factura($request->all());
        $factura->user_id=$request->user_id;
        $factura->save();

        Flash::success('La factura a sido ingresada con exito');
        return redirect()->route('facturas.index');
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
        $factura = Factura::find($numero_factura);
        return view('facturas.edit')->with('factura',$factura);
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
        $factura = Factura::find($numero_factura);
        $factura->fill($request->all());
        $factura->save();
        Flash::warning('La factura ha sido modificada');
        return redirect()->route('facturas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($numero_factura)
    {
        $facturas = Factura::find($numero_factura);
        $facturas->delete();
        Flash::error('Factura eliminada');
        return redirect()->route('facturas.index');
    }
}
