<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/', function () {
    return view('admin');
})->middleware(['auth:sanctum', 'rol'])->name('admin');

Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/register', function () {
    return view('auth/register');
})->name('register');


Route::get('admin', function () {
    return view('admin');
})->middleware(['auth:sanctum', 'rol'])->name('admin');

Route::get('especial', function () {
    return view('especial');
})->name('especial');

Route::middleware(['auth:sanctum', 'verified','rol'])->get('admin',[UserController::class, 'index'])->name('admin');

Route::get('profile/user', function () {
    return view('profile.show-admin');
})->name('profile.show-admin');