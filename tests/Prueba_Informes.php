<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;




class Prueba_Informes extends \PHPUnit_Framework_TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   


   // public function test_Prueba_Informes()
    //{

 
      //  $hola1='hola';
        //$hola2='hola';
        //$this->assertEquals($hola1,$hola2);


    //}

 		public function test_crearPDF($tipo=2){
       if($tipo==1){

        	//return $pdf->stream('reporte');
        	$this -> assertTrue ( true );
        }
        if($tipo==2){
        	//return $pdf->download('reporte.pdf'); 
        	$this -> assertTrue ( true );
        }
        if($tipo!=1 && $tipo!=2 ){
        	 
        	$this -> assertTrue ( false );
        }
		


    	}






}
