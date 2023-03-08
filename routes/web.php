<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\AdminController;


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

Route::get('/',[HomeController::class, 'index'])->name('partial.index');
Route::get('/about',[HomeController::class, 'about'])->name('partial.about');
Route::get('/property',[HomeController::class, 'property'])->name('partial.property');
Route::get('/blog',[HomeController::class, 'blog'])->name('partial.blog');
Route::get('/contact',[HomeController::class, 'contact'])->name('partial.contact');

Route::resource('/admin', AdminController::class);