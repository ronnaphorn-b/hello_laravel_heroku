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

Route::get('/inAfterPaidApi',function() {
    return view('inAfterPaidApi');
 });

Route::post('/inAfterPaidApi',function() {
    return view('inAfterPaidApi');
 });

Route::get('/inItemFoundApi',function() {
    return view('inItemFoundApi');
 });

Route::post('/inItemFoundApi',function() {
    return view('inItemFoundApi');
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
