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

Route::get('/', function()
{
   return View('welcome');
});


// for admin route

Route ::group(['middleware' =>['auth' ,'admin']], function(){

   Route::get('/admin', function()
{
   return View('admin.dashboard');
});

  
   // Route::get('/admin', 'AdminDashboardController@create')->name('admin.dashboard');
   Route::get('/role-register', 'AdminDashboardController@register');
   Route::get('/role-edit/{id}', 'AdminDashboardController@editregister') ;
   Route::put('/role-update/{id}', 'AdminDashboardController@updateregister') ;
   Route::delete('/role-delete/{id}', 'AdminDashboardController@deleteregister') ;
   Route::get('/role-post', 'Adminpostcontroller@create');
   Route::get('/role-approved', 'Adminpostcontroller@index');

   Route::post('/toggle-approve', 'Adminpostcontroller@approval')->name('admin.approve');


   




});



Route ::group(['middleware' =>'auth' ], function(){

Route::get('/register', function()
{
   return View('register');

});

Route::get('home', function()
{
   return View('home');
});


Route::get('cause', function()
{
   return View('cause');
});


Route::get('symptom', function()
{
   return View('symptom');
});


Route::get('treatment', function()
{
   return View('treatment');
});

Route::get('healing', function()
{
   return View('healing');
});

Route::get('about', function()
{
   return View('about');
});



Route::get('/home', 'HomeController@index')->name('home');


  //route for posts
  Route::get('/posts/create', 'PostsController@create')->name('posts.create') ;
  Route::post('/post/store', 'PostsController@store')->name('post.store'); 
  Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete'); 
  Route::get('/posts', 'PostsController@index')->name('posts'); 
  Route::get('/post/index', 'PostsController@index')->name('post.index'); 
  Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');
  Route::post('/post/update/{id}', 'PostsController@update')->name('post.update');

});

Auth::routes();


