<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\Obra;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use DB;
use App\Material;
use App\Pertenece;


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        $this->middleware('auth');
    }


    public function index(){
    $facturas = Factura::paginate(15);
    $obra = Obra::paginate(5);

 return view('reportes.index')->with('facturas',$facturas)->with('obra',$obra);
    }


      public function crearPDF($pdf,$tipo)
    {
       
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }

    }


    public function crear_reporte_todas_facturas($tipo){


            $facturas = Factura::paginate(15);
        $view =  \View::make('reporte_todas_facturas')->with('facturas',$facturas)->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);



     
      return $this->crearPDF($pdf,$tipo);

    }


    public function crear_reporte_factura_especifica($tipo,$factura_a_buscar){



  $factura_especifica = DB::table('facturas')->where('numero_factura', $factura_a_buscar)->get();


  $mates = Pertenece::leftjoin('materiales', 'materiales.id', '=', 'perteneces.material_id')
            ->leftjoin('obras', 'materiales.obra_id', '=', 'obras.id')
            ->select('materiales.id', 'nombre', 'codigo', 'cantidad', 'obra_id', 'obras.nombre_obra')
            ->where('perteneces.factura_id', '=', $factura_a_buscar)
            ->getQuery()
            ->get();
       

          
        $view =  \View::make('reporte_factura_especifica')->with('factura_especifica',$factura_especifica)->with('mates',$mates)->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);



     
      return $this->crearPDF($pdf,$tipo);

    }



public function crear_reporte_obra_especifica($tipo,$obra_a_buscar){




        $obra_especifica = DB::table('obras')->where('id', $obra_a_buscar)->get();

        $materiales = DB::table('materiales')->where('obra_id', $obra_a_buscar)->get();
  
      
         $total = Material::leftjoin('obras', 'materiales.obra_id', '=', 'obras.id')
            ->select(DB::raw('SUM(cantidad*precio_unitario) as asd'))
            ->where('materiales.obra_id', '=', $obra_a_buscar)
            ->getQuery()
            ->get();

          
        $view =  \View::make('reporte_obra_especifica')->with('materiales',$materiales)->with('obra_especifica',$obra_especifica)->with('total',$total)->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);



     
      return $this->crearPDF($pdf,$tipo);

    }







    public function crear_reporte_todas_obras($tipo){

        $obra = Obra::paginate(15);
        $view =  \View::make('reporte_todas_obras')->with('obra',$obra)->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);


     
     return $this->crearPDF($pdf,$tipo);

    }










    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}