<div class="top_header_wrapper float_left">
    <div class="container">
        <div class="top_header_left_side_wrapper float_left">
            <p>Telp : +1 234 567 8900</p>
        </div>
        <div class="top_header_right_side_wrapper float_left">
            <div class="top_header_left_wrapper">
                <ul>
                    <li class="barrier">
                        <p>MobiRent@support.com</p>
                    </li>
                    <li style="line-height: 1;">
                        <p>Senin s/d Jum : 9:00 pagi sampai 6:00 sore</p>
                    </li>
                </ul>
            </div>
            <div class="top_header_all_select_box_wrapper">
                <ul>
                    <li class="login">
                        <?php if (scandir("../../page")) { ?>
                            <a href="../../index.php">
                                &nbsp;&nbsp;Keluar
                            </a>
                        <?php } else { ?>
                            <a href="auth/login.php">
                                &nbsp;&nbsp;Masuk
                            </a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<nav class="navbar">
    <?php if (scandir("../../page")) { ?>
        <div class="logo">
            <img src="../../assets/img/logo/MobiRent.png" alt="MobiRent">
        </div>
        <ul>
            <li id="beranda">
                <a href="../pengguna/index.php" class="page-scroll">Beranda</a>
            </li>
            <li id="tentang">
                <a href="../pengguna/tentang.php" class="page-scroll">Tentang</a>
            </li>
            <li id="mobil">
                <a href="../pengguna/mobil.php" class="page-scroll">Mobil</a>
            </li>
            <li id="tim">
                <a href="../pengguna/tim.php" class="page-scroll">Tim</a>
            </li>
            <li id="layanan">
                <a href="../pengguna/layanan.php" class="page-scroll">Layanan</a>
            </li>
            <li id="kontak">
                <a href="../pengguna/kontak.php" class="page-scroll">Kontak</a>
            </li>
        </ul>
    <?php } else { ?>
        <div class="logo">
            <img src="assets/img/logo/MobiRent.png" alt="MobiRent">
        </div>
        <ul>
            <li id="beranda">
                <a href="index.php" class="page-scroll">Beranda</a>
            </li>
            <li id="tentang">
                <a href="tentang.php" class="page-scroll">Tentang</a>
            </li>
            <li id="mobil">
                <a href="mobil.php" class="page-scroll">Mobil</a>
            </li>
            <li id="tim">
                <a href="tim.php" class="page-scroll">Tim</a>
            </li>
            <li id="layanan">
                <a href="layanan.php" class="page-scroll">Layanan</a>
            </li>
            <li id="kontak">
                <a href="kontak.php" class="page-scroll">Kontak</a>
            </li>
        </ul>
    <?php } ?>

    <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>