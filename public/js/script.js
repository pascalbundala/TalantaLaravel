document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.getElementById("navbar");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
});

const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');

hamburger.addEventListener('click', () => {
  menu.classList.toggle('active');
});
closeBtn.addEventListener('click', () => {
    menu.classList.remove('active');
});

const currentYear = new Date().getFullYear();
const year = document.getElementById('currentYear');
year.textContent = currentYear;



        window.addEventListener("scroll", function () {
        const navbar = document.getElementById("navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("border-shadow");
        } else {
            navbar.classList.remove("border-shadow");
        }
        });


        const menuItems = document.querySelectorAll('.text-item');

        menuItems.forEach(item => {
          const button = item.querySelector('.fa-plus');
          const buttonMinus = item.querySelector('.fa-minus');

          button.addEventListener('click', () => {
            item.classList.add('open');

            button.style.display = 'none';
            buttonMinus.style.display='block';
          });

          buttonMinus.addEventListener('click',()=>{
            item.classList.remove('open');
            button.style.display = 'block';
            buttonMinus.style.display='none';
          });
        });

        document.addEventListener('click', e => {
          if (!e.target.closest('.text-item')) {
            menuItems.forEach(i => i.classList.remove('open'));
          }
        });

          // Disable right-click
  document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
  });

  // Disable copy
  document.addEventListener('copy', function(e) {
    e.preventDefault();
  });

  // Disable paste
  document.addEventListener('paste', function(e) {
    e.preventDefault();
  });

  // Disable cut
  document.addEventListener('cut', function(e) {
    e.preventDefault();
  });


//   arrange image in blog detailpage

  document.addEventListener("DOMContentLoaded", function () {
    const container = document.querySelector(".text-with-image");
    const items = container.querySelectorAll(".blog-word");
    const image = container.querySelector(".images-feature");

    if (items.length > 2 && image) {
      items[1].insertAdjacentElement('afterend', image);
    }
  });

  function share() {
    if (navigator.share) {
        navigator.share({
            title: 'Blog Title',
            text: 'Check out this blog!',
            url: window.location.href
        });
    } else {
        // fallback to custom share modal or dropdown
        alert("Browser doesn't support direct sharing. Please copy the link or use social icons.");
    }
}
