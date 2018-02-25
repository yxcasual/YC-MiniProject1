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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact','PagesController@store')->name('contact.store');
Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');
   // dd(request());
    //$data = request()->all();
    //dd($data);
   // echo "Email: " .  $data['email'] . '<br>';
   // echo "Subject: " . $data['subject'] . '<br>';
   // echo "Body: " . $data['body'];
Route::get('/logout', 'PagesController@logout')->name('logout');
Route::get('/signin', 'PagesController@signin')->name('signin');
Route::post('/signin','PagesController@redir')->name('signin.redir');
Route::get('/signup', 'PagesController@signup')->name('signup');
Route::post('/signup','PagesController@store')->name('signup.store');
    //$data1 = request()->all();
    //echo "Name :" . $data1['name'] . '<br>';
    //echo "Email: " .  $data1['email'] ;

Route::get('/viewmessages', 'PagesController@viewmessages')->name('viewmessages');
Route::get('/bootcard', function () {
    return view('pages.bootcard');
});

