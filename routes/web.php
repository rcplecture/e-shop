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




Route::get('admin/foods', 'Backend\FoodsController@index')->name('food.index');
Route::get('admin/foods/create', 'Backend\FoodsController@create')->name('food.create');
Route::post('admin/foods', 'Backend\FoodsController@store')->name('admin.food.store');


//Route::get('foods', 'TaskController@index')->name('food.index');
//Route::get('foods/create', 'TaskController@create');
//Route::post('foods/create', 'TaskController@store')->name('food.store');
//Route::get('foods/edit/{id}', 'TaskController@edit')->name('food.edit');
//Route::put('foods/update/{id}', 'TaskController@update')->name('food.update');
//Route::delete('foods/delete/{id}', 'TaskController@delete')->name('food.destroy');
