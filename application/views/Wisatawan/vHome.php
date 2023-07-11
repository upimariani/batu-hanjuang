<!-- Hero Section Begin -->
<section class="hero-section">
	<div class="hero-items owl-carousel">
		<div class="single-hero-items set-bg" data-setbg="<?= base_url('asset/pemandangan3.png') ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<h1>Objek Wisata Batu Hanjuang</h1>

					</div>
				</div>
				<div class="off-card">
					<h2>Keep Today!</h2>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- Hero Section End -->


<!-- Women Banner Section Begin -->
<section class="women-banner spad">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<div class="product-large set-bg" data-setbg="<?= base_url('asset/pemandangan.jpg') ?>">
					<h2>Ticket</h2>
					<a href="#">Objek Wisata Batu Hanjuang</a>
				</div>
			</div>
			<div class="col-lg-8 offset-lg-1">
				<div class="filter-control">
					<h3>Tiket Obyek Wisata Batu Hanjuang</h3>
				</div>
				<div class="product-slider owl-carousel">
					<!-- <?php
							foreach ($tiket as $key => $value) {
							?>
						<div class="product-item">
							<div class="pi-pic">
								<img src="<?= base_url('asset/gambar_tiket.png') ?>" alt="">
								<?php
								if ($value->diskon != NULL) {
								?>
									<div class="sale">Sale <?= $value->diskon ?>%</div>
								<?php
								}
								?>

								<div class="icon">
									<i class="icon_heart_alt"></i>
								</div>
								<ul>
									<li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
									<?php
									if ($this->session->userdata('id_wisatawan') != '') {
									?>
										<li class="quick-view"><a href="<?= base_url('Wisatawan/cHome/add_to_cart/' . $value->id_tiket) ?>">+ Add To Cart</a></li>
									<?php
									} else {
									?>
										<li class="quick-view"><a href="<?= base_url('Wisatawan/cLogin') ?>">+ Add To Cart</a></li>
									<?php
									}
									?>

									<li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
								</ul>
							</div>
							<div class="pi-text">
								<div class="catagory-name"><?php if ($value->type_tiket == '1') {
															?>On People
									<?php
															} else if ($value->type_tiket == '2') {
									?>Family
									<?php
															} else {
									?>Gathering
								<?php
															}
								?>
								</div>
								<a href="#">
									<h5><?= $value->nama_tiket ?></h5>
								</a>
								<div class="product-price">
									Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?>
									<?php if ($value->diskon != NULL) {
									?>
										<span>Rp. <?= number_format($value->harga) ?></span>
									<?php
									} ?>

								</div>
							</div>
						</div>
					<?php
							}
					?> -->
					<?php
					foreach ($tiket as $key => $value) {
					?>
						<div class="product-item">
							<div class="pi-pic">
								<img src="<?= base_url('asset/gambar_tiket.png') ?>" alt="">
								<?php
								if ($this->session->level == '1') {
								?>
									<div class="sale">Sale of member 5%</div>
								<?php
								}
								?>

								<div class="icon">
									<i class="icon_heart_alt"></i>
								</div>
								<ul>
									<li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
									<?php
									if ($this->session->userdata('id_wisatawan') != '') {
									?>
										<li class="quick-view"><a href="<?= base_url('Wisatawan/cHome/add_to_cart/' . $value->id_tiket) ?>">+ Add To Cart</a></li>
									<?php
									} else {
									?>
										<li class="quick-view"><a href="<?= base_url('Wisatawan/cLogin') ?>">+ Add To Cart</a></li>
									<?php
									}
									?>

									<li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
								</ul>
							</div>
							<div class="pi-text">
								<div class="catagory-name"><?php if ($value->type_tiket == '1') {
															?>On People
									<?php
															} else if ($value->type_tiket == '2') {
									?>Family
									<?php
															} else {
									?>Gathering
								<?php
															}
								?>
								</div>
								<a href="#">
									<h5><?= $value->nama_tiket ?></h5>
								</a>
								<div class="product-price">
									Rp. <?= number_format($value->harga - (5 / 100 * $value->harga)) ?>
									<?php if ($this->session->level == '1') {
									?>
									<?php
									} ?>

								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Women Banner Section End -->