
  <!-- Hero Start -->
  <section class="hero-section">
      <!-- Navbar Start -->
      
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"
            ><img src="assets/icon/vlog-icon-removebg-preview.png" alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mynavbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-between p-3"
            id="mynavbar"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vloge-post.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vloge-video.php">Travel</a>
              </li>
            </ul>

            <a class="logo1" href="#"
              ><img src="assets/icon/vlog-icon-removebg-preview.png" alt="" />
            </a>

            <ul class="navbar-nav">
            <li class="nav-item">
                <a  class="nav-link" href="">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#instragram">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- hero-text-sections start
      
      </div> -->




<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item hero-img active c-item">
        <img src="assets/hero-section_img/hero-img1.jpg" class="d-block w-100 c-img" alt="Slide 1">
        <div class="carousel-caption top-0 mt-4">
        <div class="text-section text-center">
        <h1>LET’s EXPLORE.</h1>
        <p>With</p>
        <h3>Pothik Mizan</h3>
        <div class="hero-btn text-center">
          <a href="#">View Trip Details</a>
        </div>
      </div>
        </div>
      </div>
      <div class="carousel-item hero-img c-item">
        <img src="assets/hero-section_img/hero_img2.jpg" class="d-block w-100 c-img" alt="Slide 2">
        <div class="carousel-caption top-0 mt-4">
        <div class="text-section text-center">
        <h1>LET’s EXPLORE.</h1>
        <p>With</p>
        <h3>Pothik Mizan</h3>
        <div class="hero-btn text-center">
          <a href="#">View Trip Details</a>
        </div>
      </div>
        </div>
      </div>
      <div class="carousel-item hero-img c-item">
        <img src="assets/hero-section_img/hero__-img3.jpg" class="d-block w-100 c-img" alt="Slide 3">
        <div class="carousel-caption top-0 mt-4">
        <div class="text-section text-center">
        <h1>LET’s EXPLORE.</h1>
        <p>With</p>
        <h3>Pothik Mizan</h3>
        <div class="hero-btn text-center">
          <a href="#">View Trip Details</a>
        </div>
      </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <!-- Activate the carousel section start -->

<script>
$(document).ready(function () {
  // Activate the carousel
  $('#carouselExampleFade').carousel();

  // Auto-slide every 3 seconds (adjust as needed)
  setInterval(function () {
    $('#carouselExampleFade').carousel('next');
  }, 3); 
});
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

  <!-- Activate the carousel section end -->


<!-- navbar js style start -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('.navbar').addClass('navbar-scrolled');
      } else {
        $('.navbar').removeClass('navbar-scrolled');
      }
    });
  });
</script>

<!-- navbar js style end -->


    </section>
    <!-- Hero End -->

