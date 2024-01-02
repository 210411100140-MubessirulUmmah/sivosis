<section class="sec1" id="sec1">
	<div class="container">
		<div class="row">
			<div class="col-md-7 h2-sec1">
				<h2 class="display-4 text-secondary mt-5">Halo..!! <?php echo $this->session->userdata('nama'); ?></h2>
				<h2 class="display-3 text-primary" style="color: #ffc139 !important;">Selamat data<br>di Sivosis</h2>
				<p class="text-secondary">Silahkan gunakan hak suara kalian untuk <br> menentukan Ketua Osis dan Wakil Ketua Osis yang baru</p>
				<div class="a-sec1">
					<a href="<?php echo site_url('auth/logout') ?>" style="color:black; background-color: #ffc139 !important; border:none;" class="btn btn-primary">Logout</a>
				</div>
			</div>
			<div class="col-md-5">
				<img src="<?php echo base_url('assets/img/hero.png') ?>" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<div class="container">
	<section class="sec1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="display-4 text-primary mt-5 text-center" style="color: #ffc139 !important;" id="sec2">Perolehan Suara</h2>
						<p>Grafik perolehan suara kandidat</p>
						<canvas id="chartHasilSuara" height="120"></canvas>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="row pt-5 mt-5 pb-5 mb-5">
			<div class="col-sm-3">
				<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
					<img src="assets/img/satisfied-client.svg" alt="satisfied-client" class="mr-3">
					<div>
						<h4 class="font-weight-bold text-dark mb-0"><span><?php echo $total_pemilih ?></span></h4>
						<h5 class="text-dark mb-0">Jumlah Pemilih</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
					<img src="assets/img/finished-project.svg" alt="satisfied-client" class="mr-3">
					<div>
						<h4 class="font-weight-bold text-dark mb-0"><span><?php echo $total_kandidat ?></span></h4>
						<h5 class="text-dark mb-0">Jumlah Kandidat</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
					<img src="assets/img/team-members.svg" alt="Team Members" class="mr-3">
					<div>
						<h4 class="font-weight-bold text-dark mb-0"><span><?php echo $sudah_vote ?></span></h4>
						<h5 class="text-dark mb-0">Pemilih sudah memilih</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
					<img src="assets/img/our-blog-posts.svg" alt="Our Blog Posts" class="mr-3">
					<div>
						<h4 class="font-weight-bold text-dark mb-0"><span><?php echo $total_pemilih - $sudah_vote ?></span></h4>
						<h5 class="text-dark mb-0">Pemilih belum memilih</h5>
					</div>
				</div>
			</div>
		</div>
</div>
</section>
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
<section class="sec2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="display-4 text-primary mt-5 text-center" style="color: #ffc139 !important;" id="sec3">Voting</h2>
					<p>Gunakan hak suara kalian dengan melakukan voting !!</p>
				</div>
			</div>
		</div>
		<div class="row shadow">
			<?php foreach ($kandidat as $knd) : ?>
				<div class="col-md-4 p-3">
					<div class="card mb-3 shadow-sm">
						<img src="<?php echo base_url('assets/img/' . $knd->foto) ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-center text-primary font-weight-bold" style="color: black !important;"><?php echo $knd->nama_kandidat ?></h5>
							<p class="card-text text-center text-secondary"><?php echo $knd->nama_calon ?></p>
							<div class="d-flex justify-content-between">
								<a href="<?php echo site_url('home/visimisi/' . $knd->id) ?>" style="background-color: #ffc139 !important;" class="btn btn-warning btn-sm">Lihat Visi & Misi</a>


								<?php if ($user->status == 0) : ?>
									<a href="#" class="btn btn-success btn-sm" data-nama_kandidat="<?php echo $knd->nama_kandidat ?>" data-id_user="<?php echo $this->session->userdata('id'); ?>">Vote <?php echo $knd->nama_kandidat ?></a>
								<?php else : ?>
									<button href="#" id="about" class="btn btn-danger btn-sm" disabled>Anda Sudah Vote</button>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
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
</section >

<section id="contact" class="contact section-bg">
	<div class="container">
		<div class="section-title">
			<h2 class="display-4 text-primary mt-5 text-center" style="color: #ffc139 !important;" id="sec4">Contact</h2>
			<p>Hubungi kami jika ada kritik, masukan, dan saran!</p>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
					<div class="address">
						<i class="bi bi-geo-alt"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
								<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
								<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
							</svg></i>
						<h4>Location:</h4>
						<p>Jl. KH. Ach. Marzuki,<br>Pangeranan, Bangkalan</p>
					</div>
					<div class="emailcon">
						<i class="fas fa-envelope"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
								<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
							</svg></i>
						<h4>Email:</h4>
						<p>mubarijojo.ummah11@gmail.com</p>
					</div>
					<div class="phone">
						<i class="bi bi-phone"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
								<path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
								<path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
							</svg></i>
						<h4>Call:</h4>
						<p>082139732198</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8 mt-5 mt-lg-0">
				<h3 class="text-secondary mb-0">Dari : <?php echo $user->nama; ?></h3>
				<form action="<?php echo site_url('home/simpan') ?>" method="post" role="form" class="php-email-form" data-aos="fade-left">
					<div class="row">
						<div class="col-md-6 form-group mt-0">
							<input type="hidden" name="nama" class="form-control" value="<?php echo $user->nama; ?>" id="nama" placeholder="Your Name" required>
						</div>
						<div class="col-md-6 form-group mt-0">
							<input type="hidden" id="email" class="form-control" value="<?php echo $user->email; ?>" name="email" id="email" placeholder="Your Email" required>
						</div>
					</div>
					<div class="form-group mt-0">
						<?php foreach ($rows as $row) : ?>
							<?php if ($row->nama_user == $user->nama) { ?>
								<input type="hidden" class="form-control" name="kelas" value="<?php echo $row->nama_kelas ?>" id="kelas" placeholder="kelas" required>
							<?php } ?>
						<?php endforeach ?>
					</div>
					<div class="form-group mt-0">
						<textarea class="form-control" id="message" name="message" rows="5" style="resize: none;" placeholder="Message" required></textarea>
					</div>
					<div class="my-3">
						<p id="ulasan"></p>
					</div>
					<div class="text-center"><button type="submit">Send Message</button></div>
				</form>
			</div>
		</div>
	</div>
</section>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol id="contact" class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<?php $a = 1 ?>
		<?php foreach ($ulasan as $uls) : ?>
			<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $a++; ?>"></li>
		<?php endforeach; ?>
	</ol>
	<center>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-50" src="assets/img/pesann.jpeg" width="10px" alt="First slide">
				<div class="carousel-caption d-none d-md-block mb-5">
					<p class="text-secondary">Apa kata pemilih</p>
					<h5 style="color: black;">Pesan, kesan, kritik, dan saran</h5>
				</div>
			</div>
			<?php foreach ($ulasan as $uls) : ?>
				<div class="carousel-item">
					<img class="d-block w-50" src="assets/img/pesann.jpeg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block mb-5">
						<center>
							<p class="text-secondary">"<?php echo $uls->message ?>"</p>
						</center>
						<h5 style="color: black;">~ <?php echo $uls->nama ?></h5>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</center>
</div>

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
