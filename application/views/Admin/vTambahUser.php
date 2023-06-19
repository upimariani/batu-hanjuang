<div class="container tm-mt-big tm-mb-big">
	<div class="row">
		<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
			<div class="tm-bg-primary-dark tm-block tm-block-h-auto">
				<div class="row">
					<div class="col-12">
						<h2 class="tm-block-title d-inline-block">Add User</h2>
					</div>
				</div>
				<div class="row tm-edit-product-row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<form action="<?= base_url('Admin/cUser/create') ?>" method="POST" class="tm-edit-product-form">
							<div class="form-group mb-3">
								<label for="name">Nama User
								</label>
								<input id="name" name="nama" type="text" class="form-control validate" />
								<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Alamat</label>
								<input id="name" name="alamat" type="text" class="form-control validate" />
								<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">No Telepon</label>
								<input id="name" name="no_hp" type="text" class="form-control validate" />
								<?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Username</label>
								<input id="name" name="username" type="text" class="form-control validate" />
								<?= form_error('username', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="description">Password</label>
								<input id="name" name="password" type="text" class="form-control validate" />
								<?= form_error('password', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mb-3">
								<label for="category">Level User</label>
								<select class="custom-select tm-select-accounts" name="level_user" id="category">
									<option value="" selected>Pilih Level User</option>
									<option value="1">Admin</option>
									<option value="2">Pengelola</option>
								</select>
								<?= form_error('level_user', '<small class="text-danger">', '</small>') ?>
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