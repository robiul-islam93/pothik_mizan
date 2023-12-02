$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
}); 

window.addEventListener('scroll', function () {
    var navbar = document.querySelector('.navbar');
    var scrolledLogo = document.querySelector('.navbar-logo-scroll');
    var offset = window.scrollY;

    // Toggle between fixed and scrolled logos based on the scroll position
    if (offset > 0) {
      navbar.classList.add('navbar-scrolled');
      scrolledLogo.style.display = 'block';
    } else {
      navbar.classList.remove('navbar-scrolled');
      scrolledLogo.style.display = 'none';
    }
  });