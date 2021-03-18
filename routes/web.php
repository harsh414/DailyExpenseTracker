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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth']],function (){
    Route::get('/expenses','ExpenseController@expenses')->name('expense');
    Route::get('/addExpense','ExpenseController@addexpense')->name('addExpense');
    Route::post('/addExpense','ExpenseController@store')->name('saveexp');

    Route::get('/manageExpense','ExpenseController@manageExpense')->name('manageExpense');
    Route::delete('/manageExpense/{id}','ExpenseController@destroy')->name('destroy');

    Route::get('/profile','HomeController@profile')->name('profile');
    Route::put('/profile','HomeController@changeImage')->name('imageUpdate');
});
