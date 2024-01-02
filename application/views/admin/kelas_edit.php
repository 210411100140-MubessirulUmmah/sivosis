<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><?php echo $title?></h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<form action="<?php echo site_url('admin/kelas/update')?>" method="post">
				<input type="hidden" name="id" value="<?php echo $row->id ?>">
				<table id="table" width="30%">
					<tr>
						<td>
							<div class="form-group">
								<label for="nama">Nama Kelas *</label>
								<input type="text" name="nama" value="<?php echo $row->nama ?>" id="nama" class="form-control">
							</div>
						</td>
					</tr>
				</table>
				<a href="<?php echo site_url('admin/kelas')?>" class="btn bg-green"><i class="fa fa-arrow-left"></i> Kembali</a>
				<button type="submit" class="btn bg-navy" onclick="return confirm('Apakah anda yakin ingin menambah ini ?')"><i class="fa fa-save"> Update</i></button>
			</form>
		</div>
	</div>
</section>


</div>
