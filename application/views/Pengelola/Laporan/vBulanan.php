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
								<th>Id Transaksi</th>
								<th>Tanggal Transaksi</th>
								<th>Atas Nama</th>
								<th>Produk</th>
								<th>Sub Total per Transaksi</th>
								<th>Member</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$total = 0;
							foreach ($laporan as $key => $value) {
							?>

								<tr>
									<td><?= $value->id_transaksi ?></td>
									<td><?= $value->tgl_transaksi ?></td>
									<td><?= $value->nama_wisatawan ?></td>
									<td><?= $value->nama_tiket ?></td>
									<td>Rp. <?= number_format($value->tot_transaksi) ?></td>

									<td><?php
										if ($value->level_member == '1') {
											echo 'Clasic';
										} else if ($value->level_member == '2') {
											echo 'Silver';
										} else if ($value->level_member == '3') {
											echo 'Gold';
										}
										?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
				<!-- table container -->
				<!-- <button type="button" onclick="window.print()" class="btn btn-primary btn-block text-uppercase mb-3">Cetak</button> -->

			</div>
		</div>

	</div>
</div>
