<?php

use Illuminate\Support\Facades\Route;
//This is Client Router Part
Route::get('/', function () {
    return view('client.home');
})->name('home');
Route::get('/about', function () {
    return view('client.about');
})->name('about');
Route::get('/team', function () {
    return view('client.team');
})->name('team');
Route::get('/testimonials', function () {
    return view('client.testimonials');
})->name('testimonials');
Route::get('/services', function () {
    return view('client.services');
})->name('services');
Route::get('/portfolio', function () {
    return view('client.portfolio');
})->name('portfolio');
Route::get('/pricing', function () {
    return view('client.pricing');
})->name('pricing');
Route::get('/blog', function () {
    return view('client.blog');
})->name('blog');
Route::get('/contact', function () {
    return view('client.contact');
})->name('contact');
//End Router Part

//This is Admin Router Part
Route::get('/dashboard', function () {
    return view('admin.home');
})->name('dashboard');

//End Admin Part