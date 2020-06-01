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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/employees', 'EmployeeController@index')->name('allEmployees')->middleware('auth');
Route::get('/employee/{id}', 'EmployeeController@show')->middleware('auth');
Route::get('/employee', 'EmployeeController@showProfile')->name('viewProfile')->middleware('auth');

Route::get('/payroll', 'PayController@index')->name('allPayroll')->middleware('auth');
Route::get('/payroll/view/{id}', 'PayController@show')->name('pay')->middleware('auth');


