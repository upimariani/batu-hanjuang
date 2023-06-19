<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-text product-more">
					<a href="./home.html"><i class="fa fa-home"></i> Home</a>
					<a href="./shop.html">Shop</a>
					<span>Shopping Cart</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
	<div class="container">
		<div class="row">

			<div class="col-lg-12">
				<?php echo form_open('Wisatawan/cHome/update_cart'); ?>
				<div class="cart-table">
					<table>
						<thead>
							<tr>
								<th>Image</th>
								<th class="p-name">Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th><i class="ti-close"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 1;
							foreach ($this->cart->contents() as $key => $value) {
							?>
								<tr>
									<td class="cart-pic first-row"><img style="width: 150px;" src="<?= base_url('asset/gambar_tiket.png') ?>" alt=""></td>
									<td class="cart-title first-row">
										<h5><?= $value['name'] ?></h5>
									</td>
									<td class="p-price first-row">Rp. <?= number_format($value['price']) ?></td>
									<td class="qua-col first-row">
										<div class="quantity">
											<div class="pro-qty">
												<input type="text" name="<?= $i . '[qty]' ?>" value="<?= $value['qty'] ?>">
											</div>
										</div>
									</td>
									<td class="total-price first-row">Rp. <?= number_format($value['qty'] * $value['price']) ?></td>
									<td class="close-td first-row"><a href="<?= base_url('Wisatawan/cHome/delete/' . $value['rowid']) ?>"><i class="ti-close"></i></a></td>
								</tr>
							<?php
								$i++;
							}
							?>
							<tr>
								<td>
									<div class="proceed-checkout">
										<button type="submit" class="proceed-btn ml-3">UPDATE CART</button><br>
									</div>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
				<div class="row">
					<div class="col-lg-4">
					</div>
					<div class="col-lg-4 offset-lg-4">
						<div class="proceed-checkout">
							<ul>
								<li class="subtotal">Subtotal <span>Rp. <?= number_format($this->cart->total()) ?></span></li>
								<li class="cart-total">Total <span>Rp. <?= number_format($this->cart->total()) ?></span></li>
							</ul>
							<a href="<?= base_url('Wisatawan/cHome/checkout') ?>" class="proceed-btn">PROCEED TO CHECK OUT</a>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>

		</div>
	</div>
</section>
<!-- Shopping Cart Section End -->

<!-- Partner Logo Section Begin -->
<div class="partner-logo">
	<div class="container">
		<div class="logo-carousel owl-carousel">
			<div class="logo-item">
				<div class="tablecell-inner">
					<img src="img/logo-carousel/logo-1.png" alt="">
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img src="img/logo-carousel/logo-2.png" alt="">
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img src="img/logo-carousel/logo-3.png" alt="">
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img src="img/logo-carousel/logo-4.png" alt="">
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img src="img/logo-carousel/logo-5.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Partner Logo Section End -->