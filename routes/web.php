<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, 'index'])->name("home");
Route::get("/about", [AboutController::class, 'index'])->name("about");
Route::get("/contact", [ContactController::class, 'index'])->name("contact");
Route::get("/blog", [BlogController::class, 'index'])->name("blog");
Route::get("/blog/{data}", [BlogController::class, 'searchData'])->name("blog.data");
Route::get("/category/{data}", [BlogController::class, 'displayCategory'])->name("category.data");
