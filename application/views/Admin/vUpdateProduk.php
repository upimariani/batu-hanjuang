<div class="container tm-mt-big tm-mb-big">
	<div class="row">
		<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
			<div class="tm-bg-primary-dark tm-block tm-block-h-auto">
				<div class="row">
					<div class="col-12">
						<h2 class="tm-block-title d-inline-block">Update Ticket</h2>
					</div>
				</div>
				<div class="row tm-edit-product-row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<form action="<?= base_url('Admin/cProduk/update/' . $tiket->id_tiket) ?>" method="POST" class="tm-edit-product-form">
							<div class="form-group mb-3">
								<label for="name">Nama Tiket
								</label>
								<input id="name" value="<?= $tiket->nama_tiket ?>" name="nama" type="text" class="form-control validate" />
								<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Deskripsi</label>
								<input id="name" name="deskripsi" value="<?= $tiket->deskripsi ?>" type="text" class="form-control validate" />
								<?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Berlaku Untuk</label>
								<input id="name" name="jml_orang" value="<?= $tiket->jml_orang ?>" type="text" class="form-control validate" />
								<?= form_error('jml_orang', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="category">Tipe Tiket</label>
								<select class="custom-select tm-select-accounts" name="tipe" id="category">
									<option value="" selected>Pilih Type Tiket</option>
									<option value="1" <?php if ($tiket->type_tiket == '1') {
															echo 'selected';
														} ?>>On People</option>
									<option value="2" <?php if ($tiket->type_tiket == '2') {
															echo 'selected';
														} ?>>Family</option>
									<option value="3" <?php if ($tiket->type_tiket == '3') {
															echo 'selected';
														} ?>>Gathering</option>
								</select>
								<?= form_error('tipe', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Harga Tiket</label>
								<input type="text" name="harga" value="<?= $tiket->harga ?>" class="form-control validate" />
								<?= form_error('harga', '<small class="text-danger">', '</small>') ?>
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