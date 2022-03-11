<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blogs";
    protected $fillable = [
        'title',
        'slug',
        'content_cover',
        'content',
        'author',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
