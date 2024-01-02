<!-- Site wrapper -->
<div class="wrapper">

	<header class="main-header">
		<a href="" class="logo">
			<span class="logo-mini"><b>SVO</b></span>
			<span class="logo-lg"><b>SIVOSIS</b></span>
		</a>
		<nav class="navbar navbar-light navbar-static-top">
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<ul class="dropdown-menu">
					</ul>
					</li>
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url('assets/img/avatar04.png') ?>" class="user-image" alt="User Image">
							<span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="<?php echo base_url('assets/img/avatar04.png') ?>" class="img-circle" alt="User Image">

								<p>
									<?php echo $this->session->userdata('nama'); ?>
									<small>Administrator Sivosis</small>
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-right">
									<a href="<?php echo site_url('auth/logout') ?>" class="btn btn-default btn-flat">Logout</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- =============================================== -->
