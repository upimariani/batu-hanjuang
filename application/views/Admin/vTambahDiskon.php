<div class="container tm-mt-big tm-mb-big">
	<div class="row">
		<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
			<div class="tm-bg-primary-dark tm-block tm-block-h-auto">
				<div class="row">
					<div class="col-12">
						<h2 class="tm-block-title d-inline-block">Add Discount</h2>
					</div>
				</div>
				<div class="row tm-edit-product-row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<form action="<?= base_url('Admin/cDiskon/create') ?>" method="POST" class="tm-edit-product-form">
							<div class="form-group mb-3">
								<label for="category">Nama Tiket</label>
								<select class="custom-select tm-select-accounts" name="nama" id="category">
									<option value="" selected>Pilih Nama Tiket</option>
									<?php
									foreach ($tiket as $key => $value) {
										if ($value->id_diskon == NULL) {
									?>
											<option value="<?= $value->id_tiket ?>"><?= $value->nama_tiket ?></option>
									<?php
										}
									}
									?>

								</select>
								<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Tanggal Diskon</label>
								<input name="tgl" type="date" class="form-control validate" />
								<?= form_error('tgl', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Nama Diskon</label>
								<input id="name" name="nama_diskon" type="text" class="form-control validate" />
								<?= form_error('nama_diskon', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Besar Diskon</label>
								<input id="name" name="besar" type="number" class="form-control validate" />
								<?= form_error('besar', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="category">Member</label>
								<select class="custom-select tm-select-accounts" name="member" id="category">
									<option value="" selected>Pilih Member</option>
									<option value="1">Member</option>
									<option value="2">Non Member</option>
								</select>
								<?= form_error('member', '<small class="text-danger">', '</small>') ?>
							</div>

					</div>

					<div class="col-12">
						<button type="submit" class="btn btn-primary btn-block text-uppercase">Save</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>