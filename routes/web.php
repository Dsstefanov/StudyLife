<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Auth;
Auth::routes();
Route::get('/', 'HomeController@index');
Route::resource('/events', 'EventController');
Route::get('contact', 'HomeController@contact');
Route::get('/about', 'HomeController@about');
Route::get('/activities', 'HomeController@activities');
Route::post('/', 'MailingController@newMemberNotification');
Route::post('/create-event', 'EventController@store');
Route::get('/admin', ['middleware' => ['auth', 'admin'], function() {
    return view('profile');
}]);
Route::get('members', 'HomeController@members');
Route::get('users', 'PagesController@users');
Route::delete('users/{id?}', 'PagesController@destroy')->name('users.delete');
Route::patch('users/{id}', 'PagesController@update')->name('users.update');
Route::any('{catchall}', function() {
    return redirect('/');
})->where('catchall', '.*');