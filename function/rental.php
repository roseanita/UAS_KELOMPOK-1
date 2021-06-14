<?php
session_start();
if (isset($_POST['step_1'])) {
    $_SESSION['step_1'] = $_POST;
    echo '<script>window.location.href = "../page/pemesanan/pilih_mobil.php";</script>';
} else if (isset($_GET['step_2'])) {
    $detail_mobil = explode(', ', $_GET['step_2']);
    $jenis_mobil = explode(' ', $detail_mobil[0]);
    $detail_mobil[] = $jenis_mobil[0];
    $_SESSION['step_2'] = $detail_mobil;
    echo '<script>window.location.href = "../page/pemesanan/pemeriksaan_lanjutan.php";</script>';
} else if (isset($_POST['step_3'])) {
    $_SESSION['step_3'] = $_POST;
    echo '<script>window.location.href = "../page/pemesanan/pemesanan_selesai.php";</script>';
}
