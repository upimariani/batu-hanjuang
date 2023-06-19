<div class="container tm-mt-big tm-mb-big">
	<div class="row">
		<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
			<div class="tm-bg-primary-dark tm-block tm-block-h-auto">
				<div class="row">
					<div class="col-12">
						<h2 class="tm-block-title d-inline-block">Add Ticket</h2>
					</div>
				</div>
				<div class="row tm-edit-product-row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<form action="<?= base_url('Admin/cProduk/create') ?>" method="POST" class="tm-edit-product-form">
							<div class="form-group mb-3">
								<label for="name">Nama Tiket
								</label>
								<input id="name" name="nama" type="text" class="form-control validate" />
								<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Deskripsi</label>
								<input id="name" name="deskripsi" type="text" class="form-control validate" />
								<?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Berlaku Untuk</label>
								<input id="name" name="jml_orang" type="text" class="form-control validate" />
								<?= form_error('jml_orang', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="category">Tipe Tiket</label>
								<select class="custom-select tm-select-accounts" name="tipe" id="category">
									<option value="" selected>Pilih Type Tiket</option>
									<option value="1">On People</option>
									<option value="2">Family</option>
									<option value="3">Gathering</option>
								</select>
								<?= form_error('tipe', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Harga Tiket</label>
								<input type="text" name="harga" class="form-control validate" />
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