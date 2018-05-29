<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertenecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perteneces', function (Blueprint $table) {

            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materiales')->onDelete('cascade');
            $table->integer('factura_id');
            $table->foreign('factura_id')->references('numero_factura')->on('facturas')->onDelete('cascade');

            $table->integer('valor_total');

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
        Schema::drop('perteneces');
    }
}
