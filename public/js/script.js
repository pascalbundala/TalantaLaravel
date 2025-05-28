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
