<section class="sec1" id="sec1">
	<div class="container">
		<div class="row">
			<div class="col-md-7 h2-sec1">
				<h2 class="display-3 text-primary mt-5" style="color: #ffc139 !important;">Selamat data<br>di Sivosis</h2>
				<p class="text-secondary display-5">Silahkan gunakan hak suara kalian untuk <br> menentukan Ketua Osis dan Wakil Ketua Osis yang baru</p>
				<div class="a-sec1">
					<a href="" class="btn btn-primary" style="color:black; background-color: #ffc139 !important; border:none;" data-toggle="modal" data-target="#modalLogin">Login Disini</a>
					<a href="#h2-sec2" class="btn btn-secondary" style="border: none;">Buat Akun?</a>
				</div>
			</div>
			<div class="col-md-5">
				<img src="<?php echo base_url('assets/img/hero.png') ?>" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<span id="h2-sec2"></span>
<br><br><br>
<section class="sec2 mb-5" id="sec2">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo base_url('assets/img/register2.png') ?>" class="img-fluid img-sec2">
			</div>
			<div class="col-md-6">
				<h2 class="text-primary h2-sec2" style="color: #ffc139 !important;">Belum punya akun?</h2>
				<p class="text-secondary p2-sec2">Silahkan daftarkan dulu diri anda pada form dibawah ini, jika sudah silahkan login lalu pilih menu voting</p>
				<form action="<?php echo site_url('auth/registrasi') ?>" method="post">
					<div class="form-group">
						<label for="" class="text-secondary">Nama *</label>
						<input type="text" name="nama" id="nama" class="form-control" value="<?php echo set_value('nama') ?>">
						<?php echo form_error('nama', '<span class="text-danger small pl-3">', '</span>') ?>
					</div>
					<div class="form-group">
						<label for="" class="text-secondary">Email *</label>
						<input type="text" name="email" id="email" class="form-control" value="<?php echo set_value('email') ?>">
						<?php echo form_error('email', '<span class="text-danger small pl-3">', '</span>') ?>
					</div>
					<div class="form-group">
						<label for="" class="text-secondary">Password *</label>
						<input type="password" name="password" id="password" class="form-control">
						<?php echo form_error('password', '<span class="text-danger small pl-3">', '</span>') ?>
					</div>
					<div class="form-group">
						<label for="id_kelas" class="text-secondary">kelas *</label>
						<select name="id_kelas" id="id_kelas" class="form-control" value="<?php echo set_value('kelas') ?>">
							<?php foreach ($kelas as $kls) : ?>
								<option value="<?php echo $kls->id ?>"><?php echo $kls->nama ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<button type="submit" class="btn btn-primary" style="background-color: #ffc139 !important; border:none;">Registrasi Akun</button>
				</form>
			</div>
		</div>
	</div>
</section>


<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal" role="document">
		<div class="modal-content shadow">
			<div class="modal-header bg-light shadow-sm" style="background-color: rgba(255, 207, 50, 0.4) !important;">
				<h5 class="modal-title" id="exampleModalLabel">Login Sivosis</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="image text-center">
								<img src="assets/img/sivobu.png" width="200" class="img-fluid" alt="">
							</div>	
						</div>
						<div class="col-md-7">
						<form action="<?php echo site_url('auth/login') ?>" method="post">
							<div class="form-group">
								<label class="text-secondary" for="email1">Email *</label>
								<input type="email" name="email1" id="email1" class="form-control" required>
							</div>
							<div class="form-group">
								<label class="text-secondary" for="password1">Password *</label>
								<input type="password" name="password1" id="password1" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-dark text-white">Login</button>
						</form>
						<br>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer shadow-sm" style="background-color: rgba(255, 207, 50, 0.4);">
			</div>
		</div>
	</div>
</div>

<section class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3 class="display-5 text-secondary" style="color: #ffc139 !important;">Cara Mengikuti Voting!</h3>
				<p class="text-secondary mb-4">
					Pastikan kamu sudah memiliki akun dan terdaftar di sivobu ini,
					<br>
					Jika belum, lakukan registrasi terlebih dahulu.
				</p>
				<div class="mb-3">
					<img src="<?php echo 'assets/img/checklist.png' ?>" width="20px">
					<p class="text-secondary ml-2" style="display: inline;">Login</p>
				</div>

				<div class="mb-3">
					<img src="<?php echo 'assets/img/checklist.png' ?>" width="20px">
					<p class="text-secondary ml-2" style="display: inline;">Pilih Menu Voting</p>
				</div>

				<div class="mb-3">
					<img src="<?php echo 'assets/img/checklist.png' ?>" width="20px">
					<p class="text-secondary ml-2" style="display: inline;">Pilih Kandidat</p>
				</div>

				<div class="mb-3">
					<img src="<?php echo 'assets/img/checklist.png' ?>" width="20px">
					<p class="text-secondary ml-2" style="display: inline;">Klik Tombol Voting</p>
				</div>

				<div class="">
					<img src="<?php echo 'assets/img/checklist.png' ?>" width="20px">
					<p class="text-secondary ml-2" style="display: inline;">Selesai</p>
				</div>

			</div>
			<div class="col-sm-6 text-right">
				<img src="<?php echo 'assets/img/tutor.png' ?>" class="img-fluid">
			</div>
		</div>
	</div>
</section>

<!-- ======= About Us Section ======= -->
<section class="about" id="about">
	<div class="container">
		<div class="section-title" data-aos="fade-up">
			<div class="section-title">
				<h2 class="display-4 text-primary mt-5 text-center" style="color: #ffc139 !important;" id="sec4">Tentang Sivosis</h2>
				<p>Ini adalah tentang Sistem Informasi E-Voting Osis</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5" data-aos="fade-right">
				<div class="image text-center">
					<img src="assets/img/sivobu.png" width="300" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-lg-7" data-aos="fade-left">
				<div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
					<h3>SIVOSIS-Sistem Informasi E-Voting Osis</h3>
					<p class="text-secondary" style="text-indent: 10%; text-align:justify;">
						SIVOSIS atau Sistem Informasi E-Voting Osis adalah sistem informasi elektronik voting ketua osis dan wakil ketua osis.
						website ini mampu menampilkan informasi terkait kandidat dan juga informasi hasil perolehan suara secara akurat.
						Sivosis mengintegrasikan sumber-sumber informasi dengan proses pemilihan kandidat secara efisien sehingga mampu memudahkan bagi para pengguna.
					</p>
					<p class="text-secondary" style="text-indent: 10%; text-align:justify;">
						SIVOSIS atau Sistem Informasi E-Voting Osis adalah sistem informasi elektronik voting ketua osis dan wakil ketua osis.
						website ini mampu menampilkan informasi terkait kandidat dan juga informasi hasil perolehan suara secara akurat.
						Sivosis mengintegrasikan sumber-sumber informasi dengan proses pemilihan kandidat secara efisien sehingga mampu memudahkan bagi para pengguna.
					</p>
					<p class="text-secondary" style="text-indent: 10%; text-align:justify;">
						SIVOSIS atau Sistem Informasi E-Voting Osis adalah sistem informasi elektronik voting ketua osis dan wakil ketua osis.
						website ini mampu menampilkan informasi terkait kandidat dan juga informasi hasil perolehan suara secara akurat.
						Sivosis mengintegrasikan sumber-sumber informasi dengan proses pemilihan kandidat secara efisien sehingga mampu memudahkan bagi para pengguna.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
