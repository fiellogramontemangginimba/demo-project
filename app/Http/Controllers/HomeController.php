<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Coffe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('products.index',['home' => Coffe::all()]);
    }
    public function about(){
        return view('products.about',['coffee' => Products::all()]);
    }
    public function products(){
        return view('products.products',['coffee' => Products::all()]);
    }
    public function store(){
        return view('products.store',['coffee' => Products::all()]);
    }

}
