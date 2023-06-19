<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section Begin -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="ht-left">
					<div class="mail-service">
						<i class=" fa fa-envelope"></i>
						batu_hanjuang@gmail.com
					</div>
					<div class="phone-service">
						<i class=" fa fa-phone"></i>
						+65 11.188.888
					</div>
				</div>
				<div class="ht-right">
					<?php
					if ($this->session->userdata('id_wisatawan') == '') {
					?>
						<a href="<?= base_url('Wisatawan/cLogin') ?>" class="login-panel"><i class="fa fa-user"></i>Login</a>
					<?php
					} else {
					?>
						<a href="<?= base_url('Wisatawan/cLogin/logout') ?>" class="login-panel"><i class="fa fa-user"></i>Logout</a>
					<?php
					}
					?>

				</div>
			</div>
		</div>
		<div class="container">
			<div class="inner-header">
				<div class="row">
					<div class="col-lg-6 col-md-2">
						<div class="logo">
							<h2>
								OBYEK WISATA TAMAN BATU HANJUANG
							</h2>
						</div>
					</div>
					<div class="col-lg-6 text-right col-md-3">
						<?php
						if ($this->session->userdata('id_wisatawan') != '') {
						?>
							<ul class="nav-right">
								<li class="cart-icon">
									<a href="#">
										<i class="icon_bag_alt"></i>
										<?php
										$qty = 0;
										foreach ($this->cart->contents() as $key => $value) {
											$qty += $value['qty'];
										}
										?>
										<span><?= $qty ?></span>
									</a>
									<div class="cart-hover">
										<div class="select-items">
											<table>
												<tbody>
													<?php foreach ($this->cart->contents() as $key => $value) {
													?>
														<tr>
															<td class="si-pic"><img style="width: 150px;" src="<?= base_url('asset/gambar_tiket.png') ?>" alt=""></td>
															<td class="si-text">
																<div class="product-selected">
																	<p>Rp. <?= number_format($value['price']) ?> x <?= $value['qty'] ?></p>
																	<h6><?= $value['name'] ?></h6>
																</div>
															</td>
															<td class="si-close">
																<i class="ti-close"></i>
															</td>
														</tr>
													<?php
													} ?>


												</tbody>
											</table>
										</div>
										<div class="select-total">
											<span>total:</span>
											<h5>Rp. <?= number_format($this->cart->total())  ?></h5>
										</div>
										<div class="select-button">
											<a href="<?= base_url('Wisatawan/cHome/cart') ?>" class="primary-btn view-card">VIEW CARD</a>
											<a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
										</div>
									</div>
								</li>
								<li class="cart-price">Rp. <?= number_format($this->cart->total())  ?></li>
							</ul>
						<?php
						}
						?>

					</div>
				</div>
			</div>
		</div>
		<div class="nav-item">
			<div class="container">
				<div class="nav-depart">
					<div class="depart-btn">
						<i class="ti-menu"></i>
						<span>Kategori Tiket</span>
						<ul class="depart-hover">
							<li><a>ONE People</a></li>
							<li><a>Family</a></li>
							<li><a>Gathering</a></li>
						</ul>
					</div>
				</div>
				<nav class="nav-menu mobile-menu">
					<ul>
						<li <?php if ($this->uri->segment(1) == 'Wisatawan' && $this->uri->segment(2) == 'cHome') {
								echo 'class="active"';
							}  ?>><a href="<?= base_url('Wisatawan/cHome') ?>">Home</a></li>

						<?php
						if ($this->session->userdata('id_wisatawan') != '') {
						?>
							<li <?php if ($this->uri->segment(1) == 'Wisatawan' && $this->uri->segment(2) == 'cTransaksi') {
									echo 'class="active"';
								}  ?>><a href="<?= base_url('Wisatawan/cTransaksi') ?>">Pesanan Saya</a></li>
						<?php
						}
						?>

						<!-- <li><a href="./blog.html">Profil</a></li> -->

					</ul>
				</nav>
				<div id="mobile-menu-wrap"></div>
			</div>
		</div>
	</header>
	<!-- Header End -->