<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery-TalantTrust</title>
    <link rel="icon" href="{{asset('images/Talanta Trust official logo-11.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">

    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/links-to-pages.css')}}">
    <link rel="stylesheet" href="{{asset('css/copyright.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...your-integrity-code..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="{{asset('js/script.js')}}" defer></script>
</head>
<body>

    @include('header')
    <section class="container">

        <div class="title">
            <h1>Gallery</h1>
            <div class="gallery_links">
                <div class="link_img">
                    <a href="">originals</a>
                    <img src="{{asset('images/down-arrow.svg')}}" alt="" srcset="">
                </div>

                <div class="link_img">
                    <a href="">stories</a>
                    <img src="{{asset('images/down-arrow.svg')}}" alt="" srcset="">
                </div>
            </div>
        </div>

        <div class="content">
            <div class="small-title"><h2>TalantTrust originals</h2></div>
            <div class="media">
                <div class="grid-item videos">
                    <img  src="{{asset('images/madogo-wanaoga.jpg')}}" alt="" srcset="">
                </div>
                <div class="grid-item videos">
                    <img  src="{{asset('images/masaai.jpg')}}" alt="" srcset="">
                </div>
                <div class="grid-item videos">
                    <img  src="{{asset('images/ngombe.jpg')}}" alt="" srcset="">
                </div>
                <div class="grid-item videos">
                    <img src="{{asset('images/indian_small_image.jpg')}}" alt="" srcset="">
                </div>

                <div class="grid-item videos">
                    <img  src="{{asset('images/ngombe.jpg')}}" alt="" srcset="">
                </div>
                <div class="grid-item videos">
                    <img src="{{asset('images/indian_small_image.jpg')}}" alt="" srcset="">
                </div>
            </div>
            <button id="show-more-btn">Load More</button>
        </div>

        <div class="content content-images">
            <div class="small-title"><h2>TalantTrust stories</h2>
                <div class="filters">
                    <button class="filter-btn active-filter" data-category="all">All</button>
                    <button class="filter-btn" data-category="nature">Nature</button>
                    <button class="filter-btn" data-category="animals">Animals</button>
                    <button class="filter-btn" data-category="cities">Cities</button>
               </div>
           </div>

            <div class="media content-images">
                <div class="grid-item images image-wrapper">
                    <img  src="{{asset('images/madogo-wanaoga.jpg')}}" data-category="nature" >
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="{{asset('images/madogo-wanaoga.jpg')}}"  data-category="nature" >
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="{{asset('images/madogo-wanaoga.jpg')}}" data-category="animals">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="{{asset('images/masaai.jpg')}}"  data-category="animals">
                </div>
                <div class="grid-item images image-wrapper">
                    <img  src="{{asset('images/ngombe.jpg')}}" data-category="cities">
                </div>
                <div class="grid-item images image-wrapper">
                    <img src="{{asset('images/indian_small_image.jpg')}}" data-category="cities">
                </div>
            </div>
            <button id="show-more-btn-images">Load More</button>
        </div>

    </section>

    <section class="links-to-pages">
        <div class="image-with-links">
            <div class="divs">
                <div class="overlay">
                <a href="{{route('about-us')}}">About us</a>
                <p>Connect with passion that moves us and makes us thrive</p>
            </div>
        </div>
            <div class="divs">
                <div class="overlay">
                    <a href="{{route('work-with-us')}}">Connect with us</a>
                    <p>If your interested with our services,let find a way to get connected </p>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <script>
            document.addEventListener('DOMContentLoaded', () => {
                const showMoreBtnVideos = document.getElementById('show-more-btn');
                const showMoreBtnImages = document.getElementById('show-more-btn-images');
                const videos = document.querySelectorAll('.videos');
                const images = document.querySelectorAll('.images');

                let vcurrentIndex = 0;
                let icurrentIndex = 0;
                const perClick = 4;

                // Hide all initially
                videos.forEach(video => video.style.display = 'none');
                images.forEach(image => image.style.display = 'none');

                // Show initial batch
                showNextBatch(videos, vcurrentIndex, perClick);
                showNextBatch(images, icurrentIndex, perClick);

                vcurrentIndex += perClick;
                icurrentIndex += perClick;

                showMoreBtnVideos.addEventListener('click', () => {
                    showNextBatch(videos, vcurrentIndex, perClick);
                    vcurrentIndex += perClick;
                    if (vcurrentIndex >= videos.length) {
                        showMoreBtnVideos.style.display = 'none';
                    }
                });

                showMoreBtnImages.addEventListener('click', () => {
                    showNextBatch(images, icurrentIndex, perClick);
                    icurrentIndex += perClick;
                    if (icurrentIndex >= images.length) {
                        showMoreBtnImages.style.display = 'none';
                    }
                });

                function showNextBatch(elements, startIndex, count) {
                    for (let i = startIndex; i < startIndex + count && i < elements.length; i++) {
                        elements[i].style.display = 'flex';
                    }
                }
            });
    </script>

    <script>
        const filterButtons = document.querySelectorAll('.filter-btn');
            const imagesfilter = document.querySelectorAll('.image-wrapper');

            filterButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                const selectedCategory = event.currentTarget.getAttribute('data-category');

                filterButtons.forEach(btn => btn.classList.remove('active-filter'));
                this.classList.add('active-filter');

                imagesfilter.forEach(image => {
                const img = image.querySelector('img');
                const imageCategory = img.getAttribute('data-category');
                if (selectedCategory === 'all' || selectedCategory === imageCategory) {
                    image.style.display = 'flex';
                } else {
                    image.style.display = 'none';
                }
                });
            });
            });

    </script>

</body>
</html>
