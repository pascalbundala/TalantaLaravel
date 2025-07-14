<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
   use HasFactory;

    protected $fillable = ['title', 'subtitle', 'cover_image', 'author_name', 'publication_date', 'preview_text', 'tags', 'comments', 'large_image'];

    public function paragraphs()
    {
        return $this->hasMany(BlogParagraph::class)->orderBy('order');
    }

    public function images()
    {
        return $this->hasMany(BlogImage::class);
    }
}
