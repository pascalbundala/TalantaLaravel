@extends('admin.admintemplate')

@section('content')
    <div class="header-title">
        <h1>Update Blog</h1>
        <a href="{{route('blogsdata.index')}}">back</a>
    </div>
    <form action="{{route('blogsdata.update',$blogs->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Blog title</label>
            <input type="text"  name="title"  required value="{{ $blogs->title }}">
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" id="subtitle"  name="subtitle" value="{{$blogs->subtitle}}"  required>
        </div>
        <div class="form-group">
            <label for="author">Author Name</label>
            <input type="text" id="author"  name="author_name"  required value="{{ $blogs->author_name }}">
        </div>
        <div class="form-group">
            <label for="date">Date of Publication</label>
            <input type="date" id="date"  name="publication_date"  required value="{{ $blogs->publication_date }}">
        </div>

        <div class="form-group">
            <label for="preview">Preview Text:</label>
            <textarea rows="5" cols="40"  id="preview" name="preview_text">{{$blogs->preview_text}}</textarea>
        </div>

        <h3>Blog Content</h3>

        @foreach($blogs->paragraphs as $index => $paragraph)
            <div class="paragraph">
                <div class="p-action">
                    <h1>Paragraph {{ $loop->iteration }}</h1>
                    <button class="remove-button" type="button" onclick="removeParagraph(this)"><i class="fa-solid fa-trash"></i></button>
                </div>

                <div class="inside">
                        <input type="hidden" name="paragraphs[{{ $index }}][id]" value="{{ $paragraph->id }}">
                        <label>Title</label>
                        <input type="text" name="paragraphs[{{ $index }}][title]" value="{{ old("paragraphs.$index.title", $paragraph->title) }}" required>
                        <label>Content</label>
                        <textarea name="paragraphs[{{ $index }}][content]" rows="10" required>{{ old("paragraphs.$index.content", $paragraph->content) }}</textarea>
                </div>
            </div>
        @endforeach


        <div class="form-group">
            <label for="tags">Tags</label>
            <select name="tags" id="tags">
                <option style="font-weight: 900;color:black" selected value="{{$blogs->tags}}">{{$blogs->tags}}</option>
                <option value="Our stories">Our stories</option>
                <option value="News & updates">News & updates</option>
                <option value="Community voices">Community voices</option>
                <option value="Project highlights">Project highlights</option>
            </select>
        </div>

        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea rows="5" cols="40" id="comment" name="comments"></textarea>
        </div>

        <div class="form-group">
            <label for="">Cover Image</label>
            <input type="file"  name="cover_image" >
            <img src="{{asset(''.$blogs->cover_image)}}" alt="">
        </div>

        <div class="form-group">
            <label for="">Large Image</label>
            <input type="file"  name="large_image" >
            <img src="{{asset(''.$blogs->large_image)}}" alt="">
        </div>

        <div class="form-group">
            <label for="">Featured Image</label>
            <input type="file"  name="feature_image[]" multiple >
            @foreach ($blogs->images as $image )
                <img src="{{asset(''.$image->image_path)}}" alt="">
            @endforeach
        </div>

        <button type="submit" class="btn-save">Submit</button>

    </form>

@endsection
