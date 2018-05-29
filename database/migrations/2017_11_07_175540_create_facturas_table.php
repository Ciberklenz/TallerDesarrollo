<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->integer('numero_factura');
            $table->primary('numero_factura');
            $table->string('nombre_proveedor', 100);
            $table->string('rut_proveedor', 100);
            $table->date('fecha_emision')->format('d-m-Y');
            $table->integer('neto');
            $table->integer('iva');
            $table->integer('valor_total');
            $table->enum('tipo_pago', ['Credito', 'Debito', 'Efectivo'])->default('Credito');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('facturas');
    }
}
