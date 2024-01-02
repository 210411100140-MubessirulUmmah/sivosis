<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="box p-3">
		<div class="row">
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3><?php echo $total_admin ?></h3>

						<p>Admin</p>
					</div>
					<div class="icon">
						<i class="ion ion-bug"></i>
					</div>
					<a href="#" class="small-box-footer"></a>
				</div>
			</div>
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?php echo $total_pemilih ?></h3>

						<p>Total Pemilih</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
					<a href="#" class="small-box-footer"></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-maroon">
					<div class="inner">
						<h3><?php echo $total_kandidat ?></h3>

						<p>Kandidat</p>
					</div>
					<div class="icon">
						<i class="ion-person-stalker"></i>
					</div>
					<a href="#" class="small-box-footer"></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3><?php echo $sudah_vote ?></h3>

						<p>Sudah Voting</p>
					</div>
					<div class="icon">
						<i class="ion-thumbsup"></i>
					</div>
					<a href="#" class="small-box-footer"></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo $total_pemilih - $sudah_vote ?></h3>

						<p>Belum Voting</p>
					</div>
					<div class="icon">
						<i class="ion-sad"></i>
					</div>
					<a href="#" class="small-box-footer"></a>
				</div>
			</div>
			<div class="col-md-4">
				<!-- small box -->
				<div class="small-box bg-purple">
					<div class="inner">
						<h3><?php echo $total_kelas ?></h3>

						<p>Jumlah Kelas</p>
					</div>
					<div class="icon">
						<i class="ion ion-home"></i>
					</div>
					<a href="#" class="small-box-footer"></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-secondary alert-dismissible">
					<h4><i class="icon fa fa-warning"></i> Perolehan Suara!</h4>
					<a href="<?php echo site_url('admin/dashboard') ?>" class="btn btn-success" style="text-decoration: none;"><i class="fa fa-refresh"></i> Refresh untuk melihat data perolehan suara terbaru</a>
				</div>
			</div>
		</div>
	<canvas id="chartHasilSuara" width="400" height="150"></canvas>
	</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
	var ctx = document.getElementById('chartHasilSuara').getContext('2d');
	var chartHasilSuara = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['Calon ke-1', 'Calon ke-2', 'Calon ke-3'],
			datasets: [{
				label: 'Hasil Perolehan Suara',
				data: [
					<?php echo $kandidat1 ?>,
					<?php echo $kandidat2 ?>,
					<?php echo $kandidat3 ?>,
				],
				backgroundColor: [
					'rgba(255,99,132,0.5)',
					'rgba(54,162,235,0.5)',
					'rgba(255,206,86,0.5)'
				],
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>

</div>
