<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About-talantatrust</title>
    <link rel="icon" href="{{asset('images/Talanta Trust official logo-11.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
    <link rel="stylesheet" href="{{asset('css/links-to-pages.css')}}">
    <link rel="stylesheet" href="{{asset('css/hero.css')}}">
    <link rel="stylesheet" href="{{asset('css/aboutus.css')}}">
    <link rel="stylesheet" href="{{asset('css/copyright.css')}}">
    <link rel="stylesheet" href="{{asset('css/links-to-pages.css')}}">
     <link rel="stylesheet" href="{{asset('css/secondextra.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...your-integrity-code..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

    @include('header')

    <section id="hero" class="hero">
        <video autoplay muted loop playsinline class="background-video">
          <source src="{{asset('images/Talanta-Trust-People.mp4')}}" type="video/mp4" />
          Your browser does not support the video tag.
        </video>

        <div class="hero-content">
          <h1>
            <span>We're here</span>
            <span>to help you make</span>
            <span> A difference</span>
          </h1>

          <img src="{{asset('images/svg/talanta-trust-vector-01.svg')}}" alt="">
          <a href="#" class="btn">Get to know us</a>
        </div>
    </section>

    <section class="info-section">
        <h1>Our Mission & Commitment</h1>
    </section>

    <section class="container-about">
            <div class="descr">
                <p><strong>About Us</strong><br>
                    Talanta Trust is a dynamic consultancy firm committed to empowering non-governmental organisations, private sector companies, and purpose-driven individuals who are working to create meaningful change. We provide customised services that enhance visibility, improve operational effectiveness, and increase long-term impact.<br>

                    Our diverse team of professionals brings expertise in storytelling, branding, design, digital media, and strategic consultancy. Whether you are a grassroots NGO, a socially responsible business, or an individual with a bold vision, we are here to help you amplify your voice and connect meaningfully with your audience.<br>

                    Grounded in a strong belief in the power of collaboration and social impact, we understand the complex challenges that changemakers face. That is why we walk alongside you every step of the way, so you can focus on what matters most: transforming lives and strengthening communities.</p>

                <p><strong>Mission</strong><br>
                    To empower non-governmental organisations, socially responsible companies, and visionary individuals with creative, strategic, and high-quality solutions that elevate their work, communicate their purpose, and create lasting impact. Talanta Trust exists to support those who are committed to making a difference, helping them grow, thrive, and lead the way towards a more just and equitable world.</p>
            </div>
    </section>

    <section class="info-section">
      <h1>What You Can Expect from Us</h1>
    </section>

    <section class="how-we-work">
        <div class="text-description">
            <p>At Talanta Trust</strong>, we offer a full suite of services designed to meet the specific needs of non-profits, companies, and individuals committed to social impact</p>
        </div>
        <div class="image-container">
            <div class="card">
                <h3 class="txt-heading">Content Creation</h3>
                <p>We write clear, powerful stories that speak directly to your audience. From websites to campaigns, we deliver content that informs, engages, and inspires</p>
            </div>

            <div class="card">
                <h3 class="txt-heading">Photography & Videography</h3>
                <p>We capture real stories and moments through professional visuals—whether in the field, at events, or during interviews—helping you show the world your impact.</p>
            </div>
            <div class="card">
                <h3 class="txt-heading">Documentary & Storytelling</h3>
                    <p>Through thoughtful interviews and real-life footage, we create compelling documentaries that highlight your work and move your audience to act.</p>
            </div>
            <div class="card">
                <h3 class="txt-heading">Branding & Graphic Design</h3>
                <p>We build visual identities that reflect your mission and values. From logos to infographics, we ensure everything looks sharp, consistent, and on-brand.</p>
            </div>

            <div class="card">
                <h3 class="txt-heading">Writing Services</h3>
                <p>We prepare polished grant proposals, reports, and strategic documents that communicate your goals and achievements with clarity and purpose.</p>
            </div>
            <div class="card">
                <h3 class="txt-heading">Website Development</h3>
                <p>We design and develop user-friendly websites that are visually appealing, easy to navigate, and aligned with your brand and objectives.</p>
            </div>

            <div class="card">
                <h3 class="txt-heading">Social Media Management</h3>
             <p>We manage your platforms with strategic content, timely posts, and active engagement—building a strong online presence for your cause.</p>
            </div>

            <div class="card">
                <h3 class="txt-heading">NGO Consultancy</h3>
                 <p>We offer expert advice in planning, monitoring and evaluation, capacity building, and project management—helping your organisation grow and thrive.</p>
            </div>
        </div>
    </section>

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
                    <a href="{{route('work-with-us')}}">Connect with us</a>
                    <p>If your interested with our services,let find a way to get connected </p>
                </div>
            </div>
        </div>
    </section>

    @include('footer')
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
