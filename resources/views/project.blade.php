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
    {{-- <link rel="stylesheet" href="{{asset('css/secondextra.css')}}"/> --}}
    <link rel="stylesheet" href="{{asset('css/project.css')}}"/>
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
            background-size: cover; /* or 'contain' */
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
            /* display: block;
            object-fit: contain;
            aspect-ratio:49/20; */
          }

          .links-to-pages .image-with-links .divs{
            height: 100%;
            position: relative;
            background-image: url('../images/FooterImages/TalantaTrustProject3.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .links-to-pages .image-with-links .divs:nth-child(2){
            background-image: url('../images/FooterImages/TalantaTrustProject1.webp');
        }
    </style>
</head>
<body>
    @include('header')
    <div class="empty">
    </div>
    <section class="project-title">
        <h1>Giving every child a chance to learn tech</h1>
    </section>

    <section class="project-title greens">
        <h1>Watoto connect Project</h1>
    </section>

    <section class="how-we-work">
        <div class="text-description">
            <p>At Talanta Trust</strong>,we believe that digital opportunity should reach every child, not just those in big cities. That’s why we created Watoto Connect (Watoto Connect—which means “Children Connect” in Swahili.), a flagship project dedicated to equipping students in urban & rural Moshi and Arusha in Tanzania with digital skills, creative tools, and the confidence to thrive in today’s tech-driven world.</p>
        </div>

        <div class="image-container">
            <div class="card">
                <h3 class="txt-heading">01.What is Watoto Connect?</h3>
                <p>Watoto Connect is a bold and inspiring initiative by Talanta Trust that brings the power of technology to children in and Arusha. We visit schools with little or no access to computers and equip both students and teachers with essential digital skills — from using computers and tablets to browsing the internet safely. But we don’t stop there. Our hands-on sessions unlock creativity through graphic design, animation, web development, coding, and even basic AI. To ensure lasting impact, we also donate laptops and tablets, leaving behind not just inspiration but real tools for a digital future.</p>
            </div>

            <div class="card">
                <h3 class="txt-heading">02.What We Want to Achieve</h3>
                <p>
Our goal is to empower children in Moshi and Arusha with the digital skills they need to thrive in today’s world. Through engaging, hands-on training, we help them learn how to operate computers and tablets, use the internet safely, and unlock their creativity with tools like graphic design, coding, animation, web development, and basic AI. We also support teachers with up-to-date tech skills so they can confidently guide students even after our programme ends. By nurturing curiosity and building confidence, we aim to inspire the next generation of innovators, problem solvers, and digital leaders, right from the heart of Tanzania.</p>
            </div>
            <div class="card">
                <h3 class="txt-heading">03.Where We Work & What We Do</h3>
                    <p>We focus on rural areas of Moshi and Arusha, where many students have never seen or touched a computer. Through the Watoto Connect project, we bring hands-on tech experiences directly to these communities. We run fun and engaging tech bootcamps for kids, provide teacher training on how to use digital tools in the classroom, and set up creative tech labs where children can explore design, coding, AI, and more. To make sure learning continues beyond our visits, we also donate free laptops and tablets to the schools we support, giving them a long-term path to digital growth.</p>
            </div>
            <div class="card">
                <h3 class="txt-heading">04.Why It Matters</h3>
                <p>In today’s technology-driven world, digital skills are no longer optional; they are essential. Yet thousands of children in urban & rural Tanzania still grow up without access to computers, the internet, or even basic digital education. This digital divide holds them back from learning opportunities, creative expression, and future careers. Watoto Connect Project changes that by bringing tech training, tools, and inspiration directly to underserved schools. We are not just donating devices; we are equipping young people with the confidence and skills to compete, create, and lead in the digital age. With every workshop, we’re unlocking potential and giving these children a real head start in life.</p>
            </div>
        </div>
    </section>

    <section class="project-title greens">
        <h1>Every Service Supports the Mission</h1>
        <p>When you hire Talanta Trust for content creation, branding, web development, or any of our creative and consultancy services, you are also investing in a child’s digital future. We proudly commit 15% of all service income directly to funding the Watoto Connect Project, our initiative bringing tech skills to children in rural Moshi and Arusha.</p>
    </section>

    <section class="big-impact">
        <h1>Want to make an even bigger impact? <br> <span>Join us!</span></h1>
        <p>Become part of the Watoto Connect journey by choosing how you want to contribute:</p>
        <div class="imgs-text">
            <img src="{{asset('images/TalantaTrustOfficial14.png')}}" alt="">
            <h3><span>Sponsor</span> (Provide devices, training resources, or financial support)</h3>
        </div>

        <div class="imgs-text">
            <img src="{{asset('images/TalantaTrustOfficial14.png')}}" alt="">
            <h3><span>Volunteer</span> (Share your time and expertise by helping us teach)</h3>
        </div>

        <div class="imgs-text">
            <img src="{{asset('images/TalantaTrustOfficial14.png')}}" alt="">
            <h3><span>Partner </span> (Collaborate by offering your technology platform or services)</h3>
        </div>

        <button class="btn-email">
           Email us today at watoto@talantatrust.org
        </button>


    </section>

    <section class="links-to-pages">
        <div class="image-with-links">
            <div class="divs">
                <div class="overlay">
                <a href="{{route('gallery')}}">Gallery</a>
                <p>If your interested with our services,let find a way to get connected</p>
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
</body>
</html>
