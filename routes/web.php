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

Route::get('/', function () {
    return view('articles');
});

Route::get('/hello/{name}', function ($name) {
    return "Bonjour $name !";
});

Route::get('/posts', function() {
    return 'liste d\'articles';
});

Route::get('/postsJson', function() {
    return response()->json([
        'title' => 'MON SUPER TITRE',
        'description' => 'Ma super description'
    ]);
});

Route::get('/articles', function(){
    return view('articles');
});