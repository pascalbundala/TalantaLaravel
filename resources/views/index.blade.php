<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home-TalantTrust| this company deals with helping NGOs to thrive in digital World</title>
  <link rel="icon" href="{{asset('images/Talanta Trust official logo-11.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/nav.css')}}">
   <link rel="stylesheet" href="{{asset('css/nav-constant.css')}}">
  <link rel="stylesheet" href="{{asset('css/hero.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/second.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/secondextra.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/slider.css')}}" />
  <link rel="stylesheet" href="{{asset('css/join.css')}}" />
  <link rel="stylesheet" href="{{asset('css/footer.css')}}" />
  <link rel="stylesheet" href="{{asset('css/copyright.css')}}">
 {{-- font icons --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...your-integrity-code..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
  {{-- font  --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    @include('header')
    <section id="hero" class="hero">
        <video autoplay muted  playsinline preload="none" class="background-video" poster="{{asset('images/TalantaTrustHome.webp')}}" id="hero-video">
        <source src="{{asset('images/Talanta-Trust-Introduction.mp4')}}" type="video/mp4" />
        Your browser does not support the video tag.
        </video>

        {{-- <video autoplay muted playsinline preload="none" poster="preview.jpg" id="hero-video">
        <source src="video.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
        </video> --}}

        <div class="hero-content">
        <h1>
            <span>Everyone</span>
            <span>has a story!</span>
            <span>Talanta Trust</span>
        </h1>

        <img src="{{asset('images/svg/talanta-trust-vector-01.svg')}}" alt="">
        <a href="#" class="btn">Scroll to dive in</a>
        </div>
    </section>

    <section class="info-section">
        <h1>Empowering NGOs,Amplifying Impact and <span>Creating Awareness</span> </h1>
    </section>

    <section class="how-we-work">
        <div class="text-description">
            <h2>How We Work</h2>
            <p>Talanta Trust is committed to providing exceptional services to NGOs. We pride ourselves on our dedication to quality, creativity, and integrity. Our approach is client-focused, ensuring that every project we undertake aligns with your mission and contributes to your organization's success. We are passionate about making a difference and are driven by the belief that our work can help NGOs maximize their impact and create lasting change.</p>
        </div>
        <div class="image-container">
            <div class="card">
                <h3 class="txt-heading">01.Strategy</h3>
                <ul>
                    <li>We plan with you, not just for you.</li>
                    <li>We know the work you do and how to help.</li>
                    <li>Our ideas are fresh and practical.</li>
                </ul>
            </div>

            <div class="card">
                <h3 class="txt-heading">02.Design</h3>
                <ul>
                    <li>We create designs that speak for you.</li>
                    <li>From your logo to your website,</li>
                    <li>we make sure your message stands out.</li>
                </ul>
            </div>

            <div class="card">
                <h3 class="txt-heading"> 03.Development</h3>
                <ul>
                    <li>We turn plans into real work.</li>
                    <li>Websites, videos, print you name it.</li>
                    <li>We use smart tools and know-how.</li>
                </ul>

            </div>

            <div class="card">
                <h3 class="txt-heading">04.Quality Check</h3>
                <ul>
                    <li>We check, test, and polish.</li>
                    <li>Every word, every image, every step.</li>
                    <li>We make sure it's all ready to shine.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="multi-slider">
        <div class="slider-track" id="sliderTrack">

            <img src="{{asset('images/home-gallery/Talanta-trust-culture1.webp')}}"  alt="Talanta Trust Image culture">
            <img src="{{asset('images/home-gallery/Talanta-trust-nature4.webp')}}"  alt="Talanta Trust Image nature ">
            <img src="{{asset('images/home-gallery/Talanta-trust-people9.webp')}}"  alt="Talanta Trust Image people ">
            <img src="{{asset('images/home-gallery/Talanta-trust-wildlife12.webp')}}"  alt="Talanta Trust Image wildlife">
            <img src="{{asset('images/home-gallery/Talanta-trust-nature5.webp')}}" alt="Talanta Trust Image 14">
            <img src="{{asset('images/home-gallery/Talanta-trust-people10.webp')}}"  alt="Talanta Trust Image 4">
            <img src="{{asset('images/home-gallery/Talanta-trust-wildlife13.webp')}}" alt="Talanta Trust Image 16">
            <img src="{{asset('images/home-gallery/Talanta-trust-culture3.webp')}}"  alt="Talanta Trust Image 7">
            <img src="{{asset('images/home-gallery/Talanta-trust-nature6.webp')}}" alt="Talanta Trust Image 17">
            <img src="{{asset('images/home-gallery/Talanta-trust-people11.webp')}}"  alt="Talanta Trust Image 8">
            <img src="{{asset('images/home-gallery/Talanta-trust-wildlife14.webp')}}" alt="Talanta Trust Image 18">
            <img src="{{asset('images/home-gallery/Talanta-trust-nature7.webp')}}"  alt="Talanta Trust Image 9">
            <img src="{{asset('images/home-gallery/Talanta-trust-wildlife15.webp')}}" alt="Talanta Trust Image 19">
            <img src="{{asset('images/home-gallery/Talanta-trust-nature8.webp')}}" alt="Talanta Trust Image 10">
            <img src="{{asset('images/home-gallery/Talanta-trust-wildlife16.webp')}}" alt="Talanta Trust Image 20">
            <img src="{{asset('images/home-gallery/Talanta-trust-wildlife17.webp')}}" alt="Talanta Trust Image 11">

        </div>
        <h1>We are <span>Storytellers</span></h1>
        <a href="{{route('gallery')}}">Visit our gallery</a>
    </section>

    <section class="join-section">
        <div class="content">
        <div class="row-join">
            <h1>Let's Bring Your  Vision to Life</h1>

            <p>For Brands, Companies, Organizations, Tourism
                Boards, and Individuals Across Industries
                Ready to Collaborate with Us.</p>

            <a href="{{route('work-with-us')}}">Connect with Us Today!</a>
        </div>
        </div>
    </section>

    <section class="footer-section">
        <div class="content-footer">
            <div class="big-head">
                <h1>Welcome To<br> <span>Talanta Trust</span></h1>
                <div class="social">
                    <div class="round_border" ><a href="https://web.facebook.com/talantatrust" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></div>
                    <div class="round_border" ><a href="https://x.com/talantatrust" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter"></i></a></div>
                    <div class="round_border" ><a href="https://www.instagram.com/talantatrust" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></div>
                    <div class="round_border" ><a href="https://www.linkedin.com/company/talantatrust" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a></div>
                    <div class="round_border" ><a href="https://www.youtube.com/@talantatrust" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a></div>
                </div>
            </div>
            <div class="other-data">
                <ul>

                    <li><a href="{{route('work-with-us')}}">work with us</a></li>
                    <li><a href="{{route('contact')}}">contact</a></li>
                    <li><a href="{{route('about-us')}}">About us</a></li>
                    <li><a href="{{route('our-project')}}">Our Project</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li>
                    <div class="social">
                        <div class="round_border" ><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                        <div class="round_border" ><a href="#"><i class="fab fa-twitter"></i></a></div>
                        <div class="round_border" ><a href="#"><i class="fab fa-instagram"></i></a></div>
                        <div class="round_border" ><a href="#"><i class="fa-brands fa-youtube"></i></a></div>
                        <div class="round_border" ><a href="#"><i class="fa-brands fa-linkedin"></i></a></div>
                    </div>

                   </li>
                </ul>
            </div>
          </div>
    </section>

    @include('footer')

    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        const sliderTrack = document.getElementById('sliderTrack');
        const scrollContent= Array.from(sliderTrack.children);

        scrollContent.forEach(element => {
            const duplicatedElement = element.cloneNode(true);
            duplicatedElement.setAttribute('aria-hidden', 'true');
            sliderTrack.appendChild(duplicatedElement);
        });
    </script>

    <script>
        window.addEventListener("DOMContentLoaded", () => {
        const video = document.getElementById("hero-video");
        const source = video.querySelector("source");
        source.setAttribute("src", "{{asset('images/Talanta-Trust-Introduction.mp4')}}");
        video.load();
       });
    </script>


</body>
</html>
