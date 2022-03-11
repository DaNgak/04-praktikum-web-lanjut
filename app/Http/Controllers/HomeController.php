<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("index", [
            "judul" => "Home",
            "datacategory" => Category::all(),
            "datablog" => Blog::latest()->limit(4)->get(),
        ]);
    }
}
