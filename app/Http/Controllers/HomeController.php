<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Coffe;
use App\Models\Call;
use App\Models\Routine;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('products.index',['home' => Coffe::all()]);
    }
    public function about(){
        return view('products.about',['about' => Routine::all()]);
    }
    public function products(){
        return view('products.products',['coffee' => Products::all()]);
    }
    public function store(){
        return view('products.store',['store' => Call::all()]);
    }

}
