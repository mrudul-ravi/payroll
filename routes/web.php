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

include_once('app_api.php');
include_once('admin.php');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('auto-pull', function () {
    exec('git pull');
});
//App::bind('App\Deductions\TaxInterface','App\Deductions\Malaysia');



Route::get('/login', function () {
    return view('login ');
})->name('login');


Route::post('/login', 'Auth\LoginController@login')->name('web.login');
Route::get('/logout', function() {
	auth()->logout();
    return view('login');
})->name('web.logout');


Route::middleware('auth')->group(function () {
	Route::get('/admin/manager/dashboard', function () {
	    return view('index');
	});
});


Auth::routes(['verify' => true]);



Route::resource('employees', 'Admin\EmployeeController');

Route::get('app', function () {
	return view('front_end.index');
});
// Route::get('/{vue_capture?}', function () {
// 	return view('front_end.index');
// })->where('vue_capture', '[\/\w\.-]*');