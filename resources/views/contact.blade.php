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
    <script src="{{asset('js/script.js')}}" defer></script>
</head>
<body>
    @include('header')

    <section id="hero" class="hero">
        <video autoplay muted loop playsinline class="background-video">
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
                <div class="forms">

                    <div class="form-input">
                        <div class="divs">
                            <label for="name">Firstname is*</label>
                            <input type="text" name="names" id="name">
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
                    <textarea id="textArea" name="textArea" rows="4" cols="50" placeholder="Write us your message....."></textarea>

                    <input type="submit" name="submit" id="submit">

                </div>
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
</body>
</html>
