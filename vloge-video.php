<?php include('./includes/header.php'); ?>


<!-- nav pil section start -->

<style>
    .tab-section {
        padding-top: 100px;
    }

    .paginations {
        padding-top: 10rem;
    }

    .nav-itemsD a:hover {
        background: #222 !important;
        color: #fff !important;
    }

    .car-items {
        margin-top: 10%;
    }


    .nav-itemsD a {
        text-transform: capitalize;
        background: #fff !important;
        color: #222 !important;
        transition: 0.5s;
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
</style>

<section class="tab-section">
    <h1 class="bg-dark p-3 text-center text-white mb-4">Travel Video</h1>
    <div class="container"> <!-- Nav pills -->
        <ul class="nav nav-pills justify-content-center col-md-12" role="tablist">
            <li class="nav-item nav-itemsD">
                <a class="nav-link  active" data-bs-toggle="pill" href="#Travel">Travel Vloge Video</a>
            </li>
            <li class="nav-item nav-itemsD">
                <a class="nav-link" data-bs-toggle="pill" href="#Medical">Medical Video</a>
            </li>
            <li class="nav-item nav-itemsD">
                <a class="nav-link" data-bs-toggle="pill" href="#Animation">Animation Video</a>
            </li>
            <li class="nav-item nav-itemsD">
                <a class="nav-link" data-bs-toggle="pill" href="#Islamic">Islamic Video</a>
            </li>
        </ul>

        <!-- Travel Vloge Video section start  -->

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="Travel" class="container tab-pane  active">
                <div class="car-items">
                    <div class="car-item text-center">
                        <div class="container">
                            <div class="row">
                                <?php

                                $limit = 1;

                                $videoquery = "SELECT * FROM travel_vloge_video WHERE status = '0' ORDER BY id DESC  ";
                                $result = mysqli_query($connection, $videoquery);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        foreach ($result as $row) {

                                            ?>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card  p-3 m-2 shadow-md">
                                                    <video width="100%" controls>
                                                        <source src="<?= $row['video']; ?>" type="video/mp4">
                                                    </video>
                                                    <h5 class="pt-2">
                                                        <?= $row['name']; ?>
                                                    </h5>
                                                    <div class="card-body">
                                                        <p class="card-text" style=" text-align: justify;">
                                                            <?= $row['small_description']; ?>
                                                        </p>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Travel Vloge Video section end  -->


        <!-- Medical video section start  -->
        <div class="tab-content">
            <div id="Medical" class="container tab-pane">
                <div class="car-items">
                    <div class="car-item text-center">
                        <div class="container">
                            <div class="row">
                                <?php
                                $videoquery = "SELECT * FROM medical_video WHERE status = '0' ORDER BY id DESC  ";
                                $result = mysqli_query($connection, $videoquery);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        foreach ($result as $row) {

                                            ?>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card  p-3 m-2 shadow-md">
                                                    <video width="100%" controls>
                                                        <source src="<?= $row['video']; ?>" type="video/mp4">
                                                    </video>
                                                    <h5 class="pt-2">
                                                        <?= $row['name']; ?>
                                                    </h5>
                                                    <div class="card-body">
                                                        <p class="card-text" style=" text-align: justify;">
                                                            <?= $row['small_description']; ?>
                                                        </p>
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
                    </div>
                </div>
            </div>
        </div>

        <!-- Medical video section end  -->

        <!-- Animation video section start -->
        <div class="tab-content">
            <div id="Animation" class="container tab-pane">
                <div class="car-items">
                    <div class="car-item text-center">
                        <div class="container">
                        <div class="row">
                                <?php
                                $videoquery = "SELECT * FROM animation_video WHERE status = '0' ORDER BY id DESC  ";
                                $result = mysqli_query($connection, $videoquery);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        foreach ($result as $row) {

                                            ?>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card  p-3 m-2 shadow-md">
                                                    <video width="100%" controls>
                                                        <source src="<?= $row['video']; ?>" type="video/mp4">
                                                    </video>
                                                    <h5 class="pt-2">
                                                        <?= $row['name']; ?>
                                                    </h5>
                                                    <div class="card-body">
                                                        <p class="card-text" style=" text-align: justify;">
                                                            <?= $row['small_description']; ?>
                                                        </p>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Animation video section end -->

        <!-- Islamic Video  section  start  -->
        <div class="tab-content">
            <div id="Islamic" class="container tab-pane ">
                <div class="car-items">
                    <div class="car-item text-center">
                        <div class="container">
                        <div class="row">
                                <?php
                                $videoquery = "SELECT * FROM islamic_video WHERE status = '0' ORDER BY id DESC  ";
                                $result = mysqli_query($connection, $videoquery);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        foreach ($result as $row) {

                                            ?>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="card  p-3 m-2 shadow-md">
                                                    <video width="100%" controls>
                                                        <source src="<?= $row['video']; ?>" type="video/mp4">
                                                    </video>
                                                    <h5 class="pt-2">
                                                        <?= $row['name']; ?>
                                                    </h5>
                                                    <div class="card-body">
                                                        <p class="card-text" style=" text-align: justify;">
                                                            <?= $row['small_description']; ?>
                                                        </p>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Islamic Video  section  end  -->


</section>



<?php include('./includes/footer.php'); ?>