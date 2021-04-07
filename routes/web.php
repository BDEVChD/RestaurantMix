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

// Route::get('/', function () {
//     return view('home');
// });

// //Admin Dashboard
// Route::get('/admin', function () {
//     return view('admin/dashboard');
// });

// //Admin Authentication
// Route::get('/admin/register', function () {
//     return view('admin/register');
// });

// Route::get('/admin/login', function () {
//     return view('admin/login');
// });
//Admin Dashboard: 
Route::get('/admin', 'admin\AdminController@dashboard');

//Admin Food Categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit'); 
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store'); 
Route::delete('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete'); 
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update'); 


//Admin Customers
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit'); 
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');
Route::delete('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete'); 
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update'); 
Route::post('/admin/food-items', 'admin\FoodItemsController@store'); 


//Admin Food Categories
Route::get('/admin/offers-members', 'admin\CustomersController@allOffersMembers'); //with name of the method created in the controller
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit'); 
Route::get('/admin/reservations', 'admin\CustomersController@allReservations'); //with that allreservations method

//static pages
Route::get('/', 'StaticPagesController@home'); 
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu'); 
Route::get('/about', 'StaticPagesController@about');
Route::get('/reservations', 'StaticPagesController@reservations');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');

//admin users
Route::get('/admin/users', 'admin\UsersController@index'); 
Route::get('/admin/users/create', 'admin\UsersController@create'); 
Route::post('/admin/users', 'admin\UsersController@store'); 
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit'); 
Route::delete('/admin/users/{id}/delete', 'admin\UsersController@delete'); 
Route::put('/admin/users/{id}', 'admin\UsersController@update'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
