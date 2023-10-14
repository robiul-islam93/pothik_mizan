<?php include('./includes/header.php'); ?>


<!-- nav pil section start -->

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
</style>

<section class="tab-section">
    <h1 class="bg-primary p-3 text-center text-white mb-4">Travel Video</h1>
    <div class="container"> <!-- Nav pills -->
        <ul class="nav nav-pills justify-content-center col-md-12" role="tablist">
            <li class="nav-item">
                <a class="nav-link  active" data-bs-toggle="pill" href="#Travel">Travel Vloge Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#Medical">Medical Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#Animation">Animation Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#Islamic">Islamic Video</a>
            </li>
        </ul>

        <!-- Travel Vloge Video section start  -->

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="Travel" class="container tab-pane active">
                <div class="car-items">
                    <div class="car-item text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card">
                                        <h5 class="card-title p-2">Himaloy Vloge Video</h5>
                                        <video width="100%" controls>
                                            <source
                                                src="./assets/vlog-video/Pakistan vs India _ Shaheen afridi _ Tiktok short video.mp4"
                                                type="video/mp4">

                                        </video>
                                        <div class="card-body">
                                            <p class="card-text">Description of the video goes here.</p>
                                            <a href="https://www.youtube.com/@pothikmizan" class="btn btn-primary">Watch
                                                Video</a>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card">
                                        <h5 class="card-title p-2">open heart surgery Vloge Video</h5>
                                        <video width="100%" controls>
                                            <source src="./assets/medical-video/open heart surgery .mp4"
                                                type="video/mp4">

                                        </video>
                                        <div class="card-body">
                                            <p class="card-text">Description of the video goes here.</p>
                                            <a href="https://www.youtube.com/@pothikmizan" class="btn btn-primary">Watch
                                                Video</a>
                                        </div>
                                    </div>
                                </div>

                               
                                
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
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card">
                                        <h5 class="card-title p-2">animated reel Funny Dance ❤️ Video</h5>
                                        <video width="100%" controls>
                                            <source src="./assets/animation-video/animated reel ❤️.mp4"
                                                type="video/mp4">

                                        </video>
                                        <div class="card-body">
                                            <p class="card-text">Description of the video goes here.</p>
                                            <a href="https://www.youtube.com/@pothikmizan" class="btn btn-primary">Watch
                                                Video</a>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card">
                                        <h5 class="card-title p-2">Abu Toha Adnan Video  Video</h5>
                                        <video width="100%" controls>
                                            <source
                                                src="./assets/vlog-video/Pakistan vs India _ Shaheen afridi _ Tiktok short video.mp4"
                                                type="video/mp4">

                                        </video>
                                        <div class="card-body">
                                            <p class="card-text">Description of the video goes here.</p>
                                            <a href="https://www.youtube.com/@pothikmizan" class="btn btn-primary">Watch
                                                Video</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Islamic Video  section  end  -->


</section>



<?php include('./includes/footer.php'); ?>