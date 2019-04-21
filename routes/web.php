<?php
/**************************  Update Data charity ***************************/
Route::get('update_ch/{id?}','UpdataDataCharity@show')->name('update_ch');
Route::post('updateData','UpdataDataCharity@update');
/**************************  *********************** ***********************/
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
Route::post('charity/register','CharityController@register');
Route::post('charity/login','CharityController@login');
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
//Charity posts
// Upload images With Ajax
//route::resource("profile","postsController");
//Route::post('/updateImg', 'photosController@update')->name('ajaxupload.update');
Route::post('/profile/updateProfile', 'photosController@update_profile');
Route::post('/profile/updateCover', 'photosController@update_cover');


Route::post('/profile/addPost', 'postsController@store');
Route::post('/profile/deletePost', 'postsController@destroy');
Route::get('/profile/editPost/{id}','postsController@edit');
Route::post('/updatePost/{id}','postsController@update')->name("updatePost");
Route::get('/profile/{id}', 'postsController@show')->name("show");

Route::post('/deleteImg', 'photosController@deleteImg')->name('deleteImg');


//////////////////////////
Route::get('/persons','personsController@index');
