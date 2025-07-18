<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Talantatrust</title>
  <link rel="stylesheet" href="{{asset('admin/admintemplate.css')}}">
  <link rel="stylesheet" href="{{asset('admin/create.css')}}">
  <link rel="icon" href="{{asset('images/Talanta Trust official logo-11.png')}}" type="image/x-icon">

    <!-- common links to everypage -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...your-integrity-code..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

   <div class="sidebar">
      <div class="logo"><img src="{{asset('images/Talanta Trust official logo-01.png')}}" alt="" srcset=""></div>
        <ul>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>

            <li class="{{ request()->is('blogs*') ? 'active' : '' }}">
                <a href="{{ route('blogsdata.index') }}">Blogs</a>
            </li>
            <li class="{{ request()->is('settings') ? 'active' : '' }}">
                <a href="{{ route('settings.index') }}">Settings</a>
            </li>
        </ul>

   </div>

    <div class="main-content">
        <div class="navbar">
                <p>{{ auth()->user()->email }}</p>
                <form method="POST" action="{{ route('logout') }}" class="logout-form">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
        </div>
        <div class="main">
            @yield('content')
        </div>
    </div>

    <script>
            let maxParagraphs = 5;
            let paragraphCount = 0;

            function addParagraph() {
                if (paragraphCount >= maxParagraphs) {
                    alert("You can only add up to 5 paragraphs.");
                    return;
                }

                const container = document.createElement('div');
                container.innerHTML = `<div class="paragraph">
                    <h1>${paragraphCount+1}</h1>
                    <div class="inside" >
                        <label>Title</label>
                        <input type="text" name="paragraphs[${paragraphCount}][title]" required>
                        <label>Content</label>
                        <textarea name="paragraphs[${paragraphCount}][content]" rows="10" required></textarea>
                    </div>
                    </div>
                `;
                document.getElementById('paragraph-wrapper').appendChild(container);
                paragraphCount++;
            }
    </script>

</body>
</html>
