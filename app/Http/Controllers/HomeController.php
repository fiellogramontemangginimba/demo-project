<?php

namespace App\Http\Controllers;

use App\Models\Index;
use App\Models\About;
use App\Models\Property;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('partial.index',['estate1' => Index::all()]);
    }
    public function about(){
        return view('partial.about',['estate2' => About::all()]);
    }
    public function property(){
        return view('partial.property',['estate3' => Property::all()]);
    }
    public function blog(){
        return view('partial.blog',['estate4' => Blog::all()]);
    }
    public function contact(){
        return view('partial.contact',['estate5' => Contact::all()]);
    }

}
