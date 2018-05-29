<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Material;
use App\Obra;
use Laracasts\Flash\Flash;
use App\Http\Controllers;
use App\Http\Controllers\Controller;


class MaterialController extends Controller
{

    public function index(){

        $obras = Obra::orderBy('id', 'ASC')->lists('nombre_obra','id');
        $material= Material::all();
        return view('material.index')->with('materiales',$material)->with('obras',$obras);;
    }

    public function create(){
        $obras = Obra::orderBy('id', 'ASC')->lists('nombre_obra','id');
        return view('material.create')->with('obras',$obras);
    }



    public function store(Request $request){

        $material = new Material($request->all());
        $material ->obra_id=$request->obra_id;
        $material->save();
        Flash::success('La material a sido ingresada con exito');
        return redirect()->route('material.index');
    }

    public function show($id)
    {
        $obras = Obra::orderBy('id', 'ASC')->lists('nombre_obra','id');
        $material = Material::findOrFail($id);
        return view('material.show',compact('material'))->with('obras',$obras);

    }
    public function edit($id)
    {
        $material = Material::findOrFail($id);
        return view('material.edit',compact('material',$material));

    }

    public function update(Request $request, $id)
    {
        $material = Material::find($id);
        $material->fill($request->all());
        $material->save();
        Flash::warning('El Material ha sido modificado');
        return redirect()->route('material.index');
    }

    public function destroy($id)
    {
        $material= Material::find($id);
        $material->delete();
        Flash::error('Material Eliminado');
        return redirect()->route('material.index');
    }
    
}
