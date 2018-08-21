<?php

use Illuminate\Database\Seeder;
use App\Proveedor;

class ProveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proveedor = new Proveedor();
        $proveedor->nombre_proveedor = 'INCHALAM';
        $proveedor->rut_proveedor = '94.423.123-2';
        $proveedor->contacto = '+412587382';
        $proveedor->email_proveedor = 'contacto@inchalam.cl';
        $proveedor->direccion = 'Parque Industrial Talcahuano 553';
        $proveedor->rubro = 'Industrial';
        $proveedor->save();
    }
}
