<?php include('./includes/header.php'); ?>

<style>
    .tab-section {
        padding-top: 100px;
    }

    .paginations {
        padding-top: 10rem;
    }

    /* .pagination .page-item {
        margin: 10px;
    } */

    .car-items {
        margin-top: 10%;
    }

    .nav .nav-link {
        /* color: var(--black-color); */
        padding: 10px 15px;
        font-weight: 700;
        border: 1px solid #222;
    }

    .nav .nav-item {
        border-radius: 7px;
        margin: 10px;
    }

    .card h3 {
        padding-top: 10px;
    }
</style>


<section class="tab-section">

    <!-- content-tab start -->
    <h1 class="bg-primary p-3 text-center text-white mb-4">Travel Vlog Picture </h1>
    <div class="container"> <!-- Nav pills -->
        <ul class="nav nav-pills justify-content-center col-md-12" role="tablist">
            <li class="nav-item">
                <a class="nav-link  active" data-bs-toggle="pill" href="#Travel">Traveling Vloge Picture</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#Medical">Medical Picture</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#Animation">Animation Picture</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#Islamic">Islamic Picture</a>
            </li>
        </ul>

        <!-- content-tab end -->

        <!-- tab content start  -->

        <!-- Travel Vloge section start  -->
        <div class="tab-content">
            <div id="Travel" class="container tab-pane active ">
                <div class="car-items">
                    <div class="car-item text-center">
                        <div class="container">
                            <div class="row">
                                <?php

                                $limit = 3;

                                $imgquery = "SELECT * FROM travel_vlog WHERE status = '0' ORDER BY id DESC ";
                                $result = mysqli_query($connection, $imgquery);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        foreach ($result as $row) {

                                  ?>
                                <div class="col-md-4">
                                    <div class="card p-3 shadow-md">


                                        <?php if ($row['image'] != ''): ?>


                                            <img src="<?= $row['image']; ?>" style="height: 30vh; object-fit: cover;"
                                            class="w-100 rounded" alt="Img" >


                                        <?php else: ?>
                                            <img src="assets/img/no-img.jpg" class="w-100 rounded" alt="Vlog Image"
                                                >


                                        <?php endif; ?>



                                        <h3>
                                            <?= $row['name']; ?>
                                        </h3>
                                        <p>
                                            <?= $row['long_description']; ?>
                                        </p>
                                        <a href="#" class="btn btn-primary">See More</a>
                                    </div>
                                </div>
                                            <?php
                                        }
                                    }
                                }
                                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Travel Vloge section end  -->

        <!-- Medical Picture Section start -->
        <div class="tab-content">
            <div id="Medical" class="container tab-pane  ">
                <div class="car-items">
                    <div class="car-item text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card p-3 shadow-md">
                                        <h1>Himchori</h1>
                                        <img src="./assets/vlog-post-img/vlog-post-img1.png" alt="Vlog Image"
                                            class="img-fluid mt-3" />

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at augue at
                                            elit fermentum
                                            vestibulum. Nunc a dolor non orci auctor lacinia....</p>
                                        <a href="#" class="btn btn-primary">See More</a>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card p-3 shadow-md">
                                        <h1>Australia</h1>
                                        <img src="./assets/vlog-post-img/vloge-post-img2.png" alt="Vlog Image"
                                            class="img-fluid mt-3" />

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at augue at
                                            elit fermentum
                                            vestibulum. Nunc a dolor non orci auctor lacinia....</p>
                                        <a href="#" class="btn btn-primary">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Medical Picture Section end -->

        <!-- Animation Pictures start  -->

        <div class="tab-content">
            <div id="Animation" class="container tab-pane  ">
                <div class="car-items">
                    <div class="car-item text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card p-3 shadow-md">
                                        <h1>Himchori</h1>
                                        <img src="./assets/vlog-post-img/vlog-post-img1.png" alt="Vlog Image"
                                            class="img-fluid mt-3" />

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at augue at
                                            elit fermentum
                                            vestibulum. Nunc a dolor non orci auctor lacinia....</p>
                                        <a href="#" class="btn btn-primary">See More</a>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card p-3 shadow-md">
                                        <h1>Australia</h1>
                                        <img src="./assets/vlog-post-img/vloge-post-img2.png" alt="Vlog Image"
                                            class="img-fluid mt-3" />

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at augue at
                                            elit fermentum
                                            vestibulum. Nunc a dolor non orci auctor lacinia....</p>
                                        <a href="#" class="btn btn-primary">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Animation Pictures end  -->

        <!-- Islamic Picture section start  -->

        <div class="tab-content">
            <div id="Islamic" class="container tab-pane  ">
                <div class="car-items">
                    <div class="car-item text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card p-3 shadow-md">
                                        <h1>Himchori</h1>
                                        <img src="./assets/vlog-post-img/vlog-post-img1.png" alt="Vlog Image"
                                            class="img-fluid mt-3" />

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at augue at
                                            elit fermentum
                                            vestibulum. Nunc a dolor non orci auctor lacinia....</p>
                                        <a href="#" class="btn btn-primary">See More</a>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card p-3 shadow-md">
                                        <h1>Australia</h1>
                                        <img src="./assets/vlog-post-img/vloge-post-img2.png" alt="Vlog Image"
                                            class="img-fluid mt-3" />

                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at augue at
                                            elit fermentum
                                            vestibulum. Nunc a dolor non orci auctor lacinia....</p>
                                        <a href="#" class="btn btn-primary">See More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Islamic Picture section end  -->



</section>

<?php include('./includes/footer.php'); ?>