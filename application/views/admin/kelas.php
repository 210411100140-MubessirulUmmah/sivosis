<section class="content">
	<div class="box">
		<div class="box-header">
			<a href="<?php echo site_url('admin/kelas/tambah')?>" class="btn bg-maroon"><i class="fa fa-plus-circle"></i> Tambah Kelas</a>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama Kelas</th>
						<th>Jumlah Siswa</th>
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
						<td><?php echo $row->nama ?></td>
						<td><?php echo $row->total ?></td>
						<td>
							<a href="<?php echo site_url('admin/kelas/edit/'. $row->id)?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i></a>
							<a href="<?php echo site_url('admin/kelas/hapus/'. $row->id)?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section>



</div>
