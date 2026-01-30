<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::livewire('/', 'pages::home');
Route::livewire('/counter', 'pages::counter.index');

/**PRODUCT */
Route::livewire('/product/choose_category', 'pages::product.choose_category');