<div class="container">
	<div class="row">
		<div class="col">
			<p class="text-white mt-5 mb-5">Welcome back, <b>Pengelola</b></p>
		</div>
	</div>
	<!-- row -->
	<div class="row tm-content-row">
		<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
			<div class="tm-bg-primary-dark tm-block">
				<h2 class="tm-block-title">Grafik Penjualan Tiket</h2>
				<canvas id="penjualan_tiket" style="width:100%;max-width:600px"></canvas>
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
			<div class="tm-bg-primary-dark tm-block">
				<h2 class="tm-block-title">Jumlah Tiket</h2>
				<canvas id="jml_tiket" style="width:100%;max-width:600px"></canvas>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="card card-dark">
				<div class="card-header">
					<h3 class="card-title">Laporan Transaksi Harian</h3>
				</div>
				<div class="card-body">
					<?php
					echo form_open('Pengelola/cLaporan/cetak_harian') ?>
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label>Tanggal</label>
								<select name="tanggal" class="custom-select tm-select-accounts">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 31; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Bulan</label>
								<select name="bulan" class="custom-select tm-select-accounts">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 12; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Tahun</label>
								<select name="tahun" class="custom-select tm-select-accounts">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
							</div>
						</div>
					</div>
					<?php
					echo form_close() ?>
				</div>
			</div>
		</div>


		<div class="col-md-4">
			<div class="card card-dark">
				<div class="card-header">
					<h3 class="card-title">Laporan Transaksi Bulanan</h3>
				</div>
				<div class="card-body">
					<?php
					echo form_open('Pengelola/cLaporan/cetak_bulanan') ?>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Bulan</label>
								<select name="bulan" class="custom-select tm-select-accounts">
									<?php
									$mulai = 1;
									for ($i = $mulai; $i < $mulai + 12; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Tahun</label>
								<select name="tahun" class="custom-select tm-select-accounts">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
							</div>
						</div>
					</div>
					<?php
					echo form_close() ?>
				</div>
			</div>
		</div>


		<div class="col-md-4">
			<div class="card card-dark">
				<div class="card-header">
					<h3 class="card-title">Laporan Transaksi Tahunan</h3>
				</div>
				<div class="card-body">
					<?php
					echo form_open('Pengelola/cLaporan/cetak_tahunan') ?>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Tahun</label>
								<select name="tahun" class="custom-select tm-select-accounts">
									<?php
									$mulai = date('Y') - 1;
									for ($i = $mulai; $i < $mulai + 10; $i++) {
										$sel = $i == date('Y') ? 'selected="selected"' : '';
										echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
							</div>
						</div>
					</div>
					<?php
					echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>