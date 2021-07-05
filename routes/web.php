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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', 'Frontend\MainController@index');




Route::get('admin/foods', 'Backend\FoodsController@index');
Route::get('admin/foods/create', 'Backend\FoodsController@create');
Route::post('admin/foods', 'Backend\FoodsController@store')->name('admin.food.store');


Route::get('tasks', 'TaskController@index')->name('task.index');
Route::get('tasks/create', 'TaskController@create');
Route::post('tasks/create', 'TaskController@store')->name('task.store');
Route::get('tasks/edit/{id}', 'TaskController@edit')->name('task.edit');
Route::put('tasks/update/{id}', 'TaskController@update')->name('task.update');
Route::delete('tasks/delete/{id}', 'TaskController@delete')->name('task.destroy');
