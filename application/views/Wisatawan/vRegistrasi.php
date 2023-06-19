<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-text">
					<a href="#"><i class="fa fa-home"></i> Home</a>
					<span>Register</span>
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
				<div class="register-form">
					<h2>Register</h2>
					<form action="<?= base_url('Wisatawan/cLogin/registrasi') ?>" method="POST">
						<div class="group-input">
							<label for="username">Nama Wisatawan *</label>
							<input type="text" name="nama" id="username">
							<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="group-input">
							<label for="username">No Telepon *</label>
							<input type="text" name="tlpon" id="username">
							<?= form_error('tlpon', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="group-input">
							<label for="pass">Alamat *</label>
							<input name="alamat" type="text" id="pass">
							<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="group-input">
							<label for="con-pass">Tanggal Lahir *</label>
							<input type="date" name="tgl" id="con-pass">
							<?= form_error('tgl', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="group-input">
							<label for="con-pass">Jenis Kelamin *</label>
							<select name="jk" class="form-control">
								<option value="">---Pilih Jenis Kelamin---</option>
								<option value="Perempuan">Perempuan</option>
								<option value="Laki - Laki">Laki - Laki</option>
							</select>
							<?= form_error('jk', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="group-input">
									<label for="con-pass">Username *</label>
									<input type="text" name="username" id="con-pass">
									<?= form_error('username', '<small class="text-danger">', '</small>') ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="group-input">
									<label for="con-pass">Password *</label>
									<input type="text" name="password" id="con-pass">
									<?= form_error('password', '<small class="text-danger">', '</small>') ?>
								</div>
							</div>
						</div>
						<button type="submit" class="site-btn register-btn">REGISTER</button>
					</form>
					<div class="switch-login">
						<a href="<?= base_url('Wisatawan/cLogin') ?>" class="or-login">Or Login</a>
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