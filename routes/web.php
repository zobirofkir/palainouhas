<?php

use Illuminate\Support\Facades\Route;


/**
 * Route Get Home Screen
 */
Route::get('/', function () { return view('welcome'); });


/**
 * Route Get About Screen
 */
Route::get('/abouts', function () { return view('resources.pages.about'); });

/**
 * Route Get Single Blog Screen
 */
Route::get('/blog-single', function(){return view('resources.pages.blog-single');});

/**
 * Route Get Blog Screen
 */
Route::get('/blogs', function(){return view('resources.pages.blog');});

/**
 * Route Get Contact Screen
 */
Route::get('/contacts', function(){return view('resources.pages.contact');});

/**
 * Route Get Gallery Screen
 */
Route::get('/gallerys', function(){return view('resources.pages.gallery');});

/**
 * Route Get Resto Bar Screen
 */
Route::get('/resto-bar', function(){return view('resources.pages.resto-bar');});

/**
 * Route Get Room Single Screen
 */
Route::get('/room-single', function(){return view('resources.pages.room-single');});

/**
 * Route Get Rooms Screen
 */
Route::get('/rooms', function(){return view('resources.pages.rooms');});

/**
 * Route Get Login Screen
 */
Route::get('/login', function(){return view('resources.pages.auth.login');});