<!DOCTYPE html>
<html lang="en">

<!-- Start head -->

<head>
	<?php
	$title = "MobiRent - Beranda";
	include '../../component_2/head.php'
	?>
</head>
<!-- End head -->

<body>
	<div id="app">
		<!-- Start Header -->
		<?php include '../../component_2/header.php' ?>

		<header id="background">
			<div class="jumbotron text-center">
				<div class="divider">
					<h1>Layanan Sewa Mobil #1 Di Jakarta</h1>
					<p>Pilih Mobil Sekarang & Nikmati Layanannya</p>
				</div>
				<div class="order text-center">
					<a id="button-h" href="mobil.php" class="rent-btn" style="text-decoration: none;">Sewa Sekarang</a>
					<!-- <a href="" class="btn btn-outline text-white">Order Now!</a> -->
				</div>
			</div>
		</header>
		<!-- End Header -->

		<!-- Start Main -->
		<main id="main">
			<!-- Start Article -->
			<article>
				<!-- Start Tentang -->
				<section class="tentang">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-8">
								<center>
									<h2 class="heading-2 text-grey">Mengapa Memilih Kami?</h2>
									<hr>
									<p class="paragraf mt-20 paragraf-deskripsi">
										Karena kami memiliki komitmen untuk memberikan kepuasan terbaik kepada semua pelanggan dengan pelayanan prima yang profesional sehingga pelanggan merasa puas dan senang dengan layanan jasa kami. Selain itu kami juga menawarkan berbagai merk mobil dengan jaminan harga terbaik.
									</p>
									<div class="col-md-4 mt-30">
										<a href="tentang.php" class="purple rent-btn">Selanjutnya</a>
									</div>
								</center>
							</div>
							<div class="col-12 col-md-4">
								<!-- Start Aside -->
								<aside class="img_tentang d-flex justify-content-center items-center flex-column">
									<img src="../../assets/img/tentang.png" alt="">
								</aside>
								<!-- End Aside -->
							</div>
						</div>
					</div>
				</section>
				<!-- End Tentang -->

				<!-- Start Mobil -->
				<section class="mobil">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-12">
								<center>
									<h2 class="heading-2 text-grey">Pilih Mobil Terbaikmu</h2>
									<hr>
									<p class="mt-20 paragraf-deskripsi">Kami merawat dan rutin service mobil sehingga mobil pun dapat digunakan <br> dengan performa terbaik.</p>
								</center>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="thumbnail-img">
									<a class="list_mobil" href="pemesanan/detail_mobil.php">
										<div class="box blury-card">
											<img src="../../assets/img/mobil/m1.jpg" alt="2015 Shevrolet Corvette Stingray Z51">
											<div class="frame">
												<h2 class="heading-mobil">2015 Shevrolet Corvette Stingray Z51</h2>
												<p class="paragraf-mobil mt-30"><b>Rp 1.709.490,00 / Day</b></p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="thumbnail-img">
									<a class="list_mobil" href="pemesanan/detail_mobil.php">
										<div class="box blury-card">
											<img src="../../assets/img/mobil/m2.jpg" alt="2020 Audi New Generation P00234">
											<div class="frame">
												<h2 class="heading-mobil">2020 Audi New Generation P00234</h2>
												<p class="paragraf-mobil mt-30"><b>Rp 3.276.522 / Day</b></p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="thumbnail-img">
									<a class="list_mobil" href="pemesanan/detail_mobil.php">
										<div class="box blury-card">
											<img src="../../assets/img/mobil/m3.jpg" alt="2019 Shevrolet Corvette Stingray Red">
											<div class="frame">
												<h2 class="heading-mobil">2019 Shevrolet Corvette Stingray Red</h2>
												<p class="paragraf-mobil mt-30"><b>Rp 3.276.522 / Day</b></p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<br>
					<center>
						<div class="col-md-4">
							<a href="mobil.php" class="purple rent-btn">Selanjutnya</a>
						</div>
					</center>
				</section>
				<!-- End Mobil -->

				<!-- Start Saran dan Masukan -->
				<section class="saran">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-12">
								<center>
									<h2 class="heading-2 text-grey">Saran dan Masukan</h2>
									<hr>
									<p class="mt-20 paragraf-deskripsi">Saran dan masukan yang kalian berikan sangat berarti <br> untuk perbaikan website kami.</p>
								</center>
							</div>
							<div class="col-12 col-md-12 mt-50">
								<form>
									<div class="row">
										<div class="col-12 col-md-6">
											<div class="form-pesan">
												<label for="nama_depan">Nama Depan</label>
												<input type="text" name="nama_depan" class="form-control" id="nama_depan" placeholder="Masukkan nama depan anda!">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-pesan">
												<label for="nama_belakang">Nama Belakang</label>
												<input type="text" name="nama_belakang" class="form-control" id="nama_belakang" placeholder="Masukkan nama_belakang anda!">
											</div>
										</div>

										<div class="col-12 col-md-6">
											<div class="form-pesan">
												<label for="email">E-Mail</label>
												<input type="email" class="form-control" id="email" placeholder="Masukkan email anda!">
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="form-pesan">
												<label for="telp">Telepone</label>
												<input type="text" class="form-control" id="telp" onkeypress='return isNumberKey(event)' placeholder="Masukkan nomor telepone anda!">
											</div>
										</div>
									</div>
									<div class="form-pesan">
										<label for="pesan">Pesan</label>
										<textarea class="form-control" rows="5" placeholder="Isi pesan ... "></textarea>
									</div>
									<div class="mt-40 text-center">
										<a href="" class="purple rent-btn">Kirim Pesan</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
				<!-- End Saran dan Masukan -->
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

	<script src="../../assets/js/index.js"></script>
	<script>
		$('#beranda').addClass('active')

		function isNumberKey(evt) {
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57))
				return false;
			return true;
		}
	</script>
</body>

</html>