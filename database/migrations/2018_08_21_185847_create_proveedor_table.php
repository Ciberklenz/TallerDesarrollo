<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_proveedor', 100);
            $table->string('rut_proveedor', 100);         
            $table->string('contacto',20);
            $table->string('email_proveedor');
			$table->string('direccion',200);
			$table->string('rubro',100);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('proveedor');
    }
}
