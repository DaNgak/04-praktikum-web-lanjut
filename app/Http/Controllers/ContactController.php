<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view("contact", [
            "judul" => "Contact",
            "datacategory" => Category::all(),
            "datablog" => Blog::latest()->limit(3)->get()
        ]);
    }
}
