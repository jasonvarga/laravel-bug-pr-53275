<?php

use App\ThingInterface;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('things/{thing}', function (ThingInterface $thing) {
    dump($thing);
});
