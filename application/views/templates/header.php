<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
	<script src="<?php echo base_url('assets/') ?>js/Chart.min.js"></script>
	<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
	<style>
		.img-circle {
			display: block;
			border-radius: 50%;
			margin: 30px auto;
		}
	</style>
	<link href="https://fonts.googleapis.com/css2?family=Scada&display=swap" rel="stylesheet">
	<title><?php $title ?></title>
</head>

<body>
	<div id="blurredbackground"></div>
	<div id="content">
		<nav class="navbar navbar-expand-lg shadow-sm p-0 mb-5 rounded fixed-top">
			<div class="container">
				<a class="text-primary font-weight-bold" style="font-size:35px; color:black !important; font-family: Source Sans Pro !important; text-decoration:none;" href="#">SIVOSIS</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php if ($this->session->userdata('id') != NULL) : ?>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto" style="color: black;">
							<li class="nav-item">
								<a class="nav-link nav-active aktif" style="color:black;" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link nav-active" style="color:black;" href="#sec2">Perolehan Suara</a>
							</li>
							<li class="nav-item">
								<a class="nav-link nav-active" style="color:black;" href="#sec3">Voting</a>
							</li>
							<li class="nav-item">
								<a class="nav-link nav-active" style="color:black;" href="#about">Tentang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link nav-active" style="color:black;" href="#contact">Contact</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle nav-active" style="color:black;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?php echo $this->session->userdata('nama'); ?>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="<?php echo site_url('auth/logout') ?>">Logout</a>
								</div>
							</li>
						</ul>
					</div>
				<?php else : ?>
					<div class="collapse navbar-collapse" style="color: black;" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link nav-active aktif" style="color:black;" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link nav-active" style="color:black;" href="" data-toggle="modal" data-target="#modalLogin">Perolehan Suara</a>
							</li>
							<li class="nav-item">
								<a class="nav-link nav-active" style="color:black;" href="" data-toggle="modal" data-target="#modalLogin">Voting</a>
							</li>
							<li class="nav-item">
								<a class="nav-link nav-active" style="color:black;" href="#about">Tentang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link nav-active" style="color:black;" href="" data-toggle="modal" data-target="#modalLogin">Contact</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle nav-active" style="color:black;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Masuk
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#h2-sec2">Register</a>
									<a class="dropdown-item" href="" data-toggle="modal" data-target="#modalLogin">Login</a>
								</div>
							</li>
						</ul>
					</div>

				<?php endif; ?>
			</div>
		</nav>
	</div>
</body>
</html>

