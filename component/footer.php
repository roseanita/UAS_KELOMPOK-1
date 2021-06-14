<footer>
    <div class="container">
        <div class="sec tentang-f">
            <?php if (scandir("../../page")) { ?>
                <img src="../../assets/img/logo/MobiRent-2.png" alt="MobiRent-2">
            <?php } else { ?>
                <img src="assets/img/logo/MobiRent-2.png" alt="MobiRent-2">
            <?php } ?>
            <p class="text-align-justify">
                MobiRent dibuat oleh Kelompok 1 - Sistem Informasi untuk membantu dalam menyewa mobil di daerah Jakarta, dan juga sebagai pengambilan nilai UAS.
            </p>
        </div>
        <div class="sec menu">
            <h2>Tautan Langsung</h2>
            <?php if (scandir("../../page")) { ?>
                <ul>
                    <li><a href="../pengguna/index.php">Beranda</a></li>
                    <li><a href="../pengguna/tentang.php">Tentang</a></li>
                    <li><a href="../pengguna/mobil.php">Mobil</a></li>
                    <li><a href="../pengguna/tim.php">Tim Kami</a></li>
                    <li><a href="../pengguna/layanan.php">Layanan</a></li>
                    <li><a href="../pengguna/kontak.php">Kontak</a></li>
                </ul>
            <?php } else { ?>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="tentang.php">Tentang</a></li>
                    <li><a href="mobil.php">Mobil</a></li>
                    <li><a href="tim.php">Tim Kami</a></li>
                    <li><a href="layanan.php">Layanan</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            <?php } ?>
        </div>
        <div class="sec contact">
            <h2>Hubungi Kami</h2>
            <ul class="info">
                <li>
                    <span>
                        Jl. Bojong Raya No.122, RT.14/RW.14, <br> Rw. Buaya, Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11740
                    </span>
                </li>
                <li>
                    <p><a href="tel:123456789">+1 234 567 8900</a></p>
                </li>
                <li>
                    <p><a href="mailto:MobiRent@support.com">MobiRent@support.com</a></p>
                </li>
            </ul>
        </div>
    </div>
    <div class="copyrightText">
        <p>Copyright &copy; 2021 Kelompok 1. All Rights Reserved.</p>
    </div>
</footer>