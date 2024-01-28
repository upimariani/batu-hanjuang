<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-text">
					<a href="#"><i class="fa fa-home"></i> Home</a>
					<span>Pesanan Saya</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Faq Section Begin -->
<div class="faq-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="faq-accordin">
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Tiket</th>
								<th>Harga</th>
								<th>Qty</th>
								<th>Subtotal</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($detail['detail_transaksi'] as $key => $value) {
							?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $value->nama_tiket ?></td>
									<?php
									if ($detail['transaksi']->level_member == '1') {
									?>
										<td>Rp. <?= number_format($value->harga - (2 / 100 * $value->harga)) ?></td>
									<?php
									} else if ($detail['transaksi']->level_member == '2') {
									?>
										<td>Rp. <?= number_format($value->harga - (3 / 100 * $value->harga)) ?></td>
									<?php
									} else {
									?>
										<td>Rp. <?= number_format($value->harga - (3 / 100 * $value->harga)) ?></td>
									<?php
									}
									?>

									<td><?= $value->qty ?></td>
									<?php
									if ($detail['transaksi']->level_member == '1') {
									?>
										<td>Rp. <?= number_format(($value->harga - (2 / 100 * $value->harga)) * $value->qty) ?></td>
									<?php
									} else if ($detail['transaksi']->level_member == '2') {
									?>
										<td>Rp. <?= number_format(($value->harga - (3 / 100 * $value->harga)) * $value->qty) ?></td>
									<?php
									} else {
									?>
										<td>Rp. <?= number_format(($value->harga - (3 / 100 * $value->harga)) * $value->qty) ?></td>
									<?php
									}
									?>
								</tr>
							<?php
							}
							?>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<th>Total</th>
								<th>Rp. <?= number_format($detail['transaksi']->tot_transaksi) ?></th>
							</tr>
							<tr>
								<?php
								if ($detail['transaksi']->review == NULL) {
								?>
									<form action="<?= base_url('Wisatawan/cTransaksi/review/' . $detail['transaksi']->id_transaksi) ?>" method="POST">
										<td><textarea class="form-control" name="review" placeholder="Tuliskan review anda..." required></textarea>
											<button type="submit" class="site-btn mt-3">Kirim</button>
										</td>
									</form>
								<?php
								} else {
								?>
									<td>&nbsp;</td>
								<?php
								}
								?>

								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td> <a href="<?= base_url('Wisatawan/cTransaksi') ?>" class="btn btn-danger">Kembali</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Faq Section End -->