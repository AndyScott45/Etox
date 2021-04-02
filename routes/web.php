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


Route::get('/home', function () {
    return view('home');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/404', function () {
    return view('404');
});


Route::get('/about-us', function () {
    return view('about-us');
});


Route::get('/about-us2', function () {
    return view('about-us2');
});

Route::get('/team-page', function () {
    return view('team-page');
});

Route::get('/services', function () {
    return view('services');
});


Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/404', function () {
    return view('404');
});


/* Shortcodes */
Route::get('/accordions', function () {
    return view('accordions');
});

Route::get('/tabs', function () {
    return view('tabs');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/icon', function () {
    return view('icon');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/carousel', function () {
    return view('carousel');
});

Route::get('/maps', function () {
    return view('maps');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/notification', function () {
    return view('notification');
});


/* Portfolio */
Route::get('/portfolio-col-2', function () {
    return view('portfolio-col-2');
});

Route::get('/portfolio-col-3', function () {
    return view('portfolio-col-3');
});

Route::get('/portfolio-col-4', function () {
    return view('portfolio-col-4');
});

Route::get('/portfolio-item', function () {
    return view('portfolio-item');
});

/* Blog */

Route::get('/sidebar-right', function () {
    return view('sidebar-right');
});


Route::get('/sidebar-left', function () {
    return view('sidebar-left');
});

Route::get('/sidebar-full', function () {
    return view('sidebar-full');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/blog-grids', function () {
    return view('blog-grids');
});

/* Contact Us */
Route::get('/contact1', function () {
    return view('contact1');
});

Route::get('/contact2', function () {
    return view('contact2');
});

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
