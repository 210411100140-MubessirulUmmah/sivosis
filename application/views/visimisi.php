<section class="sec1">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<img src="<?php echo base_url('assets/img/'.$kandidat->foto)?>" class="img-circle" width="250" alt="">
				<h1 class="mt-3 text-center"><?php echo $kandidat->nama_calon?></h1>
				<table class="table">
					<tr>
						<th>Visi</th>
						<td><?php echo $visimisi->visi ?></td>
					</tr>
					<tr>
						<th>Misi</th>
						<td><?php echo $visimisi->misi ?></td>
					</tr>
				</table>
				<center><a href="<?php echo site_url('home')?>" class="btn btn-secondary">Kembali</a></center>
			</div>
		</div>
	</div>
</section>

