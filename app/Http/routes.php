<?php


Route::get('/', function () {
    return view('welcome');
});


Route::auth();
Route::get('/admin', function () {
    return view('admin.home');
});


Route::get('/reportes', 'PdfController@index');


Route::get('reportes/crear_reporte_todas_facturas/{tipo}', 'PdfController@crear_reporte_todas_facturas');
Route::get('reportes/crear_reporte_todas_obras/{tipo}', 'PdfController@crear_reporte_todas_obras');

Route::get('reportes/crear_reporte_factura_especifica/{tipo}/{factura_a_buscar}', 'PdfController@crear_reporte_factura_especifica');

Route::get('reportes/crear_reporte_obra_especifica/{tipo}/{obra_a_buscar}', 'PdfController@crear_reporte_obra_especifica');

Route::resource('asignaciones', 'AsignacionesController');
Route::resource('AsignacionesObra', 'AsignacionesObraController');
Route::resource('facturas', 'FacturasController');
Route::get('facturas/{numero_factura}/destroy', [
    'uses' => 'FacturasController@destroy',
    'as' => 'facturas.destroy'
]);


Route::get('facturas/{numero_factura}/edit', [
    'uses' => 'FacturasController@edit',
    'as' => 'facturas.edit'
]);


Route::get('/home', 'HomeController@index');

Route::resource('users', 'UsersController');
Route::get('users/{id}/destroy', [
    'uses' => 'UsersController@destroy',
    'as' => 'users.destroy'
]);

Route::get('users/{id}/edit', [
    'uses' => 'UsersController@edit',
    'as' => 'users.edit'
]);

Route::resource('material', 'MaterialController');
Route::get('material/{id}/destroy', [
    'uses' => 'MaterialController@destroy',
    'as' => 'material.destroy'
]);


Route::resource('obras', 'ObrasController');
Route::get('obras/{id}/destroy', [
    'uses' => 'ObrasController@destroy',
    'as' => 'obras.destroy'
]);
Route::get('obras/{id}/edit', [
    'uses' => 'ObrasController@edit',
    'as' => 'obras.edit'
]);





