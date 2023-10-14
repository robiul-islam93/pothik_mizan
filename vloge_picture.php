<style>
    body {
        background-color: #f8f9fa;
    }

    #vloge-picture {
        padding-top: 100px;
    }

    .vloge-heading {
        padding: 10px;
    }

    .vloge-heading h1 {
        font-weight: 700;
    }

    .traveling-section {
        margin: auto;
        padding: 20px;
        /* background-color: #ffffff; */
        border-radius: 8px;
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); */
    }

    .traveling-section img {
        width: 100%;
    }

    .traveling-section h2 {
        font-size: 20px;
    }

    .vloge-heading span {
        font-weight: 400;
        font-size: 15px;
    }


    @media screen and (max-width:766px) {

        .vloge-heading h1 {
            font-size: 2.5em;
        }

        .reading-section {
            margin: 15px;
        }
    }
</style>
<section id="vloge-picture">
    <div class="vloge-heading text-center">
        <h1>Bloge Image<br><span>Explore The World!</span></h1>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <?php

            $limit = 1;

            $imgquery = "SELECT * FROM travel_vlog WHERE status = '0' ORDER BY id DESC LIMIT 1 ";
            $result = mysqli_query($connection, $imgquery);
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    foreach ($result as $row) {

            ?>
                        <div class="col-lg-6 travel-video">
                            <?php if ($row['image'] != '') : ?>

                                <img src="<?= $row['image']; ?>" width="100%" style=" border-radius:10px;" alt="Img">


                            <?php else : ?>
                                <img src="assets/img/no-img.jpg" class="w-100 rounded" alt="Vlog Image">


                            <?php endif; ?>
                        </div>
                        <div class="col-lg-6 travel-head">
                            <div class="traveling-section">
                                <h3>
                                    <?= $row['name']; ?>
                                </h3>
                                <p>
                                    <?= $row['long_description']; ?>
                                </p>

                                <!-- Read More Button -->
                                <div class="traveling-btn">
                                    <a href="vloge-post.php">Read More</a>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</section>