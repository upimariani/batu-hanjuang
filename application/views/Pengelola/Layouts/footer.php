<footer class="tm-footer row tm-mt-small">
	<div class="col-12 font-weight-light">
		<p class="text-center text-white mb-0 px-4 small">
			OBYEK WISATA TAMAN BATU HANJUANG
		</p>
	</div>
</footer>

<script src="<?= base_url('asset/product-admin-master/') ?>js/jquery-3.3.1.min.js"></script>
<!-- https://jquery.com/download/ -->
<script src="<?= base_url('asset/product-admin-master/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('asset/product-admin-master/') ?>js/moment.min.js"></script>
<script src="<?= base_url('asset/chart/js_chart.js') ?>"></script>
<!-- https://getbootstrap.com/ -->
<script>
	$(function() {
		$(".tm-product-name").on("click", function() {
			window.location.href = "edit-product.html";
		});
	});
</script>
<script>
	<?php
	$klasik = $this->db->query("SELECT COUNT(id_wisatawan) as klasik FROM `wisatawan` WHERE level_member='1'")->row();
	$silver = $this->db->query("SELECT COUNT(id_wisatawan) as silver FROM `wisatawan` WHERE level_member='2'")->row();
	$gold = $this->db->query("SELECT COUNT(id_wisatawan) as gold FROM `wisatawan` WHERE level_member='3'")->row();


	?>
	Chart.defaults.global.defaultFontColor = 'white';
	var xValues = ["Clasic", "Silver", "Gold"];
	var yValues = ['<?= $klasik->klasik ?>', '<?= $silver->silver ?>', '<?= $gold->gold ?>'];
	var barColors = ["#629E8F", "#DB0000", "#D3A087"];

	new Chart("myChart", {
		type: "bar",
		data: {
			labels: xValues,
			datasets: [{
				backgroundColor: barColors,
				data: yValues
			}]
		},
		options: {
			legend: {
				display: false
			},
			title: {
				display: true,
				text: "Informasi Jumlah Level Member"
			}
		}
	});
</script>
<script>
	<?php
	$transaksi = $this->db->query("SELECT COUNT(transaksi.id_wisatawan) as jml_transaksi, nama_wisatawan FROM `transaksi`JOIN wisatawan ON transaksi.id_wisatawan=wisatawan.id_wisatawan GROUP BY wisatawan.id_wisatawan")->result();

	?>
	Chart.defaults.global.defaultFontColor = 'white';
	var xValues = [<?php foreach ($transaksi as $key => $value) {
						echo '"' . $value->nama_wisatawan . '",';
					} ?>];
	var yValues = [<?php foreach ($transaksi as $key => $value) {
						echo '"' . $value->jml_transaksi . '",';
					} ?>];
	// var barColors = ["#F7604D", "#4ED6B8"];

	new Chart("transaksi", {
		type: "bar",
		data: {
			labels: xValues,
			datasets: [{
				backgroundColor: '#F29141',
				data: yValues
			}]
		},
		options: {
			legend: {
				display: false
			},
			title: {
				display: true,
				text: "Informasi Jumlah Transaksi Pelanggan"
			}
		}
	});
</script>
<script>
	<?php
	$penjualan_tiket = $this->db->query("SELECT SUM(qty) as qty, nama_tiket FROM `detail_transaksi` JOIN tiket ON detail_transaksi.id_tiket=tiket.id_tiket GROUP BY tiket.id_tiket")->result();
	?>
	Chart.defaults.global.defaultFontColor = 'white';
	var xValues = [<?php foreach ($penjualan_tiket as $key => $value) {
						echo '"' . $value->nama_tiket . '",';
					} ?>];
	var yValues = [<?php foreach ($penjualan_tiket as $key => $value) {
						echo '"' . $value->qty . '",';
					} ?>];

	new Chart("penjualan_tiket", {
		type: "bar",
		data: {
			labels: xValues,
			datasets: [{
				backgroundColor: '#9DC742',
				data: yValues
			}]
		},
		options: {
			legend: {
				display: false
			},
			title: {
				display: true,
				text: "Informasi Jumlah Penjualan Tiket"
			}
		}
	});
</script>
<script>
	<?php
	$tiket = $this->db->query("SELECT COUNT(id_tiket) as jml, type_tiket FROM `tiket` GROUP BY type_tiket")->result();
	?>
	Chart.defaults.global.defaultFontColor = 'white';
	var xValues = [<?php foreach ($tiket as $key => $value) {
						if ($value->type_tiket == '1') {
							echo '"On People"';
						} else if ($value->type_tiket == '2') {
							echo '"Family"';
						} else {
							echo '"Gathering"';
						}
						echo ',';
					} ?>];
	var yValues = [<?php foreach ($tiket as $key => $value) {
						echo '"' . $value->jml . '",';
					} ?>];
	var barColors = ["#7BA053", "#A09627", "#D3A087", "#D3A087", "#D3A087", "#D3A087", "#D3A087"];

	new Chart("jml_tiket", {
		type: "bar",
		data: {
			labels: xValues,
			datasets: [{
				backgroundColor: '#ff9944',
				data: yValues
			}]
		},
		options: {
			legend: {
				display: false,

			},
			title: {
				display: true,
				text: "Informasi Jumlah Tiket Per Type Tiket"
			}
		}
	});
</script>
</body>

</html>