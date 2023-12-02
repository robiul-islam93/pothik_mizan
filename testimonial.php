<!-- Testimonial section start -->
<section id="testimonial">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="testimonial-header text-center">
          <h1>Testimonial.</h1>
          <p>Explore the World!</p>
        </div>
      </div>
    </div>
  </div>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php

      $imgquery = "SELECT * FROM testimonial_picture WHERE status = '0' ORDER BY id DESC";
      $result = mysqli_query($connection, $imgquery);
      if ($result) {
        if (mysqli_num_rows($result) > 0) {
          foreach ($result as $row) {

            ?>
            <div class="carousel-item active" data-bs-interval="8000">
              <div class="testimonial-content container text-center">
                <div class="testimonial-content-img m-auto">
                  <img src="<?= $row['image']; ?>" style=" border-radius: 50%;" class="d-block m-auto" />
                </div>
                <p>
                  <?= $row['small_description']; ?>
                </p>
                <h4>
                  <?= $row['name']; ?>
                </h4>
              </div>
            </div>
            <?php
          }
        }
      }
      ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<!-- Testimonial section end -->