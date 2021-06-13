<!DOCTYPE html>
<html lang="en">

<!-- Start head -->

<head>
    <?php
    $title = "MobiRent - Pemesanan Selesai";
    include '../../component/head.php'
    ?>
</head>
<!-- End head -->

<body>
    <div id="app">
        <!-- Start Header -->
        <?php include '../../component/header.php' ?>

        <div class="title_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="title_left_heading">
                            <h1>Pilihan Mobil</h1>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="title_right_heading">
                            <div class="title_right_cont_wrapper">
                                <ul>
                                    <li class="barrier">
                                        <a href="index.php" style="text-decoration: none;">Beranda</a>
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
                                    <h4 style="font-size: 25px;">NOMOR PESANAN: <span>#887768</span></h4>
                                    <hr>
                                    <h4 style="font-size: 23px;">RINGKASAN</h4>
                                    <ul class="row list-unstyled">
                                        <li class="col-md-6">
                                            <h6 style="font-size: 20px;">Lokasi</h6>
                                            <p style="font-size: 17px;">Pengambilan <span>Barcelona, Airport</span>
                                            </p>
                                            <p style="font-size: 17px;">Pengantaran <span>Barcelona, Airport</span>
                                            </p>
                                        </li>
                                        <li class="col-md-6">
                                            <h6 style="font-size: 20px;">TANGGAL</h6>
                                            <p style="font-size: 17px;">Pengambilan <span>16-01-2018 @ 10:00</span>
                                            </p>
                                            <p style="font-size: 17px;">Pengantaran <span>16-01-2018 @ 10:00</span>
                                            </p>
                                        </li>
                                        <li class="col-md-6">
                                            <h6 style="font-size: 20px;">Mobil</h6>
                                            <p style="font-size: 17px;">Audi Q3 <span>1 Hari</span></p>
                                        </li>
                                        <li class="col-md-6">
                                            <h6 style="font-size: 20px;">Total</h6>
                                            <p style="font-size: 17px;">Pembayaran <span><b>Rp 640.080,00</b></span>
                                            </p>
                                        </li>
                                        <li class="col-md-12">
                                            <h6 style="font-size: 20px;">Informasi Tagihan</h6>
                                            <p style="font-size: 17px;">Nama_Depan Nama_Belakang
                                                <br>Email
                                                <br>No telepone
                                                <br>Alamat_1
                                                <br>Alamat-2
                                                <br>Tanggal Perjalanan
                                                <br>Waktu Perjalanan
                                            </p>
                                        </li>
                                        <li class="col-md-12">
                                            <h6 style="font-size: 20px;">Informasi Tambahan</h6>
                                            <p style="font-size: 17px;">Isi tambahan informasi.</p>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="contect_btn contect_btn_contact">
                                        <ul>
                                            <li>
                                                <center>
                                                    <a href="#" class="purple rent-btn">Print Order</a>
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
    <?php include '../../component/js.php' ?>
    <!-- End JS -->

    <script>
        $('#mobil').addClass('active')

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
</body>

</html>