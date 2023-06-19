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
								<th scope="col">Nama User</th>
								<th scope="col">Alamat</th>
								<th scope="col">No Telepon</th>
								<th scope="col">Akun</th>
								<th scope="col">Level User</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($user as $key => $value) {
							?>
								<tr>
									<th scope="row"><input type="checkbox" /></th>
									<td class="tm-product-name"><?= $value->nama_user ?></td>
									<td><?= $value->alamat ?></td>
									<td><?= $value->no_hp ?></td>
									<td>Username : <span class="badge badge-success"><?= $value->username ?></span><br>
										Password: <span class="badge badge-warning"><?= $value->password ?></span></td>
									<td><?php if ($value->level_user == '1') {
										?>
											<span class="badge badge-success">Admin</span>
										<?php
										} else if ($value->level_user == '2') {
										?>
											<span class="badge badge-warning">Pengelola </span>
										<?php
										}
										?>

									</td>
									<td>
										<a href="<?= base_url('Admin/cUser/delete/' . $value->id_user) ?>" class="tm-product-delete-link">
											<i class="far fa-trash-alt tm-product-delete-icon"></i>
										</a>
										<a href="<?= base_url('Admin/cUser/update/' . $value->id_user) ?>" class="tm-product-delete-link">
											<i class="far fa-edit tm-product-delete-icon"></i>
										</a>
									</td>
								</tr>
							<?php
							}
							?>

						</tbody>
					</table>
				</div>
				<!-- table container -->
				<a href="<?= base_url('Admin/cUser/create') ?>" class="btn btn-primary btn-block text-uppercase mb-3">Add new user</a>

			</div>
		</div>

	</div>
</div>