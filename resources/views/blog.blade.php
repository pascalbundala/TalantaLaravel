<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project-talanta trust</title>
    <link rel="icon" href="{{asset('images/Talanta Trust official logo-11.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav-constant.css')}}">
    <link rel="stylesheet" href="{{asset('css/copyright.css')}}">
    <link rel="stylesheet" href="{{asset('css/links-to-pages.css')}}">
    <link rel="stylesheet" href="{{asset('css/project.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/blog.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...your-integrity-code..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        .empty{
            width: 100%;
            height: 50vh;
            background-color: #fff;
            background-image: url('images/FooterImages/TalantaTrustProject2.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: block;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .empty img{
            height: auto;
            width: 100%
            max-width:100%
        }

        .custom-pagination {
        display: flex;
        justify-content: center;
        gap: 8px;
        list-style: none;
        padding: 20px 0;
        flex-wrap: wrap;
        }

        .custom-pagination li {
        display: inline-block;
        }

        .custom-pagination a,
        .custom-pagination span {
        /* padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 4px; */
        color: #333;
        text-decoration: none;
        transition: background 0.3s;
        }

        .custom-pagination a:hover {
        background-color: #eee;
        }

        .custom-pagination .active span {
        color: #F15B27;
        font-weight: bold;
        }

        .custom-pagination .disabled span {
        color: #aaa;
        /* background-color: #f9f9f9;
        border-color: #ddd; */
        cursor: not-allowed;
        }

    </style>
</head>
<body>
    @include('header')
    <div class="empty">
    </div>
    <section class="project-title">
        <h1>News & Stories</h1>
    </section>

    <section class="project-title greens">
        <h1>Welcome to the Talanta Trust updates</h1>
    </section>

    <h1 class="start"><img src="{{asset('images/TALANTA-TRUST-BLOGO-ARROW.svg')}}" alt="" srcset=""> Blog</h1>

    <section class="blog-container">
        @foreach ($blogs as $blog )

         <div class="blog-post">
            <img  src="{{ asset(''. $blog->cover_image) }}" alt="post1">
            <div class="post-description">
                <h2 class="title">{{$blog->title}}</h2>
                <h2 class="subtitle">{{$blog->subtitle}}</h2>
                <h2 class="author">{{$blog->author_name}}</h2>
                <p>{{$blog->preview_text}}</p>
                <a href="{{route('blog-detail',$blog->id)}}" class="read-more">Read More</a>
            </div>
        </div>

        @endforeach

        <div class="pagination">
            {{ $blogs->links('pagination::default') }}
        </div>
    </section>

    <section class="logo-text">
            <p>
                Welcome to the storytelling space of Talanta Trust, where real impact meets real voices. Here, we share meaningful moments, updates, and reflections from the field. From community voices and project updates to inspiring journeys and powerful visuals, this is where you will find the stories that shape our mission. Whether it’s the success of a grassroots initiative or the evolution of a new campaign, our stories celebrate changemakers making a difference every day.

                Explore by tag: Our Stories, authentic narratives that reflect real journeys; News and Updates, the latest milestones, launches, and achievements; Community Voices, perspectives from the people we serve; Project Updates, progress, lessons, and behind-the-scenes moments.
            </p>
    </section>

    @include('footer')
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
