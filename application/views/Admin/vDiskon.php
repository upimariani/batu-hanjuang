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
								<th scope="col">Nama Tiket</th>
								<th scope="col">Nama Diskon</th>
								<th scope="col">Tanggal Diskon</th>
								<th scope="col">Diskon</th>
								<th scope="col">Member</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($diskon as $key => $value) {
							?>
								<tr>
									<th scope="row"><input type="checkbox" /></th>
									<td class="tm-product-name"><?= $value->nama_tiket ?></td>
									<td><?= $value->nama_diskon ?></td>
									<td><?= $value->tgl_diskon ?></td>
									<td><?= $value->diskon ?> %</td>
									<td><?php if ($value->member == '1') {
										?>
											<span class="badge badge-success">Member</span>
										<?php
										} else if ($value->member == '2') {
										?>
											<span class="badge badge-warning">Non Member </span>
										<?php
										}
										?>

									</td>
									<td>
										<a href="<?= base_url('Admin/cDiskon/delete/' . $value->id_diskon) ?>" class="tm-product-delete-link">
											<i class="far fa-trash-alt tm-product-delete-icon"></i>
										</a>
										<a href="<?= base_url('Admin/cDiskon/update/' . $value->id_diskon) ?>" class="tm-product-delete-link">
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
				<a href="<?= base_url('Admin/cDiskon/create') ?>" class="btn btn-primary btn-block text-uppercase mb-3">Add new discount</a>

			</div>
		</div>

	</div>
</div>