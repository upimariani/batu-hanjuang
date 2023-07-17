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
					<?php
					$var_recency = array();
					$var_frequency = array();
					$var_monetary = array();
					$date_in = date('Y-m-d');
					$variabel = $this->mAnalisis->variabel($date_in);
					?>
					<h5 class="text-light">1. Menentukan Variabel RFM</h5>
					<table class="table table-hover tm-table-small tm-product-table">
						<thead>
							<tr>
								<th scope="col">&nbsp;</th>
								<th scope="col">Nama Wisatawan</th>
								<th scope="col">Variabel Recency</th>
								<th scope="col">Variabel Frequency</th>
								<th scope="col">Variabel Monetary</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($variabel['all'] as $key => $value) {
								$var_recency[] = $value->recency;
								$var_frequency[] = $value->frequency;
								$var_monetary[] = $value->monetary;
							?>
								<tr>
									<td></td>
									<td><?= $value->nama_wisatawan ?></td>
									<td><?= $value->recency ?></td>
									<td><?= $value->frequency ?></td>
									<td>Rp. <?= number_format($value->monetary)  ?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>

					<?php

					// echo '<br>';
					$max_recency = max($var_recency);
					$max_frequency = max($var_frequency);
					$max_monetary = max($var_monetary);
					// echo $max_recency . '<br>';
					// echo $max_frequency . '<br>';
					// echo $max_monetary . '<br>';

					$rn = $var_recency[0] / $max_recency;


					//menentukan rumus euclidean Distance
					$e_recency = array();
					$e_frequecy = array();
					$e_monetary = array();
					foreach ($variabel['limit'] as $key => $value) {
						$e_recency[] = $value->recency;
						$e_frequecy[] = $value->frequency;
						$e_monetary[] = $value->monetary;
					}

					$centroid1 = round(sqrt((pow(($e_recency[1] - $e_recency[0]), 2)) + (pow($e_frequecy[1] - $e_frequecy[0], 2)) + (pow($e_monetary[1] - $e_monetary[0], 2))), 3);
					$centroid2 = round(sqrt((pow(($e_recency[0] - $e_recency[1]), 2)) + (pow($e_frequecy[0] - $e_frequecy[1], 2)) + (pow($e_monetary[0] - $e_monetary[1], 2))), 3);
					// echo '<br>' . $centroid1;
					// echo '<br>' . $centroid2;
					?>
					<h5 class="text-light mt-5">2. Menentukan Titik Centroid</h5>
					<table class="table table-hover tm-table-small tm-product-table">
						<thead>
							<tr>
								<th scope="col">&nbsp;</th>
								<th scope="col">Variabel Recency</th>
								<th scope="col">Variabel Frequency</th>
								<th scope="col">Variabel Monetary</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td><?= $e_recency[0] ?></td>
								<td><?= $e_frequecy[0] ?></td>
								<td>Rp. <?= number_format($e_monetary[0]) ?></td>
							</tr>
							<tr>
								<td></td>
								<td><?= $e_recency[1] ?></td>
								<td><?= $e_frequecy[1] ?></td>
								<td>Rp. <?= number_format($e_monetary[1])  ?></td>
							</tr>
						</tbody>
					</table>
					<h5 class="text-light mt-5">3. Rumus Eucledian Distance</h5>
					<table class="table table-hover tm-table-small tm-product-table">
						<thead>
							<tr>
								<th scope="col">&nbsp;</th>
								<th scope="col">Centroid 1</th>
								<th scope="col">Centroid 2</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td><?= $centroid1 ?></td>
								<td><?= $centroid2 ?></td>
							</tr>

						</tbody>
					</table>
					<h5 class="text-light mt-5">4. Proses KNN</h5>
					<table class="table table-hover tm-table-small tm-product-table">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Centroid Variabel Next</th>
								<th scope="col">Centroid Variabel Next</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;

							foreach ($variabel['all'] as $key => $value) {
								$centroid_next1 = round(sqrt((pow(($value->recency - $e_recency[0]), 2)) + (pow($value->frequency - $e_frequecy[0], 2)) + (pow($value->monetary - $e_monetary[0], 2))), 3);
								$centroid_next2 = round(sqrt((pow(($value->recency - $e_recency[1]), 2)) + (pow($value->frequency - $e_frequecy[1], 2)) + (pow($value->monetary - $e_monetary[1], 2))), 3);

								if ($centroid1 >= $centroid_next1) {
									$status = 0;
								}
								if ($centroid2 >= $centroid_next2) {
									$status = 1;
								}
							?>

								<tr>
									<td><?= $no++ ?></td>
									<td><?= $centroid_next1 ?></td>
									<td><?= $centroid_next2 ?></td>
									<td><?= $status ?></td>
								</tr>

							<?php
							}
							?>
						</tbody>
					</table>
				</div>

			</div>
		</div>

	</div>