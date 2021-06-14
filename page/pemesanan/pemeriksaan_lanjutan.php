<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Start head -->

<head>
    <?php
    $title = "MobiRent - Pemeriksaan Lanjutan";
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
                            <h1>Pemeriksaan Lanjutan</h1>
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
                            <div class="tab_circle tab_circle3 tab_circle_last">
                                <div class="tab_num tab_num2">
                                    <p>4</p>
                                </div>
                                <h5>Selesai</h5>
                            </div>
                        </div>
                    </div>

                    <div class="detail-mobil">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mobil-gambar">
                                        <img src="../../assets/img/mobil/<?=$_SESSION['step_2'][2]?>.png" class="img-fluid" alt="Mobil Audi">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mobil-pesan-kanan">
                                        <p class="rental-tag"><?=$_SESSION['step_2'][3]?></p>
                                        <h3><?=($_SESSION['step_2'][0])?></h3>
                                        <div class="price-rating">
                                            <div class="price-rent">
                                                <h4>Rp <?=number_format($_SESSION['step_2'][1],2,',','.');?><span> / Hari</span></h4>
                                            </div>
                                            <div class="car-rating">
                                                <div class="stars" data-stars="1">
                                                    <svg height="21" width="23" class="star rating" data-rating="1">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" />
                                                    </svg>
                                                    <svg height="21" width="23" class="star rating" data-rating="2">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" />
                                                    </svg>
                                                    <svg height="21" width="23" class="star rating" data-rating="3">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" />
                                                    </svg>
                                                    <svg height="21" width="23" class="star rating" data-rating="4">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" />
                                                    </svg>
                                                    <svg height="21" width="23" class="star-p rating" data-rating="5">
                                                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" />
                                                    </svg>
                                                </div>
                                                <p>(123 rating)</p>
                                            </div>
                                        </div>
                                        <p class="mt-20 paragraf-deskripsi mb-20" style="text-align: justify;font-size: 19px;">
                                        <?=($_SESSION['step_2'][0])?> adalah crossover 5 pintu yang diproduksi oleh <?=($_SESSION['step_2'][3])?> mulai tahun 2011. Didesain oleh Julian Hoenig tahun 2006, mobil ini menggunakan mesin TDI 4 silinder bertenaga 204 PS (150 kW; 201 hp) dan torsi 400 N·m (295.02 ft·lbf ) dengan diesel particulate filter dan kontrol emisi Bluetec, sistem penggerak quattro dengan clutch Haldex clutch, girboks Audi S tronic dual-clutch, sistem suspensi depan MacPherson-strut.
                                        </p>
                                        <div class="car-features">
                                            <ul>
                                                <li>
                                                    <p class="paragraf-deskripsi">Model:2017</p>
                                                </li>
                                                <li>
                                                    <p class="paragraf-deskripsi">Otomatis</p>
                                                </li>
                                                <li>
                                                    <p class="paragraf-deskripsi">20kmpl</p>
                                                </li>
                                                <li>
                                                    <p class="paragraf-deskripsi">4 Silinder</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <p class="paragraf-deskripsi">Naviasi GPS</p>
                                                </li>
                                                <li>
                                                    <p class="paragraf-deskripsi">Rem Anti-Kunci</p>
                                                </li>
                                                <li>
                                                    <p class="paragraf-deskripsi">Tanpa Kunci Jarak Jauh</p>
                                                </li>
                                                <li>
                                                    <p class="paragraf-deskripsi">DVD Kursi Belakang</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="form-mobil">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <form action="../../function/rental.php" method="POST">
                                    <div class="row">
                                        <div class="col-12 col-md-8">
                                            <h3>Informasi Pribadi</h3>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Nama Depan</label>
                                                        <input type="text" name="nama_depan" class="form-control" id="nama_depan" placeholder="Masukkan nama depan anda" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Nama Belakang</label>
                                                        <input type="text" name="nama_belakang" class="form-control" id="nama_belakang" placeholder="Masukkan nama belakang anda" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">E-mail</label>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email anda" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Nomor Telepon</label>
                                                        <input type="text" name="no_telp" class="form-control" id="no_telp-p" placeholder="Masukkan nomor telepon anda" onkeypress='return isNumberKey(event)' required>
                                                    </div>
                                                </div>
                                            </div>

                                            <h3 class="mt-30">Rincian Pemesanan</h3>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Dari Alamat</label>
                                                        <textarea class="form-control" style="margin-top: 15px;" rows="2" placeholder="Masukkan alamat anda ... " name="dari_alamat" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Untuk Alamat</label>
                                                        <textarea class="form-control" style="margin-top: 15px;" rows="2" placeholder="Masukkan alamat anda ... " name="untuk_alamat" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Penumpang</label>
                                                        <select name="penumpang" id="penumpang" required>
                                                            <option value="1 Orang">1 Orang</option>
                                                            <option value="2 Orang">2 Orang</option>
                                                            <option value="3 Orang">3 Orang</option>
                                                            <option value="4 Orang">4 Orang</option>
                                                            <option value="5 Orang">5 Orang</option>
                                                            <option value="6 Orang">6 Orang</option>
                                                            <option value="7 Orang">7 Orang</option>
                                                            <option value="8 Orang">8 Orang</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Nomor Telepon</label>
                                                        <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Masukkan nomor telepon anda" onkeypress='return isNumberKey(event)' required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Tanggal Perjalanan</label>
                                                        <input type="date" name="tanggal_perjalanan" class="form-control" id="tanggal_perjalanan" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Waktu Perjalanan</label>
                                                        <input type="time" name="waktu_perjalanan" class="form-control" id="waktu_perjalanan" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;">Pesan Tambahan</label>
                                                        <textarea class="form-control" style="margin-top: 15px;" rows="3" placeholder="Masukkan isi pesan(jika ada) ... " name="pesan_tambahan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <h3>Cara Pembayaran</h3>
                                            <div class="pembayaran">
                                                <div class="booking-right">
                                                    <div class="rent-pembayaran">
                                                        <div class="bayar">
                                                            <input type="radio" id="ss-option" name="selector" value="Transfer Bank" required>
                                                            <label for="ss-option">Transfer Bank Langsung</label>
                                                            <div class="check">
                                                                <div class="inside"></div>
                                                            </div>
                                                            <p class="paragraf-deskripsi" style="margin-left: 30px; text-align: justify;">Lakukan pembayaran langsung ke rekening bank kami. Silakan gunakan ID Pesanan Anda sebagai referensi pembayaran. pesanan tidak akan dikirim sampai dana habis.</p>
                                                        </div>
                                                        <div class="bayar">
                                                            <input type="radio" id="f-option" name="selector" value="Cek" required>
                                                            <label for="f-option">Pembayaran Cek</label>
                                                            <div class="check">
                                                                <div class="inside"></div>
                                                            </div>
                                                        </div>
                                                        <div class="bayar">
                                                            <input type="radio" id="s-option" name="selector" value="Kartu Kredit" required>
                                                            <label for="s-option">Kartu Kredit</label>
                                                            <div class="check">
                                                                <div class="inside"></div>
                                                            </div>
                                                            <img src="../../assets/img/detail/master-card.jpg" alt="credit card">
                                                        </div>
                                                        <div class="bayar">
                                                            <input type="radio" id="t-option" name="selector" value="Paypal" required>
                                                            <label for="t-option">Paypal</label>
                                                            <div class="check">
                                                                <div class="inside"></div>
                                                            </div>
                                                            <img src="../../assets/img/detail/paypal.jpg" alt="credit card">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="action-btn">
                                                        <button type="submit" name="step_3" class="purple rent-btn">Pesan Sekarang</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
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