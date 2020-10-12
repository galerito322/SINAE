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

Route::get('/', function () {
    return view('/auth/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/editor', function () {
    return view('/editor/index');
});

//rotas da pagina discentes
Route::get('/discentes', ['as'=>'discentes','uses'=>'DiscenteController@index']);
Route::get('/discentes/adicionar', ['as'=>'discentes.adicionar','uses'=>'DiscenteController@adicionar']);
Route::post('/discentes/search', ['as'=>'discentes.search','uses'=>'DiscenteController@search']);
Route::post('/discentes/salvar', ['as'=>'discentes.salvar','uses'=>'DiscenteController@salvar']);
Route::get('/discentes/editar/{id}', ['as'=>'discentes.editar','uses'=>'DiscenteController@editar']);
Route::put('/discentes/atualizar/{id}', ['as'=>'discentes.atualizar','uses'=>'DiscenteController@atualizar']);
Route::get('/discentes/deletar/{id}', ['as'=>'discentes.deletar','uses'=>'DiscenteController@deletar']);
Route::get('/discentes/perfil/{id}', ['as'=>'discentes.perfil','uses'=>'DiscenteController@perfil']);

//rotas da pagina servidores/area
Route::get('/funcionarios/area', ['as'=>'area','uses'=>'AreaController@index']);
Route::get('/funcionarios/area/adicionar', ['as'=>'area.adicionar','uses'=>'AreaController@adicionar']);
Route::post('/funcionarios/area/salvar', ['as'=>'area.salvar','uses'=>'AreaController@salvar']);

//rotas da pagina servidores
Route::get('/funcionarios', ['as'=>'funcionarios','uses'=>'UserController@index']);
Route::get('/funcionarios/editar/{id}', ['as'=>'funcionarios.editar','uses'=>'UserController@editar']);
Route::put('/funcionarios/atualizar/{id}', ['as'=>'funcionarios.atualizar','uses'=>'UserController@atualizar']);
Route::get('/funcionarios/deletar/{id}', ['as'=>'funcionarios.deletar','uses'=>'UserController@deletar']);//desativar a fazer
Route::get('/funcionarios/perfil/{id}', ['as'=>'funcionarios.perfil','uses'=>'UserController@perfil']);

//rotas da pagina cursos
Route::get('/cursos', ['as'=>'cursos','uses'=>'CursoController@index']);
Route::get('/cursos/adicionar', ['as'=>'cursos.adicionar','uses'=>'CursoController@adicionar']);
Route::post('/cursos/salvar', ['as'=>'cursos.salvar','uses'=>'CursoController@salvar']);

//rotas agendamento
Route::get('/agenda', ['as'=>'agenda','uses'=>'AgendamentoController@index']);
Route::get('/agenda/adicionar/{id}', ['as'=>'agenda.adicionar','uses'=>'AgendamentoController@adicionar']);
Route::post('/agenda/salvar', ['as'=>'agenda.salvar','uses'=>'AgendamentoController@salvar']);
Route::get('/agenda/search', ['as'=>'agenda.search','uses'=>'AgendamentoController@search']);
Route::get('/agenda/deletar/{id}', ['as'=>'agenda.deletar','uses'=>'AgendamentoController@deletar']);

//rotas atendimento
Route::get('/atendimento', ['as'=>'atendimento','uses'=>'AtendimentoController@index']);
Route::get('/atendimento/atendimento/{id}', ['as'=>'atendimento.atendimento','uses'=>'AtendimentoController@atendimento']);
Route::post('/atendimento/salvar', ['as'=>'atendimento.salvar','uses'=>'AtendimentoController@salvar']);
Route::get('/atendimento/visualizar/{id}', ['as'=>'atendimento.visualizar','uses'=>'AtendimentoController@visualizar']);


//Route::get('/funcionarios', ['as'=>'funcionarios','uses'=>'UserController@index']);
