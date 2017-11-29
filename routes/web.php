<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view( '/', 'auth.acceso', ['page_title' => 'Acceso'] )->name( 'acceso' );

Route::prefix( 'autenticacion' )->group( function () {
    // Autenticacion
    Route::view( 'acceso', 'auth.acceso', ['page_title' => 'Acceso'] )->name( 'acceso' );
    Route::post( 'acceder', 'Auth\LoginController@acceder' )->name( 'acceder' );
    Route::post( 'salir', 'Auth\LoginController@salir' )->name( 'salir' );
    Route::view( 'registro', 'auth.registro', ['page_title' => 'Registro'] )->name( 'registro' )->middleware( 'guest' );
    Route::post( 'registrar', 'Auth\RegisterController@register' )->name( 'registrar' );
    Route::get( 'validar_confirmacion/{token}/{user}', 'Auth\RegisterController@confirmation' )->name( 'validar_confirmacion' );
});

Route::prefix( 'tablero' )->group( function () {

    Route::prefix( 'estudiante' )->group( function () {
        Route::get( 'inicio', 'EstudianteController@index' )->name( 'perfil_estudiante' );
        Route::get( 'registro_curriculum', 'EstudianteController@registro' )->name( 'registro_curriculum' );
        Route::post( 'registrar_curriculum', 'EstudianteController@registrar' )->name( 'registrar_curriculum' );
        Route::get( 'subir_curriculum', 'EstudianteController@subir' )->name( 'subir_curriculum' );
    });

    Route::prefix( 'empresa')->group( function () {
        Route::get( 'inicio', 'EmpresaController@index' )->name( 'perfil_empresa' );
        Route::get( 'registro_entidad', 'EmpresaController@registro' )->name( 'registro_entidad' );
        Route::post( 'registrar_entidad', 'EmpresaController@registrar' )->name( 'registrar_entidad' );
        Route::get( 'ofertas', 'OfertaController@index' )->name( 'ofertas' );
        Route::get( 'registro_oferta', 'OfertaController@registro' )->name( 'registro_oferta' );
        Route::post( 'registrar_oferta', 'OfertaController@registrar' )->name( 'registrar_oferta' );
    });
});

Route::prefix( 'usuario' )->group( function () {
    Route::get( 'inicio', 'UsuarioController@index' )->name( 'perfil_usuario' );
    Route::get( 'registro_usuario', 'UsuarioController@registro' )->name( 'registro_usuario' );
    Route::get( 'ofertas', 'OfertaController@usuario_ofertas' )->name( 'ver_ofertas' );
    //Route::get( 'ofertas', 'OfertaController@index' )->name( 'ofertas' );
});

Route::prefix( 'admin' )->group( function () {
    // Administrador
});

Route::prefix( 'error' )->group( function () {
    // Errores
    Route::view( 'registro_confirmacion', 'errors.status' )->name( 'registro_confirmacion' );
    Route::view( 'verify_token', 'errors.verifytoken' )->name( 'verify_token' );
    Route::view( 'token_error', 'errors.tokenerror' )->name( 'token_error' );
});

Route::prefix( 'ajax' )->group( function () {
    // Ajax
    Route::any( 'add_academico', 'AjaxController@add_academico' )->name( 'add_academico' );
    Route::any( 'add_laboral', 'AjaxController@add_laboral' )->name( 'add_laboral' );
});
