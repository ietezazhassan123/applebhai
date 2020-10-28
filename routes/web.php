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

Route::get('Ietezaz',function(){
	  return view('layouts.master');
});




Route::get('accountant-dashbaord','accountc12@index')->name('accountant-dashbaord');
Route::get('customer-dashbaord','customerc12@index')->name('customer-dashbaord');
Route::get('employee-dashbaord','employeec12@index')->name('employee-dashbaord');
Route::get('staff-dashbaord','staffc12@index')->name('staff-dashbaord');



Route::prefix('staff')->group(function () {
    Route::resource('customer','StaffCustomerDealController');
});