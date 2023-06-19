<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-text">
					<a href="#"><i class="fa fa-home"></i> Home</a>
					<span>Login</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="login-form">
					<h2>Login</h2>
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
					<form action="<?= base_url('Wisatawan/cLogin') ?>" method="POST">
						<div class="group-input">
							<label for="username">Username *</label>
							<input type="text" name="username" id="username">
							<?= form_error('username', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="group-input">
							<label for="pass">Password *</label>
							<input type="password" name="password" id="pass">
							<?= form_error('password', '<small class="text-danger">', '</small>') ?>
						</div>

						<button type="submit" class="site-btn login-btn">Sign In</button>
					</form>
					<div class="switch-login">
						<a href="<?= base_url('Wisatawan/cLogin/registrasi') ?>" class="or-login">Or Create An Account</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Register Form Section End -->

<!-- Partner Logo Section Begin -->
<div class="partner-logo">
	<div class="container">
		<div class="logo-carousel owl-carousel">
			<div class="logo-item">
				<div class="tablecell-inner">
					<img src="img/logo-carousel/logo-1.png" alt="">
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img src="img/logo-carousel/logo-2.png" alt="">
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img src="img/logo-carousel/logo-3.png" alt="">
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img src="img/logo-carousel/logo-4.png" alt="">
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img src="img/logo-carousel/logo-5.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Partner Logo Section End -->