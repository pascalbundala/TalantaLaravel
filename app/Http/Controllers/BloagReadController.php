<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BloagReadController extends Controller
{
 public function index()
    {
        $blogs = Blog::latest()->paginate(1); // or paginate()
        return view('blog', compact('blogs'));
    }

public function show(string $id)
    {

    $blog = Blog::with(['paragraphs', 'images'])->find($id);
    // Convert tags string to array
    $tags = explode(',', $blog->tags);

    // Related posts: simple LIKE search
    $relatedblogs = Blog::where('id', '!=', $blog->id)
        ->where(function ($query) use ($tags) {
            foreach ($tags as $tag) {
                $query->orWhere('tags', 'LIKE', '%' . trim($tag) . '%');
            }
        })
        ->latest()
        ->take(4)
        ->get();

        return view('blog-detail', compact('blog','relatedblogs'));
    }
}
