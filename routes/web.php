<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ChangePasswordController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('users', '\App\Http\Controllers\Admin\UserController');
Route::resource('countries', '\App\Http\Controllers\Admin\CountryController');
Route::resource('states', '\App\Http\Controllers\Admin\StateController');
Route::resource('cities', '\App\Http\Controllers\Admin\CityController');
Route::resource('departments', '\App\Http\Controllers\Admin\DepartmentController');
Route::post('users/{user}/change-password', [ChangePasswordController::class, 'change_password'])
        ->name('users.change.password');


Route::get('{any}', function () {
      return view('employees.index');
})->where('{any}', '.*');
      
 