<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontpage;
use App\Http\Controllers\ReleasesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('storage/{filename}', function ($filename) {
        $userid = session()->get('user')->id;
        return Storage::get($userid . '/' . $filename);
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' =>[
    'auth:sanctum',
    'verified' 
]], function () {
 
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/gallery', function () {
        return view('admin.gallery');
    })->name('gallery');

    Route::get('/albums', function () {
        return view('admin.albums');
    })->name('albums');
 
});
 
Route::get('/', Frontpage::class);

Route::get('releases/', [ReleasesController::class, 'index'])->name('home');

Route::get('releases/{album:slug}', [ReleasesController::class, 'show']);