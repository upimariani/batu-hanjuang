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

				<div class="tm-product-table-container">

					<table class="table table-hover tm-table-small tm-product-table">
						<thead>
							<tr>
								<th scope="col">&nbsp;</th>
								<th scope="col">Transaksi Atas Nama</th>
								<th scope="col">Tanggal Transaksi</th>
								<th scope="col">Total Transaksi</th>
								<th scope="col">Status Transaksi</th>
								<th scope="col">Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($transaksi as $key => $value) {
							?>
								<tr>
									<th scope="row"><input type="checkbox" /></th>
									<td class="tm-product-name"><?= $value->nama_wisatawan ?></td>
									<td><?= $value->tgl_transaksi ?></td>
									<td>Rp. <?= number_format($value->tot_transaksi)  ?></td>
									<td><?php if ($value->stat_transaksi == '0') {
										?>
											<span class="badge badge-danger">Belum Bayar</span>
										<?php
										} else if ($value->stat_transaksi == '1') {
										?>
											<span class="badge badge-warning">Menunggu Konfirmasi </span>
										<?php
										} else {
										?>
											<span class="badge badge-success">Selesai </span>
										<?php
										}
										?>

									</td>
									<td>
										<a href="<?= base_url('Admin/cTransaksi/detail_transaksi/' . $value->id_transaksi) ?>" class="tm-product-delete-link">
											<i class="fas fa-shopping-cart tm-product-delete-icon"></i>
										</a>
										<?php
										if ($value->stat_transaksi == '1') {
										?>
											<a href="<?= base_url('Admin/cTransaksi/konfirmasi/' . $value->id_transaksi) ?>" class="tm-product-delete-link">
												<i class="fas fa-check tm-product-delete-icon"></i>
											</a>
										<?php
										}
										?>

									</td>
								</tr>
							<?php
							}
							?>

						</tbody>
					</table>
				</div>
				<!-- table container -->

			</div>
		</div>

	</div>
</div>