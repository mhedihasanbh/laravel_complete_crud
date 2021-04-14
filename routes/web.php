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
Route::get('/',[
    'uses'=>'App\Http\Controllers\CrudController@index',
    'as'=>'Home'
]);
Route::post('/insertData',[
    'uses'=>'App\Http\Controllers\CrudController@dataInsert',
    'as'=>'insertData'
]);
Route::get('/data-view',[
    'uses'=>'App\Http\Controllers\CrudController@viewData',
    'as'=>'data-view'
]);
Route::get('/edit/{id}',[
    'uses'=>'App\Http\Controllers\CrudController@dataEdit',
    'as'=>'edit'
]);
Route::post('/data-update',[
    'uses'=>'App\Http\Controllers\CrudController@dataUpdate',
    'as'=>'data-update'
]);
Route::get('/delete/{id}',[
    'uses'=>'App\Http\Controllers\CrudController@dataDelete',
    'as'=>'delete'
]);









//Route::get('/', function () {
//    return view('welcome');
//});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
