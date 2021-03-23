<?php
Route::get('/', function () {
    return view('contacts/create');
});

Route::resource('contacts', 'App\Http\Controllers\ContactController');
