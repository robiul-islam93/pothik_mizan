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

    .nav-itemsD a {
        text-transform: capitalize;
        background: #fff !important;
        color: #222 !important;
        transition: 0.5s;
    }

    .nav-itemsD a:hover {
        background: #222 !important;
        color: #fff !important;
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
    <h1 class="bg-primary p-3 text-center text-white mb-4">TRAVEL BLOG PICTURE </h1>
    <div class="container"> <!-- Nav pills -->
        <ul class="nav nav-pills justify-content-center col-md-12" role="tablist">
            <li class="nav-item  nav-itemsD">
                <a class="nav-link active" data-bs-toggle="pill" href="#Travel">Traveling Vloge Picture</a>
            </li>
            <li class="nav-item  nav-itemsD">
                <a class="nav-link" data-bs-toggle="pill" href="#Medical">Medical Picture</a>
            </li>
            <li class="nav-item  nav-itemsD">
                <a class="nav-link" data-bs-toggle="pill" href="#Animation">Animation Picture</a>
            </li>
            <li class="nav-item  nav-itemsD">
                <a class="nav-link" data-bs-toggle="pill" href="#Islamic">Islamic Picture</a>
            </li>
        </ul>

        <!-- content-tab end -->

        <!-- tab content start  -->

        <!-- Travel Vloge section start  -->
        <div class="tab-content">
            <div id="Travel" class="container tab-pane active ">
                <div class="vlog-picture-items">
                    <div class="vloge-item text-center">
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
                                            <div class="col-xl-4">
                                                <div class="card p-3 m-2 shadow-md">


                                                    <?php if ($row['image'] != '') : ?>


                                                        <img src="<?= $row['image']; ?>" style="height: 30vh; object-fit: cover;" class="w-100 rounded" alt="Img">


                                                    <?php else : ?>
                                                        <img src="assets/img/no-img.jpg" class="w-100 rounded" alt="Vlog Image">


                                                    <?php endif; ?>



                                                    <h3>
                                                        <?= $row['name']; ?>
                                                    </h3>
                                                    <p>
                                                        <?= $row['long_description']; ?>
                                                    </p>
                                                    <!-- <a href="#" class="btn btn-primary">See More</a> -->
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
                <div class="vlog-picture-items">
                    <div class="vloge-item text-center">
                        <div class="container">
                            <div class="row">
                                <?php

                                $limit = 3;

                                $imgquery = "SELECT * FROM medical_picture WHERE status = '0' ORDER BY id DESC ";
                                $result = mysqli_query($connection, $imgquery);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        foreach ($result as $row) {

                                ?>
                                            <div class="col-xl-4">
                                                <div class="card p-3 m-2 shadow-md">


                                                    <?php if ($row['image'] != '') : ?>


                                                        <img src="<?= $row['image']; ?>" style="height: 30vh; object-fit: cover;" class="w-100 rounded" alt=" Medical Img">


                                                    <?php else : ?>
                                                        <img src="assets/img/no-img.jpg" class="w-100 rounded" alt="Vlog Image">


                                                    <?php endif; ?>



                                                    <h3>
                                                        <?= $row['name']; ?>
                                                    </h3>
                                                    <p>
                                                        <?= $row['long_description']; ?>
                                                    </p>
                                                    <!-- <a href="#" class="btn btn-primary">See More</a> -->
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

        <!-- Medical Picture Section end -->

        <!-- Animation Pictures start  -->

        <div class="tab-content">
            <div id="Animation" class="container tab-pane  ">
                <div class="vlog-picture-items">
                    <div class="vloge-item text-center">
                        <div class="container">
                        <div class="row">
                                <?php

                                $limit = 3;

                                $imgquery = "SELECT * FROM animation_picture WHERE status = '0' ORDER BY id DESC ";
                                $result = mysqli_query($connection, $imgquery);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        foreach ($result as $row) {

                                ?>
                                            <div class="col-xl-4">
                                                <div class="card p-3 m-2 shadow-md">


                                                    <?php if ($row['image'] != '') : ?>


                                                        <img src="<?= $row['image']; ?>" style="height: 30vh; object-fit: cover;" class="w-100 rounded" alt="Img">


                                                    <?php else : ?>
                                                        <img src="assets/img/no-img.jpg" class="w-100 rounded" alt="Animation Image">


                                                    <?php endif; ?>



                                                    <h3>
                                                        <?= $row['name']; ?>
                                                    </h3>
                                                    <p>
                                                        <?= $row['small_description']; ?>
                                                    </p>
                                                    <!-- <a href="#" class="btn btn-primary">See More</a> -->
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

        <!-- Animation Pictures end  -->

        <!-- Islamic Picture section start  -->

        <div class="tab-content">
            <div id="Islamic" class="container tab-pane  ">
                <div class="vlog-picture-items">
                    <div class="vloge-item text-center">
                        <div class="container">
                        <div class="row">
                                <?php

                                $limit = 3;

                                $imgquery = "SELECT * FROM islamic_picture WHERE status = '0' ORDER BY id DESC ";
                                $result = mysqli_query($connection, $imgquery);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        foreach ($result as $row) {

                                ?>
                                            <div class="col-xl-4">
                                                <div class="card p-3 m-2 shadow-md">


                                                    <?php if ($row['image'] != '') : ?>


                                                        <img src="<?= $row['image']; ?>" style="height: 30vh; object-fit: cover;" class="w-100 rounded" alt="Img">


                                                    <?php else : ?>
                                                        <img src="assets/img/no-img.jpg" class="w-100 rounded" alt="Animation Image">


                                                    <?php endif; ?>



                                                    <h3>
                                                        <?= $row['name']; ?>
                                                    </h3>
                                                    <p>
                                                        <?= $row['small_description']; ?>
                                                    </p>
                                                    <!-- <a href="#" class="btn btn-primary">See More</a> -->
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

        <!-- Islamic Picture section end  -->



</section>

<?php include('./includes/footer.php'); ?>