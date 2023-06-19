<div class="container tm-mt-big tm-mb-big">
	<div class="row">
		<div class="col-12 mx-auto tm-login-col">
			<div class="tm-bg-primary-dark tm-block tm-block-h-auto">
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="tm-block-title mb-4">Login User</h2>
						<?php
						if ($this->session->userdata('success')) {
						?>
							<div class="alert alert-success" role="alert">
								<?= $this->session->userdata('success') ?>
							</div>
						<?php
						}
						?>

						<?php
						if ($this->session->userdata('error')) {
						?>
							<div class="alert alert-danger" role="alert">
								<?= $this->session->userdata('error') ?>
							</div>
						<?php
						}
						?>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-12">
						<form action="<?= base_url('Admin/cLogin') ?>" method="post" class="tm-login-form">
							<div class="form-group">
								<label for="username">Username</label>
								<input name="username" type="text" class="form-control validate" id="username">
								<?= form_error('username', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mt-3">
								<label for="password">Password</label>
								<input name="password" type="password" class="form-control validate" id="password">
								<?= form_error('password', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group mt-4">
								<button type="submit" class="btn btn-primary btn-block text-uppercase">
									Login
								</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>rr