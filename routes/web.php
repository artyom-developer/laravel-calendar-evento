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
    return view('welcome');
});

Route::get('Calendar/event','ControllerCalendar@index');
Route::get('Calendar/event/{mes}','ControllerCalendar@index_month');

// formulario
Route::get('Evento/form','ControllerEvent@form');
Route::post('Evento/create','ControllerEvent@create');
// Detalles de evento
Route::get('Evento/details/{id}','ControllerEvent@details');
// Calendario
Route::get('Evento/index','ControllerEvent@index');
Route::get('Evento/index/{month}','ControllerEvent@index_month');
