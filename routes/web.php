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
//トップページ(/)をTasksControllerのindexに設定
//つまり、indexアクションは/と/tasksにアクセスした両方で同じルーティング
Route::get('/', 'TasksController@index');

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//認証付きのルーティング
//store,destroyはログイン済のユーザしか実行できない。
Route::group(['middleware' => ['auth']], function () {
    Route::resource('tasks', 'TasksController', ['only' => ['store', 'destroy', 'show', 'index']]);
    Route::get('calendar', 'TasksController@calendar')->name('tasks.calendar');
    Route::get('create', 'TasksController@create')->name('tasks.create');
});



