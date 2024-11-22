<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function() { return view('pages.about');})->name("about");

Route::get('/services', function() { return view('pages.services');})->name("services");

Route::get('/contacts', function() { return view('pages.contact');})->name("contacts");

Route::get('/transport-de-marchandises', function() { return view('pages.serviceSample');})->name("service-1");

