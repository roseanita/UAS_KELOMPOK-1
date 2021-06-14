<!DOCTYPE html>
<html lang="en">

<!-- Start head -->

<head>
    <?php
    $title = "MobiRent - Tim Kami";
    include '../../component_2/head.php'
    ?>
</head>
<!-- End head -->

<body>
    <div id="app">
        <!-- Start Header -->
        <?php include '../../component_2/header.php' ?>

        <div class="title_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="title_left_heading">
                            <h1>Tim Kami</h1>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="title_right_heading">
                            <div class="title_right_cont_wrapper">
                                <ul>
                                    <li class="barrier">
                                        <a href="index.php" style="text-decoration: none;">Beranda</a>
                                    </li>
                                    <li style="line-height: 1;">Tim Kami</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <!-- Start Main -->
        <main>
            <!-- Start Article -->
            <article>
                <section class="tim_kami">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <center>
                                    <h2 class="heading-2 text-grey">Tim Kami</h2>
                                    <hr>
                                    <p class="nama-20 paragraf-deskripsi">Berikut adalah orang-orang yang mendirikan PT ini.</p>
                                </center>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                        <h2 class="nama text-center pb-2">Fikri Rahman Hadi</h2>
                                        <p class="nim" style="font-size: 18px;">NIM : 19201115</p>
                                        <p class="no_telp"  style="font-size: 18px;">NO HP : 082286756037</p>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <h2>01</h2>
                                </div>
                            </div>

                            <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                        <h2 class="nama text-center pb-2">Muhamad Rizky</h2>
                                        <p class="nim" style="font-size: 18px;">NIM : 19200991</p>
                                        <p class="no_telp"  style="font-size: 18px;">NO HP : 085711242641</p>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <h2>02</h2>
                                </div>
                            </div>

                            <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                        <h2 class="nama text-center pb-2">Roseanita Maharani Endharu</h2>
                                        <p class="nim" style="font-size: 18px;">NIM : 19200973</p>
                                        <p class="no_telp" style="font-size: 18px;">No HP : 082329578882</p>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <h2>03</h2>
                                </div>
                            </div>

                            <div class="card">
                                <div class="face face1">
                                    <div class="content">
                                        <h2 class="nama text-center pb-2">Syabella Putri Utami</h2>
                                        <p class="nim" style="font-size: 18px;">NIM : 19200988</p>
                                        <p class="no_telp" style="font-size: 18px;">No HP : 085774324080</p>
                                    </div>
                                </div>
                                <div class="face face2">
                                    <h2>04</h2>
                                </div>
                            </div>
                        </div>
                    </div>
            </article>
            <!-- End Article -->
        </main>
        <!-- End Main -->

        <!-- Start Footer -->
        <?php include '../../component_2/footer.php'  ?>
        <!-- End Footer -->
    </div>

    <!-- Start JS -->
    <?php include '../../component_2/js.php' ?>
    <!-- End JS -->

    <script>
        $('#tim').addClass('active')
    </script>
</body>

</html>