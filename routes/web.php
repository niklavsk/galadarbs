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

Route::get('/extras', 'ExtraController@index')->name('allExtras')->middleware('auth');

Route::get('/create/address', 'ExtraController@createAddress')->name('address.create')->middleware('auth');
Route::post('/create/address', 'ExtraController@storeAddress')->middleware('auth');
Route::get('/destroy/address/{id}', 'ExtraController@destroyAddress')->name('address.destroy')->middleware('auth');

Route::get('/create/job', 'ExtraController@createJob')->name('job.create')->middleware('auth');
Route::post('/create/job', 'ExtraController@storeJob')->middleware('auth');
Route::get('/destroy/job/{id}', 'ExtraController@destroyJob')->name('job.destroy')->middleware('auth');


Route::resource('employees', 'EmployeeController', ['except' => ['index', 'show', 'store', 'create', 'edit', 'update', 'delete', 'showProfile']])->middleware('auth');
Route::get('/employees', 'EmployeeController@index')->name('allEmployees')->middleware('auth');
Route::get('/employee/{id}', 'EmployeeController@show')->middleware('auth');
Route::get('/employee', 'EmployeeController@showProfile')->name('viewProfile')->middleware('auth');
Route::get('/create/employee', 'EmployeeController@create')->name('employee.create')->middleware('auth');
Route::post('/create/employee', 'EmployeeController@store')->middleware('auth');
Route::get('/edit/employee/{id}', 'EmployeeController@edit')->name('employee.edit')->middleware('auth');
Route::post('/edit/employee/{id}', 'EmployeeController@update')->middleware('auth');
Route::get('/destroy/employee/{id}', 'EmployeeController@destroy')->name('employee.destroy')->middleware('auth');


Route::get('/mail','EmployeeController@sendMail')->middleware('auth');

//Route::resource('payroll', 'PayController', ['except' => ['index', 'show', 'store', 'create', 'edit', 'update', 'delete']])->middleware('auth');
Route::get('/payroll', 'PayController@index')->name('allPayroll')->middleware('auth');
Route::get('/payroll/{id}', 'PayController@show')->name('payroll.show')->middleware('auth');
Route::get('/create/payroll', 'PayController@create')->name('payroll.create')->middleware('auth');
Route::post('/create/payroll', 'PayController@store')->name('payroll.store')->middleware('auth');
//Route::post('/create/payrolls', 'PayController@submitMany')->name('payrolls.store')->middleware('auth');
Route::get('/edit/payroll/{id}','PayController@edit')->name('payroll.edit')->middleware('auth');
Route::post('/edit/payroll/{id}', 'PayController@update')->middleware('auth');
Route::get('/destroy/payroll/{id}', 'PayController@destroy')->name('payroll.destroy')->middleware('auth');


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

Route::get('/create/timetable/{id}', 'RouteController@createTimetable')->middleware('auth');
Route::post('/create/timetable/{id}', 'RouteController@storeTimetable')->middleware('auth');
Route::post('/destroy/timetable/{id}', 'RouteController@destroyTimetable')->middleware('auth');


Route::resource('departments', 'DepController', ['except' => ['index', 'show', 'store', 'create', 'edit', 'update', 'delete']])->middleware('auth');
Route::get('/departments', 'DepController@index')->name('allDepartments')->middleware('auth');
Route::get('/department/{id}', 'DepController@show')->name('department.show')->middleware('auth');
Route::get('/create/department', 'DepController@create')->name('department.create')->middleware('auth');
Route::post('/create/department', 'DepController@store')->middleware('auth');
Route::get('/edit/department/{id}', 'DepController@edit')->name('department.edit')->middleware('auth');
Route::post('/edit/department/{id}', 'DepController@update')->middleware('auth');
Route::get('/destroy/department/{id}', 'DepController@destroy')->name('department.destroy')->middleware('auth');


Route::resource('stops', 'StopController', ['except' => ['index', 'show', 'store', 'create', 'edit', 'update', 'delete']])->middleware('auth');
Route::get('/stops', 'StopController@index')->name('allStops')->middleware('auth');
Route::get('/stop/{id}', 'StopController@show')->name('stop.show')->middleware('auth');
Route::get('/create/stop', 'StopController@create')->name('stop.create')->middleware('auth');
Route::post('/create/stop', 'StopController@store')->middleware('auth');
Route::get('/edit/stop/{id}', 'StopController@edit')->name('stop.edit')->middleware('auth');
Route::post('/edit/stop/{id}', 'StopController@update')->middleware('auth');
Route::get('/destroy/stop/{id}', 'StopController@destroy')->name('stop.destroy')->middleware('auth');


Route::resource('users', 'UserController', ['except' => ['index', 'show', 'store', 'create', 'edit', 'update', 'delete']])->middleware('auth');
Route::get('/users', 'UserController@index')->name('allUsers')->middleware('auth');
Route::get('/user/{id}', 'UserController@show')->name('user.show')->middleware('auth');
Route::get('/create/user', 'UserController@create')->name('user.create')->middleware('auth');
Route::post('/create/user', 'UserController@store')->middleware('auth');
Route::get('/edit/user/{id}', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::post('/edit/user/{id}', 'UserController@update')->middleware('auth');
Route::get('/destroy/user/{id}', 'UserController@destroy')->name('user.destroy')->middleware('auth');

