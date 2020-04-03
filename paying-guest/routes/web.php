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



Auth::routes(['verify' => true]);



Route::get('/home', 'HomeController@index')->name('home');
 
 //to view the list
Route:: get('/view', 'PostController@viewPg');
Route:: get('/view-details/{pg_id}', 'PostController@viewPg_details');

////Add PG
Route::get('/addPG', 'PostController@showPGform')->middleware('auth');
Route::post('/addPG', 'PostController@postPGform')->middleware('auth');
 
 


//my submissions
Route::get('/my_submissions', 'PostController@my_submissions')->middleware('auth');

 //EDit pg
Route::get('/edit-pg/{pg_id}', 'PostController@edit_pg')->middleware('auth');
Route::post('/edit-pg/{pg_id}', 'PostController@post_edit_pg')->middleware('auth');

//delete pg
Route::get('/delete-pg/{pg_id}', 'PostController@delete_pg')->middleware('auth');

///search
Route::post('/search', 'PostController@search');

///change password
Route::get('/change_password', 'PostController@change_password')->middleware('auth');
Route::post('/change_password', 'PostController@changePassword')->middleware('auth');

//view contact info
Route::get('/contact/{pg_id}' ,'PostController@view_contact');

//notifications
Route::get('/notifications','PostController@notifications')->middleware('auth');

//clear notifications
Route::get('/clear_all','PostController@clear_notifications')->middleware('auth');

//email verification
Route::get('/verify','PostController@');