<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home.index']);

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::post('/email-subscription/store', 'EmailSubscriptionController@store')->name('email.subscription.store');

Route::get('/brand', 'BrandController@index')->name('brand.index');
Route::get('/brand/{slug}', 'BrandController@show')->name('brand.show');

Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category/{slug}', 'CategoryController@show')->name('category.show');

Route::get('/city', 'CityController@index')->name('city.index');
Route::get('/city/{slug}', 'CityController@show')->name('city.show');

Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/{slug}', 'ProductController@show')->name('product.show');


Route::namespace('Auth')->group(function () {
    //login route
    Route::group(['middleware' => ['guest:customer']], function () {

        Route::get('/register', 'RegisterController@index')->name('customer.register');
        Route::post('/register', 'RegisterController@store')->name('customer.register');
        Route::post('/login', 'LoginController@store')->name('customer.login');
        Route::get('/forget-password', 'ForgetPasswordController@index')->name('customer.forget.password');
        Route::post('/forget-password', 'ForgetPasswordController@sendPasswordResetToken')->name('customer.forget.password');
        Route::get('/reset-password', 'ForgetPasswordController@getResetLink')->name('customer.reset.password');
        Route::post('/reset-password', 'ForgetPasswordController@resetPassword')->name('customer.reset.password');
    });
    Route::group(['middleware' => ['customer']], function () {
        Route::group(['prefix' => 'customer'], function () {
            Route::get('/my-account', 'LoginController@index')->name('customer.dashboard');
            Route::get('/logout', 'LoginController@logout')->name('customer.logout');
        });
    });
});
Route::group(['middleware' => ['customer']], function () {
    Route::get('/booking/{slug}', 'BookingController@index')->name('customer.booking.index');
    Route::post('/booking-store', 'BookingController@store')->name('customer.booking.store');
    Route::any('/booking-esewa-success', 'BookingController@esewaSuccess')->name('customer.booking.esewa.success');
    Route::any('/booking-esewa-failure', 'BookingController@esewafailure')->name('customer.booking.esewa.failure');
    Route::any('khalti/verification', 'BookingController@khaltiVerification')->name('customer.booking.khalti.verification');
    Route::any('/khalti/success/{ref_id}', 'BookingController@khaltiSuccess')->name('customer.booking.khalti.success');
});
Route::get('{page?}/{slug}', 'ContentController@show')->name('content.show')->where('page', '^(?!.*admin).*$');
Route::get('{slug}', 'ContentController@show')->name('content.show');
