<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('public.home'))->name('home');
Route::get('/services', fn () => view('public.services'))->name('services');
Route::get('/packages', fn () => view('public.packages'))->name('packages');
Route::get('/about', fn () => view('public.about'))->name('about');
Route::get('/contact', fn () => view('public.contact'))->name('contact');
