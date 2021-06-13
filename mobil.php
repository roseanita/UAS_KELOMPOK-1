<!DOCTYPE html>
<html lang="en">

<!-- Start head -->

<head>
	<?php
	$title = "MobiRent - Mobil";
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
							<div class="tab_circle tab_circle2">
								<div class="tab_num tab_num2">
									<p>2</p>
								</div>
								<h5>Mobil</h5>
							</div>
							<div class="tab_circle tab_circle3">
								<div class="tab_num tab_num3">
									<p>3</p>
								</div>
								<h5>Periksa</h5>
							</div>
							<div class="tab_circle tab_circle3 tab_circle_last">
								<div class="tab_num tab_num3">
									<p>4</p>
								</div>
								<h5>Selesai</h5>
							</div>
						</div>
					</div>

					<div class="form-search">
						<div class="form-heading">
							<h3>Temukan Mobil Terbaikmu!</h3>
						</div>
						<div class="row">
							<div class="col-12 col-md-12">
								<form action="#">
									<div class="row">
										<div class="col-12 col-md-6">
											<div class="row">
												<div class="col-12 col-md-12">
													<div class="form-group">
														<label style="font-weight: bold;">Lokasi Pengambilan</label>
														<input type="text" name="lokasi_pengambilan" class="form-control" id="lokasi_pengambilan" placeholder="Lokasi Pengambilan">
													</div>
												</div>

												<div class="col-12 col-md-12">
													<label style="font-weight: bold;">Waktu Pengambilan</label>
												</div>
												<div class="col-6 col-md-6">
													<div class="form-group">
														<input type="date" name="waktu_pengambilan" class="form-control" id="waktu_pengambilan">
													</div>
												</div>
												<div class="col-6 col-md-6">
													<div class="form-group">
														<input type="time" name="jam_pengambilan" class="form-control" id="jam_pengambilan">
													</div>
												</div>
											</div>
										</div>

										<div class="col-12 col-md-6">
											<div class="row">
												<div class="col-12 col-md-12">
													<div class="form-group">
														<label style="font-weight: bold;">Lokasi Pengantaran</label>
														<input type="text" name="lokasi_pengantaran" class="form-control" id="lokasi_pengantaran" placeholder="Lokasi Pengantaran">
													</div>
												</div>

												<div class="col-12 col-md-12">
													<label style="font-weight: bold;">Waktu Pengantaran</label>
												</div>
												<div class="col-6 col-md-6">
													<div class="form-group">
														<input type="date" name="waktu_pengantaran" class="form-control" id="waktu_pengantaran">
													</div>
												</div>
												<div class="col-6 col-md-6">
													<div class="form-group">
														<input type="time" name="jam_pengantaran" class="form-control" id="jam_pengantaran">
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-12 col-xl-12 mt-20">
											<button type="submit" class="purple rent-btn" style="font-size: 15px; margin:0; cursor:pointer;">Cari... </button>
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
		<?php include 'component/footer.php'  ?>
		<!-- End Footer -->
	</div>

	<!-- Start JS -->
	<?php include 'component/js.php' ?>
	<!-- End JS -->

	<script>
		$('#mobil').addClass('active')
	</script>
</body>

</html>