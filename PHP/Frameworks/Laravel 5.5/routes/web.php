<?php


Route::get('/','HomeController@index')->name('/');
Route::get('home', 'HomeController@index')->name('home');
Route::get('activate-account/{token}', 'HomeController@activate_account')->name('activate-account');
Route::get('details/{slug}', 'HomeController@details')->name('details');


Route::namespace('Auth')->group(function () {
    Route::post('logout', 'LoginController@getLogout')->name('logout');

    Route::middleware(['guest'])->group(function () {
        Route::get('register','RegisterController@register')->name('register');
        Route::post('register','RegisterController@create')->name('register');
        Route::get('login','LoginController@login')->name('login');
        Route::post('login','LoginController@dologin')->name('login');
    });
});



//--------Route for auth user---------------
Route::middleware(['user-auth'])->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');


    Route::get('profile','ProfileController@getupdate')->name('profile');
    Route::post('profile/update','ProfileController@update')->name('profile/update');

    Route::get('add-event-interest','ProfileController@getAddEventInterest')->name('add-event-interest');
    Route::post('add-event-interest','ProfileController@postAddEventInterest')->name('add-event-interest');

    Route::get('my-event-list','ProfileController@event_list')->name('my-event-list');
    Route::get('liked-event-list','ProfileController@liked_event_list')->name('liked-event-list');

    Route::get('add-event','ProfileController@getAddEvent')->name('add-event');
    Route::post('add-event','ProfileController@postAddEvent')->name('add-event');

    Route::get('edit-event/{id}','ProfileController@getEditEvent')->name('edit-event');
    Route::post('edit-event/{id}','ProfileController@postEditEvent')->name('edit-event');

    Route::get('get-event-type','ProfileController@getEventType')->name('get-event-type');
    Route::get('add-to-profile/{id}','ProfileController@addToProfile')->name('add-to-profile');
});





