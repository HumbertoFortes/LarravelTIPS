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
Route::get('exemplo', function(){
    return view('exemploLayout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('listagem-usuario','ControllerUser@listUser');


/**
 * Extrutura geral:
 * Route::verbo('uri' , 'Controller@metodo')->name('route_name);
 */

Route::group(['namespace' => 'Form'], function(){ //outra forma de declarar grupo de rotas Route::prefix('Form')->group(function(){})
/**Ou Route::namespace('Form')->group(function(){} */
    /**
     * VERBO GET
     * Responsásel pela requisição de dados na BD
     */
    Route::get('usuarios' , 'TestController@listAllUser')->name('users.listAll');
    Route::get('usuarios/novo' , 'TestController@formAddUser')->name('users.formAddUser');
    Route::get('usuarios/editar/{user}' , 'TestController@formEditUser')->name('users.formEditUser');
    Route::get('usuarios/{user}' , 'TestController@listUser')->name('users.list');//o parámetro user sertá enviado como variável para o método listUser


    /**
     * VERBO POST
    *Responsável por enviar uma info na BD
    */
    Route::post('usuarios/saveUser' , 'TestController@saveUser')->name('users.save');

    /**
     * VERBO PUT/PATCH
     * Atualizar na BD
     */
    Route::put('usuarios/editUser/{user}' , 'TestController@editUser')->name('users.edit');


    /**
        * VERBO DELETE
        *Remover na BD
        */
    Route::delete('usuarios/destroy/{user}', 'TestController@destroyUser')->name('user.destroy');
});
