<section class="content">
	<div class="box">
		<div class="box-header">
			<a href="<?php echo site_url('admin/kelas')?>" class="btn bg-green"><i class="fa fa-arrow-left"></i> Kembali</a>
			<button type="button" class="btn bg-green" id="btn_tambah_form"><i class="fa fa-plus-circle"></i> Tambah Form</button>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<form action="<?php echo site_url('admin/kelas/simpan')?>" method="post">
				<table id="table" width="30%">
					<tr>
						<td>
							<div class="form-group">
								<label for="nama">Nama Kelas *</label>
								<input type="text" name="nama[]" id="nama" class="form-control">
							</div>
						</td>
						<td>
							<button type="button" id="btn_minus" class="btn btn-danger btn-sm" style="margin-top: 10px; margin-left:10px;" disabled><i class="fa fa-minus-circle"></i></button>
						</td>
					</tr>
				</table>
				<button type="reset" class="btn bg-navy"><i class="fa fa-refresh"> Reset</i></button>
				<button type="submit" class="btn bg-navy" onclick="return confirm('Apakah anda yakin ingin menambah ini ?')"><i class="fa fa-save"> Simpan</i></button>
			</form>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$('#btn_tambah_form').on('click',function(){
			$('#table').append(`
				<tr>
					<td>
						<div class="form-group">
							<label for="nama">Nama Kelas *</label>
							<input type="text" name="nama[]" id="nama" class="form-control">
						</div>
					</td>
					<td>
						<button type="button" id="btn_minus" class="btn btn-danger btn-sm" style="margin-top: 10px; margin-left:10px;"><i class="fa fa-minus-circle"></i></button>
					</td>
				</tr>
			`);
		})

		$('#table').on('click', '#btn_minus', function(){
			$(this).closest('tr').remove();
		})
	})
</script>

</div>
