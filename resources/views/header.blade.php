    <header id="navbar">
        <a href="{{route('index')}}" class="logo"><img src="{{asset('images/Talanta Trust official logo-01.png')}}" alt="" srcset=""></a>

        <div class="social-icons">
            <div class="round_border" ><a href="https://web.facebook.com/talantatrust" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></div>
            <div class="round_border" ><a href="https://x.com/talantatrust" target="_blank" rel="noopener noreferrer" ><i class="fa-brands fa-x-twitter"></i></a></div>
            <div class="round_border" ><a href="https://www.instagram.com/talantatrust" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></div>
            <div class="round_border" ><a href="https://www.linkedin.com/company/talantatrust" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a></div>
            <div class="round_border" ><a href="https://www.youtube.com/@talantatrust" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a></div>
        </div>

        <div class="hamburger" id="hamburger">
          <i class="fas fa-bars"></i>
        </div>
    </header>
    <div class="menu-overlay" id="menu">
        <div class="close-btn" id="closeBtn">&times;</div>
        <ul>
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('gallery')}}">Gallery</a></li>
            <li><a href="{{route('about-us')}}">About</a></li>

        </ul>
    </div>
