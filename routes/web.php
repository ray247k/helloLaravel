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

/**
 * 指定一個新的路由到domain/about下，載入about.blade.php作為view
 */
Route::get('about', function () {

    return view('about',['github' => 'ray247k', 'project'=> 'helloLaravel'])
        ->with('skill', ['PHP', 'docker', 'nginx']);
});

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/posts', 'PostsController@index');
//Route::get('/posts/{posts}', 'PostsController@show');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');