<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view("blog", [
            "judul" => "Blog",
            "judulpage" => "All Blog",
            "datadisplay" => Blog::first(),
            "datacategory" => Category::all(),
            "datablog" => Blog::all()
        ]);
    }
}
