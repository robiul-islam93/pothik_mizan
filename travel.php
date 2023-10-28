<style>
  .travel-story-section{
    padding-top: 120px;
  }

</style>
<section class="travel-story-section">
  <!-- Travel Story Header -->
  <div class="travel-story-hedar-section text-center">
    <h2>Travel Video</h2>
    <p>Explore the World!</p>
  </div>

  <!-- Travel Story Content -->
  <div class="container mt-5 story-section">
    <div class="row align-items-center">
      <!-- Video -->
      <?php

$limit = 1;

$imgquery = "SELECT * FROM travel_vloge_video WHERE status = '0' ORDER BY id DESC LIMIT 1 ";
$result = mysqli_query($connection, $imgquery);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        foreach ($result as $row) {

?>
            <div class="col-lg-6 travel-video">
                  <video width="100%" controls>
                 <source src="<?= $row['video']; ?>" type="video/mp4">
                   </video>
            </div>
            <div class="col-lg-6 travel-head">
                <div class="traveling-section">
                    <h3>
                        <?= $row['name']; ?>
                    </h3>
                    <p>
                        <?= $row['small_description']; ?>
                    </p>

                    <!-- Read More Button -->
                    <div class="traveling-btn">
                        <a href="vloge-video.php">Read More</a>
                    </div>
                </div>
            </div>
<?php
        }
    }
}
?>
  </div>
</section>
