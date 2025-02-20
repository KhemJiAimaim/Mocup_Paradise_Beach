<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/pages/home/home');
});

Route::group(['prefix' => 'rooms'], function () {
    Route::get('/', function () {
        return view('/pages/room/room');
    })->name('rooms.index');
});

Route::get('/booking', function () {
    return view('/pages/booking/booking');
})->name('booking');

Route::group(['prefix' => 'spa_and_gym'], function () {
    Route::get('/', function () {
        return view('/pages/spa/spa');
    })->name('spa.index');
});



Route::get('/eat_and_drink', function () {
    return view('/pages/Eat_Drink/Eat_Drink');
})->name('eat_drink.index');


Route::group(['prefix' => 'contact'], function () {
    Route::get('/', function () {
        return view('/pages/contact/contact');
    })->name('contact.index');

    Route::get('/privacy', function () {
        return view('/pages/contact/privacy');
    })->name('contact.privacy');

    Route::get('/terms_conditions', function () {
        return view('/pages/contact/terms_conditions');
    })->name('contact.t_c');
});


Route::get('/gallery', function () {
    return view('/pages/gallery/gallery');
})->name('gallery.index');
