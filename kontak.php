<!DOCTYPE html>
<html lang="en">

<!-- Start head -->

<head>
	<?php
	$title = "MobiRent - Kontak";
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
							<h1>Kontak</h1>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="title_right_heading">
							<div class="title_right_cont_wrapper">
								<ul>
									<li class="barrier">
										<a href="index.php" style="text-decoration: none;">Beranda</a>
									</li>
									<li style="line-height: 1;">Kontak</li>
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
				<section class="kontak">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-12">
								<center>
									<h2 class="heading-2 text-grey">Kontak Kami</h2>
									<hr>
									<p class="mt-20 paragraf-deskripsi">Untuk mempermudah pelanggan dalam menghubungi kami, <br> berikut informasi mengenai kontak kami.</p>
								</center>
							</div>
						</div>
						<div class="row mt-50">
							<div class="col-lg-4 col-md-6">
								<div class="layanan-i">
									<div class="layanan-img">
										<img src="assets/img/kontak/location.png" alt="Lokasi">
									</div>
									<div class="layanan-title">
										<h4>Letak Perusahaan</h4>
									</div>
									<div class="layanan-desc">
										<p>
											PT. MobiRent Jakarta
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="layanan-i">
									<div class="layanan-img">
										<img src="assets/img/kontak/telepone.png" alt="Telepone">
									</div>
									<div class="layanan-title">
										<h4>Telepone</h4>
									</div>
									<div class="layanan-desc">
										<p>
											<a href="tel:123456789">+1 234 567 8900</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="layanan-i">
									<div class="layanan-img">
										<img src="assets/img/kontak/Email.png" alt="Email">
									</div>
									<div class="layanan-title">
										<h4>Email</h4>
									</div>
									<div class="layanan-desc">
										<p>
											<a href="mailto:MobiRent@support.com">MobiRent@support.com</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
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
		$('#kontak').addClass('active')
	</script>
</body>

</html>