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
//use App\Contact;
Route::get('/', function () {
    return view('welcome');
    //$contacts = App\Contact::all();
    //return view('welcome', ['contacts' => $contacts]);
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

 Route::get('/testDisplayDB', function () {
    //$contacts = App\Contact::all();
    //return view('testDisplayDB', ['contacts' => $contacts]);
    $chats = DB::select('select line_display_name__c,line_uid__c from salesforce.chat__c');
    return view('testDisplayDB',['chats'=>$chats]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
