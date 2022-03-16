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
            "judulheader" => "All Blog",
            "datadisplay" => Blog::latest()->first(),
            "datacategory" => Category::all(),
            "datablog" => Blog::latest()->get()
        ]);
    }

    public function searchData($data){
        return view("blog", [
            "judul" => "Blog Review",
            "judulheader" => "Blog = " . Blog::firstWhere("slug", $data)->title,
            "datadisplay" => Blog::firstWhere("slug", $data),
            "datacategory" => Category::all(),
            "datablog" => Blog::whereNotIn("id", [Blog::firstWhere("slug", $data)->id])->latest()->get()
        ]);
    }

    public function displayCategory($data){
        return view("blog", [
            "judul" => "Category",
            "judulheader" => "Category = " . Category::firstWhere("slug", $data)->name,
            "datacategory" => Category::all(),
            // "datadisplay" => Blog::firstWhere("slug", $data),
            "datablog" => Blog::where("category_id", Category::firstWhere("slug", $data)->id)->get()
        ]);
    }
}
