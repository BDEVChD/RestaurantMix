<?php

use Illuminate\Support\Facades\Route;
use App\GeneralSetting;
use App\SocialSetting;
use App\SeoSetting;  
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index')->middleware('role:admin');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit')->middleware('role:admin'); 
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create')->middleware('role:admin');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store')->middleware('role:admin'); 
Route::delete('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete'); 
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update')->middleware('role:admin'); 


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
Route::post('/reservations', 'StaticPagesController@saveReservation');
Route::get('/reservations/thank-you', 'StaticPagesController@reservationsThankYou');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');
Route::get('/offers/thank-you', 'StaticPagesController@offersThankYou');
Route::post('/offers', 'StaticPagesController@registerMember');

//admin users
Route::get('/admin/users', 'admin\UsersController@index')->middleware('role:admin'); 
Route::get('/admin/users/create', 'admin\UsersController@create')->middleware('role:admin'); 
Route::post('/admin/users', 'admin\UsersController@store')->middleware('role:admin'); 
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit')->middleware('role:admin'); 
Route::delete('/admin/users/{id}/delete', 'admin\UsersController@delete')->middleware('role:admin'); 
Route::put('/admin/users/{id}', 'admin\UsersController@update')->middleware('role:admin'); 


//Customers Area 
Route::get('/admin/members', 'admin\MemberController@index');
Route::delete('/admin/members/{id}/delete', 'admin\MemberController@delete'); 

//Admin Reservations
Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::delete('/admin/reservations/{id}/delete', 'admin\ReservationController@delete'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin Settings 
Route::get('/admin/settings/general', 'admin\SettingController@general'); 
Route::put('/admin/settings/general', 'admin\SettingController@saveGeneral'); 
Route::get('/admin/settings/seo', 'admin\SettingController@seo')->middleware('role:admin'); 
Route::put('/admin/settings/seo', 'admin\SettingController@saveSeo')->middleware('role:admin'); 
Route::get('/admin/settings/social', 'admin\SettingController@social')->middleware('role:admin'); 
Route::put('/admin/settings/social', 'admin\SettingController@saveSocial')->middleware('role:admin'); 

View::composer(['home', 'pages/about', 'pages/contact', 'pages/offers', 'pages/reservations', 'pages/contact', 'thank-you', 'menu/index', 'menu/single-menu'], function ($view) {  // for any view, we can pass something into it
    $generalSettings = GeneralSetting::find(1); 
    $socialSettings = SocialSetting::find(1); 
    $seoSettings = SeoSetting::find(1); 

    $view->with('settings', [
        "general" => $generalSettings, 
        "social" => $socialSettings, 
        "seo" => $seoSettings
    ]); 
});
