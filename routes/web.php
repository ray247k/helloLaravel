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

    $tasks = DB::table('tasks')->get();
    return view('about',['github' => 'ray247k', 'project'=> 'helloLaravel'])
        ->with('skill', ['PHP', 'docker', 'nginx'])
        ->with('tasks',$tasks);
});
