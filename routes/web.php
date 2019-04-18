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

Route::get('/', 'HomeController@index');

Route::get('Game-Aggregator-System',    'GasController@index')      ->name('gas');
Route::get('Poker-Network',             'PokerController@index')    ->name('poker-network');
Route::get('Contact-Us',                'ContactController@index')  ->name('contact');
Route::get('Games',                     'GameController@index')     ->name('mobile-games');
Route::get('Work-with-us',              'CareerController@index')   ->name('career');
Route::get('About-us',                  'AboutUsController@index')  ->name('about-us');

