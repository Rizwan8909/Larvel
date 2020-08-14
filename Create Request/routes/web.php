<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function(){
    return "Welcome to Laravel 7.0";
});

// Required Dynamic Route with parameter
// Route::get('welcome/{name}', function($username){
//     return "Welcome $username";
// });

// Optional Dynamic Route with parameter
// Route::get('welcome/{name?}', function($username="Guest"){
//     return "Welcome $username";
// });

// Redirecting [There are two types of redirects 1. Temporary 2. Permanent]
// Route::redirect('/', 'home');

// View is for static landing pages
Route::view('/', 'welcome', ['name' => 'Rizwan Ahmed']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/displayname', 'MyController@displayName');

// For resource Controller [created from command line]
Route::resource('post', 'PostController');

