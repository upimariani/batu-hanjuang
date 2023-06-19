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
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success" role="alert">
						<?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<div class="faq-accordin">
					<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-heading">
								<a data-toggle="collapse" data-target="#collapseOne">
									Pesanan Belum Bayar
								</a>
							</div>
							<div id="collapseOne" class="collapse show" data-parent="#accordionExample">
								<div class="card-body">
									<table class="table">
										<thead>
											<tr>
												<th>Tanggal Transaksi</th>
												<th>Total Transaksi</th>
												<th>Bayar</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											foreach ($transaksi['belum_bayar'] as $key => $value) {
											?>
												<?php echo form_open_multipart('Wisatawan/cTransaksi/bayar/' . $value->id_transaksi); ?>
												<tr>
													<td><?= $value->tgl_transaksi ?></td>
													<td>Rp. <?= number_format($value->tot_transaksi) ?></td>
													<td><input type="file" name="gambar" class="form-control" required></td>
													<td>
														<button type="submit" class="btn btn-warning">Bayar</button>
														<a href="<?= base_url('Wisatawan/cTransaksi/detail_transaksi/' . $value->id_transaksi) ?>" class="btn btn-success">Detail Transaksi</a>
													</td>
												</tr>
												</form>
											<?php
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-heading">
								<a data-toggle="collapse" data-target="#collapseTwo">
									Menunggu Pesanan Dikonfirmasi
								</a>
							</div>
							<div id="collapseTwo" class="collapse" data-parent="#accordionExample">
								<div class="card-body">
									<table class="table">
										<thead>
											<tr>
												<th>Tanggal Transaksi</th>
												<th>Total Transaksi</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											foreach ($transaksi['menunggu'] as $key => $value) {
											?>
												<tr>
													<td><?= $value->tgl_transaksi ?></td>
													<td>Rp. <?= number_format($value->tot_transaksi) ?></td>
													<td>
														<a href="<?= base_url('Wisatawan/cTransaksi/detail_transaksi/' . $value->id_transaksi) ?>" class="btn btn-success">Detail Transaksi</a>
													</td>
												</tr>
											<?php
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-heading">
								<a data-toggle="collapse" data-target="#collapseThree">
									Pesanan Selesai
								</a>
							</div>
							<div id="collapseThree" class="collapse" data-parent="#accordionExample">
								<div class="card-body">
									<table class="table">
										<thead>
											<tr>
												<th>Tanggal Transaksi</th>
												<th>Total Transaksi</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											foreach ($transaksi['selesai'] as $key => $value) {
											?>
												<tr>
													<td><?= $value->tgl_transaksi ?></td>
													<td>Rp. <?= number_format($value->tot_transaksi) ?></td>
													<td>
														<a href="<?= base_url('Wisatawan/cTransaksi/detail_transaksi/' . $value->id_transaksi) ?>" class="btn btn-success">Detail Transaksi</a>
													</td>
												</tr>
											<?php
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Faq Section End -->

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