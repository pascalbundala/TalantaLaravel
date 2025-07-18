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
        @foreach ($blogs->paragraphs as $paragraph)
            <div class="paragraph">
                <h1>{{ $loop->iteration }}</h1>
                <div class="inside">
                    <label>Title</label>
                    <input type="text" name="paragraphs[{{ $loop->index }}][title]" value="{{ $paragraph->title }}" required>
                    <label>Content</label>
                    <textarea name="paragraphs[{{ $loop->index }}][content]" rows="10" required>{{ $paragraph->content }}</textarea>
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
        </div>

        <div class="form-group">
            <label for="">Large Image</label>
            <input type="file"  name="large_image" >
        </div>

        <div class="form-group">
            <label for="">Featured Image</label>
            <input type="file"  name="feature_image[]" multiple >
        </div>

        <button type="submit" class="btn-save">Submit</button>

    </form>

@endsection
