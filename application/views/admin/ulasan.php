<section class="content">
	<div class="box">
		<!-- /.box-header -->
		<div class="box-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Email</th>
						<th>Nama Siswa</th>
						<th>Kelas</th>
						<th>Komentar</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach($rows as $row):
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row->email ?></td>
						<td><?php echo $row->nama ?></td>
						<td><?php echo $row->kelas ?></td>
						<td style="width: 50%;"><?php echo $row->message ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</section>



</div>
