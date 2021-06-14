<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Start head -->

<head>
    <?php
    $title = "MobiRent - Pemesanan Selesai";
    include '../../component/head.php';
    include '../../function/tanggal-indo.php';
    include '../../function/random_number.php';
    ?>
</head>
<!-- End head -->

<body>
    <div id="app">
        <!-- Start Header -->
        <?php include '../../component/header.php'; ?>

        <div class="title_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="title_left_heading">
                            <h1>Pemesanan Selesai</h1>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="title_right_heading">
                            <div class="title_right_cont_wrapper">
                                <ul>
                                    <li class="barrier">
                                        <a href="../pengguna/index.php" style="text-decoration: none;">Beranda</a>
                                    </li>
                                    <li style="line-height: 1;">Mobil</li>
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
                <section class="mobil-pemesanan">
                    <div class="tabs">
                        <div class="tab_heading">
                            <h3>Pilih Mobil</h3>
                            <p>Selesaikan langkah anda!</p>
                        </div>
                        <div class="tab_heading_cont">
                            <div class="tab_circle" stylePseudo=":after {border: 1px solid #828282}">
                                <div class="tab_num">
                                    <p>1</p>
                                </div>
                                <h5>Waktu &amp; Tempat</h5>
                            </div>
                            <div class="tab_circle">
                                <div class="tab_num">
                                    <p>2</p>
                                </div>
                                <h5>Mobil</h5>
                            </div>
                            <div class="tab_circle">
                                <div class="tab_num">
                                    <p>3</p>
                                </div>
                                <h5>Periksa</h5>
                            </div>
                            <div class="tab_circle tab_circle_last">
                                <div class="tab_num ">
                                    <p>4</p>
                                </div>
                                <h5>Selesai</h5>
                            </div>
                        </div>
                    </div>

                    <div class="pemesanan-berhasil">
                        <div class="container">
                            <div class="pemesanan_struk">
                                <div class="order-done">
                                    <img src="../../assets/img/selesai/icon-checked.png" alt=""></i>
                                    <h4 style="font-size: 25px;">TERIMA KASIH! PESANAN SUDAH DITERIMA</h4>
                                    <h4 style="font-size: 25px;">NOMOR PESANAN: <span>#<?=get_random_number();?></span></h4>
                                    <hr>
                                    <h4 style="font-size: 23px;">RINGKASAN</h4>
                                    <ul class="row list-unstyled">
                                        <li class="col-md-6">
                                            <h6 style="font-size: 20px;">Lokasi</h6>
                                            <p style="font-size: 17px;">Pengambilan <span><?= $_SESSION['step_1']['lokasi_pengambilan'] ?></span>
                                            </p>
                                            <p style="font-size: 17px;">Pengantaran <span><?= $_SESSION['step_1']['lokasi_pengantaran'] ?></span>
                                            </p>
                                        </li>
                                        <li class="col-md-6">
                                            <h6 style="font-size: 20px;">TANGGAL</h6>
                                            <p style="font-size: 17px;">Pengambilan <span>
                                                    <?= tgl_indo($_SESSION['step_1']['waktu_pengambilan']) ?>,
                                                    <?= $_SESSION['step_1']['jam_pengambilan'] ?> WIB</span>
                                            </p>
                                            <p style="font-size: 17px;">Pengantaran <span>
                                                    <?= tgl_indo($_SESSION['step_1']['waktu_pengantaran']) ?>,
                                                    <?= $_SESSION['step_1']['jam_pengambilan'] ?> WIB</span>
                                            </p>
                                        </li>
                                        <li class="col-md-6">
                                            <h6 style="font-size: 20px;">Mobil</h6>
                                            <p style="font-size: 17px;">
                                                <?= $_SESSION['step_2'][0] ?> <span>1 Hari</span></p>
                                        </li>
                                        <li class="col-md-6">
                                            <h6 style="font-size: 20px;">Total Pembayaran</h6>
                                            <p style="font-size: 17px;">
                                                <?= $_SESSION['step_3']['selector'] ?>
                                                <span>
                                                    <b>Rp <?= number_format($_SESSION['step_2'][1], 2, ',', '.'); ?></b>
                                                </span>
                                            </p>
                                        </li>
                                        <li class="col-md-12">
                                            <h6 style="font-size: 20px;">Informasi Tagihan</h6>
                                            <p style="font-size: 17px;">
                                                <?= $_SESSION['step_3']['nama_depan'] ?> <?= $_SESSION['step_3']['nama_belakang'] ?>
                                                <br><?= $_SESSION['step_3']['email'] ?>
                                                <br><?= $_SESSION['step_3']['no_telp'] ?>
                                                <br><?= $_SESSION['step_3']['dari_alamat'] ?>
                                                <br><?= $_SESSION['step_3']['untuk_alamat'] ?>-2
                                                <br><?= $_SESSION['step_3']['penumpang'] ?>
                                                <br><?= tgl_indo($_SESSION['step_3']['tanggal_perjalanan']) ?>
                                                <br><?= $_SESSION['step_3']['waktu_perjalanan'] ?> WIB
                                            </p>
                                        </li>
                                        <li class="col-md-12">
                                            <h6 style="font-size: 20px;">Informasi Tambahan</h6>
                                            <?php if (empty($_SESSION['step_3']['pesan_tambahan'])) { ?>
                                                <p style="font-size: 17px;">
                                                    Tidak ada pesan tambahan 
                                                </p>
                                            <?php } else {?>
                                                <p style="font-size: 17px;">
                                                    <?= $_SESSION['step_3']['pesan_tambahan'] ?>
                                                </p>
                                            <?php }?>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="contect_btn contect_btn_contact">
                                        <ul>
                                            <li>
                                                <center>
                                                    <a href="print.php" class="purple rent-btn">Print Order</a>
                                                </center>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <!-- End Article -->
        </main>
        <!-- End Main -->

        <!-- Start Footer -->
        <?php include '../../component/footer.php'  ?>
        <!-- End Footer -->
    </div>

    <!-- Start JS -->
    <?php include '../../component/js.php'; ?>
    <!-- End JS -->

    <script>
        $('#mobil').addClass('active')
    </script>
</body>

</html>