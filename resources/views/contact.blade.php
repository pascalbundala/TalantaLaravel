<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Talantatrust</title>
    <link rel="icon" href="{{asset('images/Talanta Trust official logo-11.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/hero.css')}}">
     <link rel="stylesheet" href="{{asset('css/nav-constant.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/links-to-pages.css')}}">
    <link rel="stylesheet" href="{{asset('css/copyright.css')}}">
    <!-- common links to everypage -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...your-integrity-code..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

    @include('header')
    @if(session('success'))
    <div id="success-alert" style="padding: 15px; background-color: #90be41; color: #fff; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px; position: absolute;left:25%;top:0; z-index:100101001;width:50%;margin:0 auto">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(function () {
            document.getElementById('success-alert').style.display = 'none';
        }, 5000); // hides after 5 seconds
    </script>
@endif

    <section id="hero" class="hero">
        <video autoplay muted loop playsinline preload="none" class="background-video" id="hero-video">
           <source src="{{asset('images/Talanta-Trust-Contact.mp4')}}" type="video/mp4"/>
          Your browser does not support the video tag.
        </video>

        <div class="hero-content">
          <h1>
            <span>Join</span>
            <span style="color:#fabf28">Our purpose</span>
          </h1>

          <img src="{{asset('images/svg/talanta-trust-vector-01.svg')}}" alt="">
          <a href="#" class="btn">scroll to dive in</a>
        </div>
    </section>

    <div class="contents">
        <div class="titles">
            <h2>Create impact with us</h2>
        </div>
        <div class="content-form">
            <div class="form-holder">
                <div class="maelezo">
                    <h2>let us know more about you</h2>
                    <p>We are excited to collaborate with you! Please fill out the form below so we can tailor our services to meet your needs.</p>
                </div>
                <form class="forms" action="{{ route('contactus.contact') }}" method="POST">
                    @csrf
                    <div class="form-input">
                        <div class="divs">
                            <label for="name">Firstname is*</label>
                            <input type="text" name="firstname" id="name">
                        </div>

                        <div class="divs">
                            <label for="lastname">Surname is*</label>
                            <input type="text" name="lastname" id="lastname">
                        </div>
                    </div>

                    <div class="form-input">
                        <div class="divs">
                            <label for="email">Email is*</label>
                            <input type="text" name="email" id="email">
                        </div>

                        <div class="divs">
                            <label for="phone">Phone is*</label>
                            <input type="text" name="phone" id="phone">
                        </div>
                    </div>

                    <label class="big-message" for="message">Tell us your story*</label>
                    <textarea id="textArea" name="message" rows="4" cols="50" placeholder="Write us your message....."></textarea>

                    <button type="submit"  id="submit">submit</button>

                </form>
            </div>
        </div>
    </div>

    <section class="links-to-pages">
        <div class="image-with-links">
            <div class="divs">
                <div class="overlay">
                <a href="{{route('gallery')}}">Gallery</a>
                <p>Visit our images and videos of what we do and how we can create impact to your organisation </p>
            </div>
        </div>
            <div class="divs">
                <div class="overlay">
                    <a href="{{route('about-us')}}">About us</a>
                    <p>Connect with passion that moves us and makes us thrive</p>
                </div>
            </div>
        </div>
    </section>

   @include('footer')
   <script src="{{asset('js/script.js')}}"></script>
    {{-- <script>
        window.addEventListener("DOMContentLoaded", () => {
        const video = document.getElementById("hero-video");
        const source = video.querySelector("source");
        source.setAttribute("src", "{{asset('images/Talanta-Trust-Introduction.mp4')}}");
        video.load();
       });
    </script> --}}
</body>
</html>
