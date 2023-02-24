<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use Symfony\Component\HttpFoundation\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

//Routing and Response
// Route::get('/response-sample', function () {
//     return response('<h1>This is sample of response</h1>');
// });

//wildcard
// Route::get('/sample/{id}', function ($id) {
//     return response('Post '.$id);
// });

//wildcard w/ constraint
// Route::get('/sample/{id}', function ($id) {
//     return response('Post '.$id);
// })->where('id','[0-9]+');

//Request & Query Parameters
// Route::get('/search', function (Request $request) {
//     // ddd($request);
//     // dd($request);
//     return ($request->name.' '.$request->pet);
// });

//Basic View and Passing of Data
// Route::get('/products', function () {
//     return view('index',[
//         'title'     =>  'Products',
//         'heading'   =>  'Coffee',
//         'coffee'    =>  [[
//             'id'        =>  '1',
//             'flavor'    =>  'Hazelnut',
//             'desc'      =>  'We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having.'
//         ],
//         [
//             'id'        =>  '2',
//             'flavor'    =>  'Iced Americano',
//             'desc'      =>  'We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having.'
//         ]
//     ]]);
// });

Route::get('/',[HomeController::class, 'index'])->name('products.index');
Route::get('/about',[HomeController::class, 'about'])->name('products.about');
Route::get('/products',[HomeController::class, 'products'])->name('products.products');
Route::get('/store',[HomeController::class, 'store'])->name('products.store');