<!DOCTYPE html>
<html lang="en">

<!-- Start head -->

<head>
	<?php
	$title = "MobiRent - Tentang";
	include 'component/head.php'
	?>
</head>
<!-- End head -->

<body>
	<div id="app">
		<!-- Start Header -->
		<?php include 'component/header.php' ?>

		<div class="title_main_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="title_left_heading">
							<h1>Tentang MobiRent</h1>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="title_right_heading">
							<div class="title_right_cont_wrapper">
								<ul>
									<li class="barrier">
										<a href="index.php" style="text-decoration: none;">Beranda</a>
									</li>
									<li style="line-height: 1;">Tentang</li>
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
				<!-- Start Tentang -->
				<section class="title-bg-p">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
							<h2 class="heading-2 text-grey">Tentang MobiRent</h2>
							<hr>
							</div>
							<div class="col-12 col-md-6">
								<!-- Start Aside -->
								<aside class="d-flex justify-content-center items-center flex-column">
									<img src="assets/img/tentang/foto.png" alt="Tentang" style="width: 100%; border-radius:5px; margin-top:25px;">
								</aside>
								<!-- End Aside -->
							</div>
							<div class="col-12 col-md-6">
								<p class="mt-20 paragraf paragraf-deskripsi mb-30" style="text-align: justify; font-size: 20px;">
									MobiRent adalah suatu jasa sewa mobil yang telah berdiri sejak tahun 2015. Komitmen kami adalah memberikan kepuasan terbaik untuk semua pelanggan dengan pelayanan prima yang profesional sehingga pelanggan merasa puas dan senang dengan layanan jasa kami.
									<br><br>
									Selain itu kami juga menawarkan berbagai merk mobil dengan jaminan harga terbaik, sewa mobil dengan cepat dan mudah, Tidak ada biaya pembatalan, Dukungan Pelanggan 24/7, dan tentunya masih banyak lagi.
									<br><br>
									Website ini berfungsi untuk memudahkan dalam melakukan transaksi ketika ingin menyewa mobil di daerah Jakarta. Selain itu juga sebagai pengambilan nilai UAS kami di semester ini.
								</p>
							</div>
						</div>
					</div>
				</section>

				<section class="mitra">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-12">
								<center>
									<h2 class="heading-2 text-grey">Mitra Kami</h2>
									<hr>
									<p class="mt-20 paragraf-deskripsi">Kami juga menjaga kerjasama di beberapa jasa sewa mobil lainnya dengan baik.</p>
								</center>
							</div>
						</div>
						<div class="row partner-logos">
							<div class="col-md-3 col-6">
								<div class="partner-logo">
									<img class="img-fluid" src="assets/img/mitra/partner-1.png" alt="Mitra" srcset="assets/img/mitra/partner-1.png 1x, assets/img/mitra/partner-1.png 2x">
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="partner-logo">
									<img class="img-fluid" src="assets/img/mitra/partner-2.png" alt="Mitra" srcset="assets/img/mitra/partner-2.png 1x, assets/img/mitra/partner-2.png 2x">
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="partner-logo">
									<img class="img-fluid" src="assets/img/mitra/partner-3.png" alt="Mitra" srcset="assets/img/mitra/partner-3.png 1x, assets/img/mitra/partner-3.png 2x">
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="partner-logo">
									<img class="img-fluid" src="assets/img/mitra/partner-4.png" alt="Mitra" srcset="assets/img/mitra/partner-4.png 1x, assets/img/mitra/partner-4.png 2x">
								</div>
							</div>
						</div>
					</div>

				</section>
				<!-- End Tentang -->
			</article>
			<!-- End Article -->
		</main>
		<!-- End Main -->

		<!-- Start Footer -->
		<?php include 'component/footer.php'  ?>
		<!-- End Footer -->
	</div>

	<!-- Start JS -->
	<?php include 'component/js.php' ?>
	<!-- End JS -->

	<script>
		$('#tentang').addClass('active')
	</script>
</body>

</html>