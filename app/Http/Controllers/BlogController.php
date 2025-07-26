<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with(['paragraphs', 'images'])->latest()->paginate();
        $total = $blogs->count();
        return view('admin.blog.index', compact('blogs', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
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
            'preview_text' => 'required|string',
            'publication_date' => 'required|date',
            'paragraphs.*.title' => 'required|string',
            'paragraphs.*.content' => 'required|string',
            'tags' => 'required|string',
            'comments' => 'nullable|string',
            'cover_image' => 'required|image|mimes:jpg,jpeg,png,webp,gif,bmp,svg|max:5120',
            'large_image' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif,bmp,svg|max:5120',
            'feature_image.*' => 'nullable|file|mimes:jpg,jpeg,png,webp,gif,bmp,svg|max:5120',
            ]);
                }catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }

            $destinationPath = public_path('images/blogs');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

        if ($request->hasFile('cover_image')) {
            $filename = time() . '_' . $request->file('cover_image')->getClientOriginalName();
            $request->file('cover_image')->move($destinationPath, $filename);
            $storedImagePath = 'images/blogs/' . $filename;
            $validated['cover_image'] = $storedImagePath;
        }

        if ($request->hasFile('large_image')) {
            $filename = time() . '_' . $request->file('large_image')->getClientOriginalName();
            $request->file('large_image')->move($destinationPath, $filename);
            $storedImagePath = 'images/blogs/' . $filename;
            $validated['large_image'] = $storedImagePath;
        }

        $blog=Blog::create($validated);

       // Handle multiple images
       if ($request->hasFile('feature_image')) {
        foreach ($request->file('feature_image') as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $filename);
            $path = 'images/blogs/' . $filename;
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

        return redirect()->route('blogsdata.index')->with('success', 'Blog created!');
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

        $blogs = Blog::with(['paragraphs', 'images'])->findOrFail($id);
        return view('admin.blog.edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          try {
           $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'author_name' => 'required|string|max:255',
            'preview_text' => 'required|string',
            'publication_date' => 'required|date',
            'paragraphs.*.title' => 'required|string',
            'paragraphs.*.content' => 'required|string',
            'tags' => 'required|string',
            'comments' => 'nullable|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif,bmp,svg|max:5120',
            'large_image' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif,bmp,svg|max:5120',
            'feature_image.*' => 'nullable|file|mimes:jpg,jpeg,png,webp,gif,bmp,svg|max:5120',
            ]);
                }catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }
          $blog = Blog::findOrFail($id);
            $destinationPath = public_path('images/blogs');
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

        if ($request->hasFile('cover_image')) {

            // Delete old image
            $oldImagePath = public_path('' . $blog->cover_image);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }

            $filename = time() . '_' . $request->file('cover_image')->getClientOriginalName();
            $request->file('cover_image')->move($destinationPath, $filename);
            $storedImagePath = 'images/blogs/' . $filename;
            $validated['cover_image'] = $storedImagePath;
        }

        if ($request->hasFile('large_image')) {

            $oldImagePath = public_path('' . $blog->large_image);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }

            $filename = time() . '_' . $request->file('large_image')->getClientOriginalName();
            $request->file('large_image')->move($destinationPath, $filename);
            $storedImagePath = 'images/blogs/' . $filename;
            $validated['large_image'] = $storedImagePath;
        }


        $blog->update($validated);

       // Handle multiple images
       if ($request->hasFile('feature_image')) {

        // Delete old images
        foreach ($blog->images as $image) {
            $oldImagePath = public_path('' . $image->image_path);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
        }

        foreach ($request->file('feature_image') as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $filename);
            $path = 'images/blogs/' . $filename;
            $blog->images()->update([
                'image_path' => $path
            ]);
        }
       }

            foreach ($request->paragraphs as $p) {
                // Make sure 'id', 'title', and 'content' are set
                if (isset($p['id'], $p['title'], $p['content'])) {
                    $paragraph = $blog->paragraphs()->where('id', $p['id'])->first();

                    if ($paragraph) {
                        $paragraph->title = $p['title'];
                        $paragraph->content = $p['content'];
                        $paragraph->save();
                    }
                }
            }

        return redirect()->route('blogsdata.index')->with('success', 'Blog update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogsdata.index')
            ->with('success', 'Blog deleted successfully!');
    }
}
