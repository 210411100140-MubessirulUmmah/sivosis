<section class="content">
	<div class="box">
		<!-- <div class="box-header">
			<a href="<?php echo site_url('admin/visi_misi/tambah')?>" class="btn bg-maroon"><i class="fa fa-plus-circle"></i> Tambah Visi & Misi</a>
		</div> -->
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama Kandidat</th>
						<th>Visi</th>
						<th>Misi</th>
						<th>Modify</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach($rows as $row):
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->nama_kandidat ?></td>
						<td width="35%"><?php echo $row->visi ?></td>
						<td width="35%"><?php echo $row->misi ?></td>
						<td>
							<a href="<?php echo site_url('admin/visi_misi/edit/' . $row->id_visimisi)?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i></a>
							<a href="<?php echo site_url('admin/visi_misi/hapus/' . $row->id_visimisi)?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section>



</div>
