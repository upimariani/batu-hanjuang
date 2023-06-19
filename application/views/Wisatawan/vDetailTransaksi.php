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
									<td>Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?></td>
									<td><?= $value->qty ?></td>
									<td>
										Rp. <?= number_format(($value->harga - ($value->diskon / 100 * $value->harga)) * $value->qty) ?>
									</td>
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
								<td>&nbsp;</td>
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