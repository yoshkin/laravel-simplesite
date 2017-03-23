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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
    // Backpack\MenuCRUD
    CRUD::resource('menu-item', 'MenuItemCrudController');
    // Backpack\NewsCRUD
    CRUD::resource('article', 'ArticleCrudController');
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('tag', 'TagCrudController');

       // Backpack\PageManager routes
//        Route::get('page/create/{template}', 'PageCrudController@create');
//        Route::get('page/{id}/edit/{template}', 'PageCrudController@edit');

        // This triggered an error before publishing the PageTemplates trait, when calling Route::controller();
         CRUD::resource('page', 'PageCrudController');

        // So for PageCrudController all routes are explicitly defined:
//        Route::get('page/reorder', 'PageCrudController@reorder');
//        Route::get('page/reorder/{lang}', 'PageCrudController@reorder');
//        Route::post('page/reorder', 'PageCrudController@saveReorder');
//        Route::post('page/reorder/{lang}', 'PageCrudController@saveReorder');
//        Route::get('page/{id}/details', 'PageCrudController@showDetailsRow');
//        Route::get('page/{id}/translate/{lang}', 'PageCrudController@translateItem');
//        Route::resource('page', 'PageCrudController');

    //Dashboard
    Route::get('dashboard', 'DashboardController@index');
});


/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);