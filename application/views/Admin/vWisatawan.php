<div class="container mt-5">
	<div class="row tm-content-row">
		<!-- <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
			<div class="tm-bg-primary-dark tm-block">
				<h2 class="tm-block-title">Latest Hits</h2>
				<canvas id="lineChart"></canvas>
			</div>
		</div> -->
		<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
			<div class="tm-bg-primary-dark tm-block">
				<h2 class="tm-block-title">Level Member</h2>
				<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
			<div class="tm-bg-primary-dark tm-block">
				<h2 class="tm-block-title">Pelanggan Transaksi</h2>
				<canvas id="transaksi" style="width:100%;max-width:600px"></canvas>
			</div>
		</div>
		<!-- <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
			<div class="tm-bg-primary-dark tm-block tm-block-taller">
				<h2 class="tm-block-title">Storage Information</h2>
				<div id="pieChartContainer">
					<canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
				</div>
			</div>
		</div> -->
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
								<th scope="col">Nama Wisatawan</th>
								<th scope="col">Jenis Kelamin</th>
								<th scope="col">Alamat</th>
								<th scope="col">No Telepon</th>
								<th scope="col">Akun</th>
								<th scope="col">Level Member</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($wisatawan as $key => $value) {
							?>
								<tr>
									<th scope="row"><input type="checkbox" /></th>
									<td class="tm-product-name"><?= $value->nama_wisatawan ?></td>
									<td class="tm-product-name"><?= $value->jk ?></td>
									<td class="tm-product-name"><?= $value->alamat ?></td>
									<td class="tm-product-name"><?= $value->no_hp_wisatawan ?></td>
									<td class="tm-product-name"><span class="badge badge-success"><?= $value->username_wisatawan ?></span> <span class="badge badge-warning"><?= $value->password_wisatawan ?></span></td>
									<td class="tm-product-name"><?php
																if ($value->level_member == '1') {
																?>
											<span class="badge badge-danger">Member Clasic</span>
										<?php
																} else if ($value->level_member == '2') {
										?>
											<span class="badge badge-warning">Member Silver</span>
										<?php
																} else {
										?>
											<span class="badge badge-success">Member Gold</span>
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

			</div>
		</div>

	</div>
</div>