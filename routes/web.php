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
Route::get('/home', 'HomeController@redirect');


Auth::routes();

Route::get('/employees', 'EmployeeController@index')->name('allEmployees')->middleware('auth');
Route::get('/employee/{id}', 'EmployeeController@show')->middleware('auth');
Route::get('/employee', 'EmployeeController@showProfile')->name('viewProfile')->middleware('auth');

//Route::resource('payroll', 'PayController', ['except' => ['index', 'show', 'store', 'create', 'edit', 'update', 'delete']])->middleware('auth');
Route::get('/payroll', 'PayController@index')->name('allPayrolls')->middleware('auth');
Route::get('/payroll/{id}', 'PayController@show')->name('payroll.show')->middleware('auth');
Route::get('/create/payroll', 'PayController@create')->name('payroll.create')->middleware('auth');
Route::post('/create/payroll', 'PayController@store')->name('payroll.store')->middleware('auth');

Route::resource('vehicles', 'VehicleController', ['except' => ['index', 'show', 'store', 'create', 'edit', 'update', 'delete']])->middleware('auth');
Route::get('/vehicles', 'VehicleController@index')->name('allVehicles')->middleware('auth');
Route::get('/vehicle/{id}', 'VehicleController@show')->name('vehicle.show')->middleware('auth');
Route::get('/create/vehicle', 'VehicleController@create')->name('vehicle.create')->middleware('auth');
Route::post('/create/vehicle', 'VehicleController@store')->middleware('auth');
Route::get('/edit/vehicle/{id}', 'VehicleController@edit')->name('vehicle.edit')->middleware('auth');
Route::post('/edit/vehicle/{id}', 'VehicleController@update')->middleware('auth');
Route::get('/destroy/vehicle/{id}', 'VehicleController@destroy')->name('vehicle.destroy')->middleware('auth');

Route::resource('depots', 'DepotController', ['except' => ['index', 'show', 'store', 'create', 'edit', 'update', 'delete']])->middleware('auth');
Route::get('/depots', 'DepotController@index')->name('allDepots')->middleware('auth');
Route::get('/depot/{id}', 'DepotController@show')->name('depot.show')->middleware('auth');
Route::get('/create/depot', 'DepotController@create')->name('depot.create')->middleware('auth');
Route::post('/create/depot', 'DepotController@store')->middleware('auth');
Route::get('/edit/depot/{id}', 'DepotController@edit')->name('depot.edit')->middleware('auth');
Route::post('/edit/depot/{id}', 'DepotController@update')->middleware('auth');
Route::get('/destroy/depot/{id}', 'DepotController@destroy')->name('depot.destroy')->middleware('auth');

Route::resource('routes', 'RouteController', ['except' => ['index', 'show', 'store', 'create', 'edit', 'update', 'delete']])->middleware('auth');
Route::get('/routes', 'RouteController@index')->name('allRoutes')->middleware('auth');
Route::get('/route/{id}', 'RouteController@show')->name('route.show')->middleware('auth');
Route::get('/create/route', 'RouteController@create')->name('route.create')->middleware('auth');
Route::post('/create/route', 'RouteController@store')->middleware('auth');
Route::get('/edit/route/{id}', 'RouteController@edit')->name('route.edit')->middleware('auth');
Route::post('/edit/route/{id}', 'RouteController@update')->middleware('auth');
Route::get('/destroy/route/{id}', 'RouteController@destroy')->name('route.destroy')->middleware('auth');
Route::get('/create/route/add', 'RouteController@addStop')->middleware('auth');
Route::get('/create/route/remove', 'RouteController@removeStop')->middleware('auth');
Route::get('/edit/route/add/{id}', 'RouteController@addStop_edit')->middleware('auth');
Route::get('/edit/route/remove/{id}', 'RouteController@removeStop_edit')->middleware('auth');

