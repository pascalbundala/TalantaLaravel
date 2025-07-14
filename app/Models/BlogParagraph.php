<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogParagraph extends Model
{
    use HasFactory;

    protected $fillable = ['blog_id', 'title', 'content', 'order'];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
