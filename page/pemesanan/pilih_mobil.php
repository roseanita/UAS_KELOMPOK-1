<!DOCTYPE html>
<html lang="en">

<!-- Start head -->

<head>
	<?php
	$title = "MobiRent - Pilih Mobil";
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
							<div class="tab_circle tab_circle3">
								<div class="tab_num tab_num2">
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

					<div class="cari-mobil">
						<div class="row">
							<div class="col-12 col-md-12">
								<div class="row">
									<div class="col-12 col-md-6">
										<div class="row">
											<div class="col-12 col-md-6">
												<div class="form-group c-select">
													<label style="font-weight: bold;">Merek Mobil</label>
													<select name="merek_mobil" id="merek_mobil">
														<option value="Audi">Audi</option>
														<option value="Nissan">Nissan</option>
														<option value="Mitsubishi">Mitsubishi</option>
														<option value="Toyota">Toyota</option>
														<option value="Tesla">Tesla</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group c-select">
													<label style="font-weight: bold;">Penumpang</label>
													<select name="penumpang" id="penumpang">
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
										</div>
									</div>

									<div class="col-12 col-md-6">
										<div class="row">
											<div class="col-12 col-md-7">
												<div class="form-group">
													<label style="font-weight: bold;">Warna Mobil</label>
													<ul class="rn-car-color-filter">
														<li>
															<label>
																<input type="checkbox">
																<span class="rn-color-silver"></span>
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox">
																<span class="rn-color-black"></span>
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox">
																<span class="rn-color-white"></span>
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox">
																<span class="rn-color-red"></span>
															</label>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-12 col-md-5">
												<div class="form-group">
													<label style="font-weight: bold;">Sortir Berdasarkan</label>
													<select name="sortir" id="sortir">
														<option value="Default">Default</option>
														<option value="Relevan">Relevan</option>
														<option value="Harga: Tinggi ke Rendah">Harga: Tinggi ke Rendah</option>
														<option value="Harga: Rendah ke Tinggi">Harga: Rendah ke Tinggi</option>
														<option value="Nama: A sampai Z">Nama: A sampai Z</option>
														<option value="Nama: Z sampai A">Nama: Z sampai A</option>
														<span class="focus"></span>
													</select>
												</div>
											</div>
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="jenis-mobil">
											<div class="jenis-mobil-thumb">
												<a href="pemeriksaan_lanjutan.php">
													<img class="img-fluid mt-30" src="../../assets/img/mobil/jenis1.png" alt="" srcset="../../assets/img/mobil/jenis1.png 1x, ../../assets/img/mobil/jenis1.png 2x" >
												</a>
											</div>
											<div class="jenis-mobil-info">
												<h2 class="jenis-mobil-title">
													<a href="#">
														Audi Q3
													</a>
												</h2>
												<div class="rn-car-reviews">
													<div class="rn-car-stars">
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
													</div>
													<a>
														13 Ulasan
													</a>
												</div>
												<div class="rn-car-meta">
													<span>
														<img src="../../assets/img/detail/penumpang.png" alt="" style="width: 15px;">
														3 Penumpang
													</span>
													<span>
														<img src="../../assets/img/detail/bagasi.png" alt="" style="width: 15px;">
														2 bagasi
													</span>
												</div>
												<a class="rn-car-more-info" href="pemeriksaan_lanjutan.php">
													Informasi Lebih Lanjut
												</a>
											</div>
											<div class="jenis-mobil-pricing">
												<div class="rn-car-total-price">
													<span>
														Rp 640.080,00
													</span>
														/ Hari
												</div>
												
												<div class="mt-40 text-center">
													<a href="pemeriksaan_lanjutan.php" class="purple rent-btn">
													Pesan Sekarang
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="jenis-mobil">
											<div class="jenis-mobil-thumb">
												<a href="pemeriksaan_lanjutan.php">
													<img class="img-fluid mt-30" src="../../assets/img/mobil/jenis2.png" alt="" srcset="../../assets/img/mobil/jenis2.png 1x, ../../assets/img/mobil/jenis2.png 2x" >
												</a>
											</div>
											<div class="jenis-mobil-info">
												<h2 class="jenis-mobil-title">
													<a href="#">
														Nissan 370Z
													</a>
												</h2>
												<div class="rn-car-reviews">
													<div class="rn-car-stars">
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
													</div>
													<a>
														13 Ulasan
													</a>
												</div>
												<div class="rn-car-meta">
													<span>
														<img src="../../assets/img/detail/penumpang.png" alt="" style="width: 15px;">
														3 Penumpang
													</span>
													<span>
														<img src="../../assets/img/detail/bagasi.png" alt="" style="width: 15px;">
														2 bagasi
													</span>
												</div>
												<a class="rn-car-more-info" href="pemeriksaan_lanjutan.php">
													Informasi Lebih Lanjut
												</a>
											</div>
											<div class="jenis-mobil-pricing">
												<div class="rn-car-total-price">
													<span>
														Rp 1.052.576,00
													</span>
														/ Hari
												</div>
												<div class="mt-40 text-center">
													<a href="pemeriksaan_lanjutan.php" class="purple rent-btn">
													Pesan Sekarang
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="jenis-mobil">
											<div class="jenis-mobil-thumb">
												<a href="pemeriksaan_lanjutan.php">
													<img class="img-fluid mt-30" src="../../assets/img/mobil/jenis3.png" alt="" srcset="../../assets/img/mobil/jenis3.png 1x, ../../assets/img/mobil/jenis3.png 2x" >
												</a>
											</div>
											<div class="jenis-mobil-info">
												<h2 class="jenis-mobil-title">
													<a href="#">
														Toyota Camry
													</a>
												</h2>
												<div class="rn-car-reviews">
													<div class="rn-car-stars">
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
													</div>
													<a>
														13 Ulasan
													</a>
												</div>
												<div class="rn-car-meta">
													<span>
														<img src="../../assets/img/detail/penumpang.png" alt="" style="width: 15px;">
														3 Penumpang
													</span>
													<span>
														<img src="../../assets/img/detail/bagasi.png" alt="" style="width: 15px;">
														2 bagasi
													</span>
												</div>
												<a class="rn-car-more-info" href="pemeriksaan_lanjutan.php">
													Informasi Lebih Lanjut
												</a>
											</div>
											<div class="jenis-mobil-pricing">
												<div class="rn-car-total-price">
													<span>
														Rp 782.320,00
													</span>
													/ Hari
												</div>
												<div class="mt-40 text-center">
													<a href="pemeriksaan_lanjutan.php" class="purple rent-btn">
													Pesan Sekarang
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="jenis-mobil">
											<div class="jenis-mobil-thumb">
												<a href="pemeriksaan_lanjutan.php">
													<img class="img-fluid mt-30" src="../../assets/img/mobil/jenis4.png" alt="" srcset="../../assets/img/mobil/jenis4.png 1x, ../../assets/img/mobil/jenis4.png 2x" >
												</a>
											</div>
											<div class="jenis-mobil-info">
												<h2 class="jenis-mobil-title">
													<a href="#">
													BMW X3
													</a>
												</h2>
												<div class="rn-car-reviews">
													<div class="rn-car-stars">
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
													</div>
													<a>
														13 Ulasan
													</a>
												</div>
												<div class="rn-car-meta">
													<span>
														<img src="../../assets/img/detail/penumpang.png" alt="" style="width: 15px;">
														3 Penumpang
													</span>
													<span>
														<img src="../../assets/img/detail/bagasi.png" alt="" style="width: 15px;">
														2 bagasi
													</span>
												</div>
												<a class="rn-car-more-info" href="pemeriksaan_lanjutan.php">
													Informasi Lebih Lanjut
												</a>
											</div>
											<div class="jenis-mobil-pricing">
												<div class="rn-car-total-price">
													<span>
														Rp 711.200,00
													</span>
													/ Hari
												</div>
												<div class="mt-40 text-center">
													<a href="pemeriksaan_lanjutan.php" class="purple rent-btn">
													Pesan Sekarang
													</a>
												</div>
											</div>
										</div>
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
	</script>
</body>

</html>