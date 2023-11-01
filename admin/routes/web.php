<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TeachersController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'HomeIndex']);

Route::get('/visitor', [VisitorController::class, 'VisitorIndex'])->name('visitor');

//Service list..................
Route::get('/services', [ServiceController::class, 'Index'])->name('services.view');
Route::get('/services/add', [ServiceController::class, 'Add'])->name('services.add');
Route::post('/services/store', [ServiceController::class, 'Store'])->name('services.store');
Route::get('/services/edit/{id}', [ServiceController::class, 'Edit'])->name('services.edit');
Route::post('/services/update/{id}', [ServiceController::class, 'Update'])->name('services.update');
Route::get('/services/delete/{id}', [ServiceController::class, 'Delete'])->name('services.delete');

//Gallery.......................
Route::get('/gallery', [GalleryController::class, 'Index'])->name('gallery.view');
Route::get('/gallery/add', [GalleryController::class, 'Add'])->name('gallery.add');
Route::post('/gallery/store', [GalleryController::class, 'Store'])->name('gallery.store');
Route::get('/gallery/edit/{id}', [GalleryController::class, 'Edit'])->name('gallery.edit');
Route::post('/gallery/update/{id}', [GalleryController::class, 'Update'])->name('gallery.update');
Route::get('/gallery/delete/{id}', [GalleryController::class, 'Delete'])->name('gallery.delete');

//Teachers List.................
Route::get('/teachers', [TeachersController::class, 'Index'])->name('teachers.view');
Route::get('/teachers/add', [TeachersController::class, 'Add'])->name('teachers.add');
Route::post('/teachers/store', [TeachersController::class, 'Store'])->name('teachers.store');
Route::get('/teachers/edit/{id}', [TeachersController::class, 'Edit'])->name('teachers.edit');
Route::post('/teachers/update/{id}', [TeachersController::class, 'Update'])->name('teachers.update');
Route::get('/teachers/delete/{id}', [TeachersController::class, 'Delete'])->name('teachers.delete');


