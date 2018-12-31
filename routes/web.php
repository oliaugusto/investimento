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

/**
 * Pagina inicial
 * Home page
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * Rotas para autenticação do usuario
 * Routes to user auth
 */
 Route::get('/login', ['uses' => 'Controller@fazerLogin']);
 Route::post('/login', ['as' => 'user.login', 'uses' => 'DashboardController@auth']);
 Route::post('/dashboard', ['as' => 'user.dashboard', 'uses' => 'DashboardController@index']);