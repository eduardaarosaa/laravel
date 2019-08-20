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
// */
// Route::group(['prefix' =>'painel', 'middleware'=>'auth'], function () {
//     Route::get('grupo1', function () {
//         return 'Grupo 1';
//     });
//     Route::get('grupo2', function () {
//         return 'Grupo 2';
//     });
// });
/* Prefix => painel é para não ficar reescrevendo painel em todas as
rotas do grupo */
/* Rotas com middleware = auth acesso só para logados*/

// Route::get(
//     '/categoria/{idCat}/nome-fixo/{prm2?}',
//     function ($idCat, $prm2 = '') {
//         return "Post da categoria {$idCat} - {$prm2}";
//     }
// );
/* Exemplo de rota com parametro*/

Route::get('/', 'Site\SiteController@index')->name('index');
  
Route::get('/part', 'Site\SiteController@part')->name('part');

Route::get('/part1', 'Site\SiteController@part1')->name('part1');

Route::post('/cadastro_empresa', 'Site\SiteController@cadastro_info')->name('cadastro_info');

Route::get('/cadastro_pf', 'Site\SiteController@cadastro_pf')->name('cadastro_pf');

Route::get('/doc_pf', 'Site\SiteController@doc_pf')->name('cadastro_pf');

// Route::post('/cadastro', 'Site\SiteController@cadastro')->name('cadastro');

Route::post('/cadastro', 'Site\SiteController@cadastro_empresa')->name('cadastro_empresa');

// Route::post('/categoria/{id}', 'SiteController@categoria');