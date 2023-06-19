<div class="container mt-5">
	<div class="row tm-content-row">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
			<div class="tm-bg-primary-dark tm-block tm-block-products">
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success" role="alert">
						<?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<div class="row">
					<div class="col-lg-6">
						<div class="text-light">
							<h3>Detail Transaksi</h3>
							<p>Tanggal Transaksi : <?= $transaksi['transaksi']->tgl_transaksi ?></p>
							<p>Atas Nama : <?= $transaksi['transaksi']->nama_wisatawan ?></p>
							<p>Total Transaksi : <strong> Rp. <?= number_format($transaksi['transaksi']->tot_transaksi)  ?></strong></p>
						</div>
					</div>
					<?php
					if ($transaksi['transaksi']->bukti_pembayaran != '0') {
					?>
						<div class="col-lg-6">
							<div class="text-light mb-3">
								<h4>Bukti Pembayaran</h4>
								<img style="width: 150px;" src="<?= base_url('asset/bukti-pembayaran/' . $transaksi['transaksi']->bukti_pembayaran) ?>">

							</div>
						</div>
					<?php
					}
					?>

				</div>


				<div class="tm-product-table-container">

					<table class="table table-hover tm-table-small tm-product-table">
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
							foreach ($transaksi['detail_transaksi'] as $key => $value) {
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

						</tbody>
					</table>
					<a href="<?= base_url('Admin/cTransaksi') ?>" class="btn btn-danger mt-3">Kembali</a>
					<button onclick="window.print()" class="btn btn-warning mt-3">Print</button>
				</div>
				<!-- table container -->

			</div>
		</div>

	</div>
</div>