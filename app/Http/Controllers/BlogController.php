<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with(['paragraphs', 'images'])->get();
        return view('admin.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
           $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'author_name' => 'required|string|max:255',
            'preview_text' => 'required|string|max:255',
            'publication_date' => 'required|date',
            'paragraphs.*.title' => 'required|string',
            'paragraphs.*.content' => 'required|string',
            'tags' => 'required|string',
            'comments' => 'nullable|string',
            'cover_image' => 'required|image',
            'large_image' => 'nullable|image',
            'feature_image.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);
                }catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }

        if ($request->hasFile('cover_image')) {
            $coverImagePath = $request->file('cover_image')->store('blogs', 'public');
            $validated['cover_image'] = $coverImagePath;
        }

        if ($request->hasFile('large_image')) {
            $largeImagePath = $request->file('large_image')->store('blogs', 'public');
            $validated['large_image'] = $largeImagePath;
        }

        $blog=Blog::create($validated);

       // Handle multiple images
       if ($request->hasFile('feature_image')) {
        foreach ($request->file('feature_image') as $image) {
            $path = $image->store('blog_images', 'public');
            // Save to blog_images table
            $blog->images()->create([
                'image_path' => $path
            ]);
        }
       }

        // Save paragraphs
        foreach ($request->paragraphs as $p) {
        $blog->paragraphs()->create([
            'title' => $p['title'],
            'content' => $p['content'],
        ]);
       }

        return redirect()->route('admin')->with('success', 'Blog created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
