@extends('admin.admintemplate')

@section('content')
    <div class="header-title">
        <h1>List of Blog</h1>
        <a href="{{route('blogsdata.create')}}"> create blog</a>
    </div>

    <div class="data">
        <h3>Total blog published: <span>{{ $total}}</span></h3>
    </div>

    <table class="custom-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Author</th>
                <th>Date</th>
                <th>Tags</th>
                <th>Preview Text</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->subtitle }}</td>
                    <td>{{ $blog->author_name }}</td>
                    <td>{{ $blog->publication_date }}</td>
                    <td>{{ $blog->tags }}</td>
                    <td>{{ $blog->preview_text }}</td>
                    <td class="actions">
                        {{-- <a href="{{ route('blogsdata.show', $blog->id) }}">View</a> --}}
                        <a href="{{ route('blogsdata.edit', $blog->id) }}">Edit</a>
                        <form action="{{ route('blogsdata.destroy', $blog->id) }}" method="POST" class="deleteform">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')"> Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        {{ $blogs->links('pagination::default') }}
    </div>

@endsection
