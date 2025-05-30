<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home-TalantTrust| this company deals with helping NGOs to thrive in digital World</title>
  <link rel="icon" href="{{asset('images/Talanta Trust official logo-11.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/nav.css')}}">
  <link rel="stylesheet" href="{{asset('css/hero.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/second.css')}}"/>
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
        <video autoplay muted loop playsinline class="background-video">
        <source src="{{asset('images/Talanta-Trust-Introduction.mp4')}}" type="video/mp4" />
        Your browser does not support the video tag.
        </video>

        <div class="hero-content">
        <h1>
            <span>Everyone</span>
            <span>has a story!</span>
            <span>TalantaTrust</span>
        </h1>

        <img src="{{asset('images/svg/talanta-trust-vector-01.svg')}}" alt="">
        <a href="#" class="btn">Scroll to dive in</a>
        </div>
    </section>

    <section class="info-section">
        <div class="big-image-text">
        <div class="images">
            <img id="myImage" src="{{asset('Talanta-changing-images.jpg')}}" alt="Talanta images of people">
        </div>
        <div class="heading">
            <h2>Empowering NGOs,<br> Amplifying Impact <br> and Creating <br> <span>Awareness</span></h2>
            <img  src="{{asset('images/svg/talanta-trust-vector-02.svg')}}" alt="">
        </div>
        </div>

        <div class="row ">
        <div class="description">
            <p>Talanta Trust is a dedicated NGO consultancy firm
            committed to empowering non-governmental organizations by offering a range of tailored services designed to
            enhance their visibility, effectiveness, and overall impact.
            With a team of experts in various fields, we are driven
            by a passion for social change and the belief that NGOs
            play a crucial role in addressing the world's most pressing
            challenges.</p>
        </div>
        <div class="images-reverse">
            <img  src="{{asset('images/Talantatrustwildlifephotography.jpg')}}" alt="Talanta Trust Wildlife Photography">
        </div>
        </div>
    </section>

    <section class="multi-slider">
        <div class="slider-track" id="sliderTrack">

            <img src="{{asset('images/home-gallery/Talanta-trust-1.jpg')}}"  alt="Talanta Trust Image 1">
            <img src="{{asset('images/home-gallery/Talanta-trust-5.jpg')}}"  alt="Talanta Trust Image 5">
            <img src="{{asset('images/home-gallery/Talanta-trust-2.jpg')}}"  alt="Talanta Trust Image 2">
            <img src="{{asset('images/home-gallery/Talanta-trust-6.jpg')}}"  alt="Talanta Trust Image 6">
            <img src="{{asset('images/home-gallery/Talanta-trust-3.jpg')}}"  alt="Talanta Trust Image 3">
            <img src="{{asset('images/home-gallery/Talanta-trust-14.jpg')}}" alt="Talanta Trust Image 14">
            <img src="{{asset('images/home-gallery/Talanta-trust-4.jpg')}}"  alt="Talanta Trust Image 4">
            <img src="{{asset('images/home-gallery/Talanta-trust-16.jpg')}}" alt="Talanta Trust Image 16">
            <img src="{{asset('images/home-gallery/Talanta-trust-7.jpg')}}"  alt="Talanta Trust Image 7">
            <img src="{{asset('images/home-gallery/Talanta-trust-17.jpg')}}" alt="Talanta Trust Image 17">
            <img src="{{asset('images/home-gallery/Talanta-trust-8.jpg')}}"  alt="Talanta Trust Image 8">
            <img src="{{asset('images/home-gallery/Talanta-trust-18.jpg')}}" alt="Talanta Trust Image 18">
            <img src="{{asset('images/home-gallery/Talanta-trust-9.jpg')}}"  alt="Talanta Trust Image 9">
            <img src="{{asset('images/home-gallery/Talanta-trust-19.jpg')}}" alt="Talanta Trust Image 19">
            <img src="{{asset('images/home-gallery/Talanta-trust-10.jpg')}}" alt="Talanta Trust Image 10">
            <img src="{{asset('images/home-gallery/Talanta-trust-20.jpg')}}" alt="Talanta Trust Image 20">
            <img src="{{asset('images/home-gallery/Talanta-trust-11.jpg')}}" alt="Talanta Trust Image 11">
            <img src="{{asset('images/home-gallery/Talanta-trust-12.jpg')}}" alt="Talanta Trust Image 12">
            <img src="{{asset('images/home-gallery/Talanta-trust-13.jpg')}}" alt="Talanta Trust Image 13">
            <img src="{{asset('images/home-gallery/Talanta-trust-15.jpg')}}" alt="Talanta Trust Image 15">
            <img src="{{asset('images/home-gallery/Talanta-trust-21.jpg')}}" alt="Talanta Trust Image 21">
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

            <h4>Connect with Us Today!</h4>
        </div>
        </div>
    </section>

    <section class="footer-section">
        <div class="content-footer">
            <div class="big-head">
                <h1>Welcome To<br> <span>talantatrust</span></h1>
                <div class="social">
                    <div class="round_border" ><a href="#"><i class="fab fa-facebook-f"></i></a></div>
                    <div class="round_border" ><a href="#"><i class="fab fa-twitter"></i></a></div>
                    <div class="round_border" ><a href="#"><i class="fab fa-instagram"></i></a></div>
                    <div class="round_border" ><a href="#"><i class="fa-brands fa-youtube"></i></a></div>
                    <div class="round_border" ><a href="#"><i class="fa-brands fa-linkedin"></i></a></div>
                </div>
            </div>
            <div class="other-data">
                <ul>

                    <li><a href="{{route('work-with-us')}}">work with us</a></li>
                    <li><a href="{{route('contact')}}">contact</a></li>
                    <li><a href="{{route('about-us')}}">About us</a></li>
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
      gsap.registerPlugin(ScrollTrigger);
      gsap.to("#myImage", {
      scale: 2,
      scrollTrigger: {
          trigger: ".info-section",
          start: "top 50%",
          end: "center 50%",
          scrub: true
      }
      });
  </script>
  <script>
      const sliderTrack = document.getElementById('sliderTrack');
      const scrollContent= Array.from(sliderTrack.children);

      scrollContent.forEach(element => {
          const duplicatedElement = element.cloneNode(true);
          duplicatedElement.setAttribute('aria-hidden', 'true');
          sliderTrack.appendChild(duplicatedElement);
      });
  </script>

</body>
</html>
