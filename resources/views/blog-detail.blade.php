<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project-talanta trust</title>
    <link rel="icon" href="{{asset('images/Talanta Trust official logo-11.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/privacy-cookie.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav-constant.css')}}">
    <link rel="stylesheet" href="{{asset('css/copyright.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog-detail.css')}}"/>
     <link rel="stylesheet" href="{{asset('css/blog.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...your-integrity-code..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    @include('header')
    <div class="main-content">
        <div class="text-with-image">
            <div class="titles">
                <span></span>
                <div class="holder-t">
                    <h2 class="title">{{$blog->title}}</h2>
                    <h2 class="subtitle">{{$blog->subtitle}}</h2>
                </div>
            </div>

            <img src="{{ asset('storage/' . $blog->large_image) }}"  alt="" class="large-image">

            @foreach ( $blog->paragraphs as $paragraph )
                <div class="blog-word">
                    <h2>{{$paragraph->title}}</h2>
                    <p>{{$paragraph->content}}</p>
                </div>
            @endforeach

            <div class="images-feature">
               @foreach ($blog->images as $image )
                 <img src="{{asset('storage/'.$image->image_path)}}" alt="">
               @endforeach
            </div>

        </div>

        <div class="content-cta">
            <button class="cta-like">like</button>
            <button class="cta-share">share</button>
            <button class="cta-subscribe">subscribe</button>
        </div>

        <div class="content-related-title">
           <h2>Related Posts</h2>
        </div>

        <div class="content-related">
            @forelse($relatedblogs as $related)
                <div class="blog-card">
                    <img src="{{ asset('storage/' . $blog->cover_image)}}" alt="Post1">
                    <div class="text-clmn">
                        <h2 class="title">{{ $related->title }}</h2>
                        <h2 class="subtitle">{{ $related->subtitle }}</h2>
                        <a href="{{route('blog-detail',$blog->id)}}" class="read-more">Read More</a>
                    </div>
                </div>

              @empty
                <h3>No related posts found!!</h3>
            @endforelse

        </div>
    </div>

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
