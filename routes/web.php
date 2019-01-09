<?php


Route::get('/home', function()
{
    return view('home') ;
});

Route::get('/login', function()
{
    return view('/login_register/login') ;
});

Route::get('/register', function()
{
    return view('/login_register/register') ;
});

Route::get('/register_charity', function()
{
    return view('/login_register/register_charity') ;
});

Route::get('/persons', function()
{
    return view('/persons') ;
});

Route::get('/about_us', function()
{
    return view('/about_us') ;
});

Route::get('/profile', function()
{
    return view('/profile') ;
});

Route::get('/post/details', function()
{
    return view('/post_details') ;
});

Route::get('/allpost/details', function()
{
    return view('/allpost_details') ;
});

Route::get('/', function () {
    return view('home');
});
//Added By Hawaa
// Upload images With Ajax
Route::get('/profile', 'photosController@index');
Route::post('/profile/store', 'photosController@store')->name('ajaxupload.store');
Route::post('/profile/update', 'photosController@store')->name('ajaxupload.update');
