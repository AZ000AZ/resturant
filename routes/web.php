<?php

use Illuminate\Support\Facades\Route;

Route::get('/homePage', function () {
    return view('homePage');
});
