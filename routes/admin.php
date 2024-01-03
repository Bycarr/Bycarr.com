<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', ['uses' => "Auth\LoginController@index", 'as' => 'admin.auth.login']);
    Route::post('/login', ['uses' => "Auth\LoginController@login", 'as' => 'admin.auth.login']);
});

Route::group(['middleware' => ['admin']], function () {
    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    Route::post('change-password', 'UserController@changePassword')->name('admin.change-password');

    Route::get('/logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'admin.auth.logout']);
    Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);
    Route::get('/dashboard', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::prefix('roles')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'RoleController@changeStatus', 'as' => 'admin.roles.change-status']);
    });
    Route::resource('roles', 'RoleController', ['as' => 'admin']);

    Route::prefix('user')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'UserController@changeStatus', 'as' => 'admin.user.change-status']);
        Route::get('/trash', ['uses' => 'UserController@trash', 'as' => 'admin.user.trash']);
        Route::get('/restore/{id}', ['uses' => 'UserController@restore', 'as' => 'admin.user.restore']);
    });
    Route::resource('user', 'UserController', ['as' => 'admin']);

    Route::prefix('product-category')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'ProductCategoryController@changeStatus', 'as' => 'admin.product-category.change-status']);
        Route::get('/trash', ['uses' => 'ProductCategoryController@trash', 'as' => 'admin.product-category.trash']);
        Route::get('/restore/{id}', ['uses' => 'ProductCategoryController@restore', 'as' => 'admin.product-category.restore']);
        Route::prefix('{category}')->group(function () {
            Route::resource('attribute', 'ProductCategoryAttributeController', ['as' => 'admin.product-category']);
        });
    });
    Route::resource('product-category', 'ProductCategoryController', ['as' => 'admin']);

    Route::prefix('product-brand')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'ProductBrandController@changeStatus', 'as' => 'admin.product-brand.change-status']);
        Route::get('/trash', ['uses' => 'ProductBrandController@trash', 'as' => 'admin.product-brand.trash']);
        Route::get('/restore/{id}', ['uses' => 'ProductBrandController@restore', 'as' => 'admin.product-brand.restore']);

        Route::prefix('{brand}')->group(function () {
            Route::prefix('model')->group(function () {
                Route::get('/change-status/{id}', ['uses' => 'ProductModelController@changeStatus', 'as' => 'admin.product-brand.model.change-status']);
                Route::get('/trash', ['uses' => 'ProductModelController@trash', 'as' => 'admin.product-brand.model.trash']);
                Route::get('/restore/{id}', ['uses' => 'ProductModelController@Restore', 'as' => 'admin.product-brand.model.restore']);
            });
            Route::resource('model', 'ProductModelController', ['as' => 'admin.product-brand']);
        });
    });
    Route::resource('product-brand', 'ProductBrandController', ['as' => 'admin']);
    Route::get('get-model/{brand}', ['uses' => 'ProductController@getModel', 'as' => 'admin.get-model']);
    Route::get('get-attribute/{category}', ['uses' => 'ProductController@getAttribute', 'as' => 'admin.get-attribute']);

    Route::prefix('content')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'ContentController@changeStatus', 'as' => 'admin.content.change-status']);
        Route::get('/trash', ['uses' => 'ContentController@trash', 'as' => 'admin.content.trash']);
        Route::get('/restore/{id}', ['uses' => 'ContentController@restore', 'as' => 'admin.content.restore']);
    });
    Route::resource('content', 'ContentController', ['as' => 'admin']);


    Route::prefix('product')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'ProductController@changeStatus', 'as' => 'admin.product.change-status']);
        Route::get('/verify/{id}', ['uses' => 'ProductController@verify', 'as' => 'admin.product.verify']);
        Route::get('/import-product', ['uses' => 'ProductController@getImportProduct', 'as' => 'admin.product.getImport']);
        Route::post('/import-product', ['uses' => 'ProductController@postImport', 'as' => 'admin.product.postImport']);
        Route::get('/trash', ['uses' => 'ProductController@trash', 'as' => 'admin.product.trash']);
        Route::get('/restore/{id}', ['uses' => 'ProductController@restore', 'as' => 'admin.product.restore']);
        Route::get('/force-delete/{id}', ['uses' => 'ProductController@forceDelete', 'as' => 'admin.product.force-delete']);
        Route::post('/destroy-image/{id}', 'ProductController@destroyImage')->name('admin.product.destroy-image');
    });
    Route::resource('product', 'ProductController', ['as' => 'admin']);
    Route::get('product-search', 'ProductController@productSearch')->name('admin.product-search');
    Route::post('product-confirm', 'ProductController@productConfirm')->name('admin.product-confirm');

    Route::prefix('agent')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'AgentController@changeStatus', 'as' => 'admin.agent.change-status']);
        Route::get('/trash', ['uses' => 'AgentController@trash', 'as' => 'admin.agent.trash']);
        Route::get('/restore/{id}', ['uses' => 'AgentController@restore', 'as' => 'admin.agent.restore']);
        Route::post('/destroy-image/{id}', 'AgentController@destroyImage')->name('admin.agent.destroy-image');
    });
    Route::resource('agent', 'AgentController', ['as' => 'admin']);

    Route::prefix('attribute')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'AttributeController@changeStatus', 'as' => 'admin.attribute.change-status']);
        Route::get('/trash', ['uses' => 'AttributeController@trash', 'as' => 'admin.attribute.trash']);
        Route::get('/restore/{id}', ['uses' => 'AttributeController@restore', 'as' => 'admin.attribute.restore']);
        Route::post('/destroy-image/{id}', 'AttributeController@destroyImage')->name('admin.attribute.destroy-image');
    });
    Route::resource('attribute', 'AttributeController', ['as' => 'admin']);

    Route::prefix('menu')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'MenuController@changeStatus', 'as' => 'admin.menu.change-status']);
        Route::prefix('{menu}')->group(function () {
            Route::prefix('menu-item')->group(function () {
                Route::post('/sort', ['uses' => 'MenuItemController@sort', 'as' => 'admin.menu.menu-item.sort']);
            });
            Route::resource('menu-item', 'MenuItemController', ['as' => 'admin.menu']);
        });
    });
    Route::resource('menu', 'MenuController', ['as' => 'admin']);

    Route::get('get-role/{company}', ['uses' => 'UserController@getRole', 'as' => 'admin.get-role']);
    Route::get('/check-model', ['uses' => 'ProductModelController@CheckModel', 'as' => 'admin.check-model']);

    Route::prefix('city')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'CityController@changeStatus', 'as' => 'admin.city.change-status']);
        Route::get('/trash', ['uses' => 'CityController@trash', 'as' => 'admin.city.trash']);
        Route::get('/restore/{id}', ['uses' => 'CityController@restore', 'as' => 'admin.city.restore']);
        Route::post('/destroy-image/{id}', 'CityController@destroyImage')->name('admin.city.destroy-image');
    });
    Route::resource('city', 'CityController', ['as' => 'admin']);
    Route::get('get-district/{province}', ['uses' => 'CityController@getDistrict', 'as' => 'admin.get-district-by-province']);

    Route::prefix('banner')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'BannerController@changeStatus', 'as' => 'admin.banner.change-status']);
        Route::get('/trash', ['uses' => 'BannerController@trash', 'as' => 'admin.banner.trash']);
        Route::get('/restore/{id}', ['uses' => 'BannerController@restore', 'as' => 'admin.banner.restore']);
        Route::post('/destroy-image/{id}', 'BannerController@destroyImage')->name('admin.banner.destroy-image');
    });
    Route::resource('banner', 'BannerController', ['as' => 'admin']);
    Route::prefix('customer')->group(function () {
        Route::get('/change-status/{id}', ['uses' => 'CustomerController@changeStatus', 'as' => 'admin.customer.change-status']);
    });
    Route::resource('customer', 'CustomerController', ['as' => 'admin']);

    Route::resource('layout-option', 'LayoutOptionController', ['as' => 'admin']);

    Route::resource('booking', 'BookingController', ['as' => 'admin']);
});
