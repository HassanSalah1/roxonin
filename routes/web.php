<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers;

require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';

Route::get('/', function () {
  return view('website.home');
})->name('home');
