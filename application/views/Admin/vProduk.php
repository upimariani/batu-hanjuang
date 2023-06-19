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
								<th scope="col">Deskripsi</th>
								<th scope="col">Berlaku Untuk</th>
								<th scope="col">Type Tiket</th>
								<th scope="col">Harga</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($tiket as $key => $value) {
							?>
								<tr>
									<th scope="row"><input type="checkbox" /></th>
									<td class="tm-product-name"><?= $value->nama_tiket ?></td>
									<td><?= $value->deskripsi ?></td>
									<td><?= $value->jml_orang ?> orang</td>
									<td><?php if ($value->type_tiket == '1') {
										?>
											<span class="badge badge-success">On People </span>
										<?php
										} else if ($value->type_tiket == '2') {
										?>
											<span class="badge badge-warning">Family </span>
										<?php
										} else {
										?>
											<span class="badge badge-primary">Gathering </span>
										<?php
										}
										?>
									</td>
									<td>Rp. <?= number_format($value->harga) ?></td>
									<td>
										<a href="<?= base_url('Admin/cProduk/delete/' . $value->id_tiket) ?>" class="tm-product-delete-link">
											<i class="far fa-trash-alt tm-product-delete-icon"></i>
										</a>
										<a href="<?= base_url('Admin/cProduk/update/' . $value->id_tiket) ?>" class="tm-product-delete-link">
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
				<a href="<?= base_url('Admin/cProduk/create') ?>" class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>

			</div>
		</div>

	</div>
</div>