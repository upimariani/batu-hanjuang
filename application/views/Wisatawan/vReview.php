<!-- Blog Details Section Begin -->
<section class="blog-details spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="blog-details-inner">
					<div class="blog-detail-title">
						<h2>Review Wisatawan</h2>
						<p>OBJEK WISATA <span>- BATU HANJUANG</span></p>
					</div>

					<?php
					foreach ($review as $key => $value) {
					?>
						<div class="posted-by">
							<div class="pb-pic">
								<img src="<?= base_url('asset/fashi-master/') ?>img/blog/post-by.png" alt="">
							</div>
							<div class="pb-text">
								<a href="#">
									<h5><?= $value->nama_wisatawan ?></h5>
									<p><span><?= $value->time ?></span></p>
								</a>
								<p><?= $value->review ?></p>
							</div>
						</div>
					<?php
					}
					?>


				</div>
			</div>
		</div>
	</div>
</section>
<!-- Blog Details Section End -->

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