<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

// middleware(['auth'])->
Route::prefix('admin')->group(function () {
  Route::get('/dashboard', [Dashboard\DashboardController::class, 'dashboard'])->name('dashboard');
  Route::resource('permissions', Dashboard\PermissionController::class)->except('show');
  Route::resource('roles', Dashboard\RoleController::class);
  Route::resource('users', Dashboard\UserController::class);
  Route::get('users/permissions/{user}/edit', [Dashboard\UserController::class, 'editPermission'])->name('users.permissions.edit');
  Route::post('users/permissions/{user}/update', [Dashboard\UserController::class, 'updatePermission'])->name('users.permissions.update');
});

// Route::get('/dashboard', function () {
//   return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
