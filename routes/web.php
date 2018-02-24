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
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', function () {


   // dd(request());

    $data = request()->all();

    //dd($data);

    echo "Email: " .  $data['email'] . '<br>';
    echo "Subject: " . $data['subject'] . '<br>';
    echo "Body: " . $data['body'];

});
Route::get('/logout', function () {
    return view('pages.logout');
});
Route::get('/signin', function () {
    return view('pages.signin');
});
Route::get('/signup', function () {
    return view('pages.signup');
});
Route::post('/contact', function () {

    $data1 = request()->all();
    echo "Name :" . $data1['name'] . '<br>';
    echo "Email: " .  $data1['email'] ;


});

Route::get('/viewmessages', function () {
    return view('pages.viewmessages');
});

