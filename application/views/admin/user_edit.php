<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><?php echo $title?></h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<form action="<?php echo site_url('admin/user/update')?>" method="post">
			<input type="hidden" name="id" value="<?php echo $row->id?>">
			<div class="form-group">
				<label for="level">Level *</label>
				<select name="level" id="level" class="form-control" onchange="myFunction()" required>
					<option value="admin" <?php echo $row->level == 'admin' ? 'selected' : '' ?>>Admin</option>
					<option value="siswa" <?php echo $row->level == 'siswa' ? 'selected' : '' ?>>Siswa</option>
				</select>
			</div>
			<div class="from-group" id="tampil">
				<label for="id_kelas">Kelas *</label>
				<select name="id_kelas" id="id_kelas" class="form-control">
					<?php foreach($kelas as $kls):?>
						<option value="<?php echo $kls->id ?>" <?php echo $row->id_kelas == $kls->id ? 'selected' : ''?>><?php echo $kls->nama?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<script>
				function myFunction() {
				var x = document.getElementById("level").value;
				var tpl = document.getElementById("tampil");
				if (document.getElementById("level").value == "admin"){
					tpl.style.display = 'none';
				}else{
					tpl.style.display = 'block';
				}
				}
			</script>
			<div class="form-group">
				<label for="nama">Nama *</label>
				<input type="nama" name="nama" id="nama" value="<?php echo $row->nama?>" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="email">Email *</label>
				<input type="email" name="email" id="email" value="<?php echo $row->email?>" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="password">Password *</label>
				<input type="password" name="password" id="password" class="form-control" required>
			</div>
			
			<a href="<?php echo site_url('admin/user')?>" class="btn bg-green"><i class="fa fa-arrow-left"></i> Kembali</a>
				<button type="submit" class="btn bg-navy" onclick="return confirm('Apakah anda yakin ingin mengedit data <?php echo $row->nama?> ?')"><i class="fa fa-save"> Update</i></button>
			</form>
		</div>
	</div>
</section>



</div>
