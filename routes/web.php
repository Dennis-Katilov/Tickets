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
})->name('welcome');

Route::get('about', function (){
   return view('about');
})->name('about');

Route::get('ticket', function (){
    return view('ticket');
})->name('ticket');

Route::get('ticket/all/{id}', 'ContactController@detail')->name('ticket-detail');
Route::get('ticket/all/{id}/update', 'ContactController@update')->name('ticket-update');
Route::get('ticket/all/{id}/delete', 'ContactController@delete')->name('ticket-delete');
Route::post('ticket/all/{id}/update', 'ContactController@updateSubmit')->name('ticket-update-submit');
Route::get('ticket/all', 'ContactController@all')->name('ticket-all');
Route::post('ticket/submit', 'ContactController@submit')->name('ticket-form');

