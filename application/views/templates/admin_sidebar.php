<aside class="main-sidebar">
	<section class="sidebar-mini skin-yellow">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url('assets/img/avatar04.png') ?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $this->session->userdata('nama'); ?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MENU ADMINISTRATOR</li>
			<li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '';?>">
				<a href="<?php echo site_url('admin/dashboard') ?>" style="color:dimgray;">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li class="<?php echo $this->uri->segment(2) == 'kelas' ? 'active' : '';?>">
				<a href="<?php echo site_url('admin/kelas') ?>" style="color: dimgray;">
					<i class="fa fa-book"></i> <span>Kelas</span>
				</a>
			</li>
			<li class="<?php echo $this->uri->segment(2) == 'kandidat' ? 'active' : '';?>">
				<a href="<?php echo site_url('admin/kandidat') ?>" style="color: dimgray;">
					<i class="fa fa-users"></i> <span>Kandidat</span>
				</a>
			</li>
			<li class="<?php echo $this->uri->segment(2) == 'visi_misi' ? 'active' : '';?>">
				<a href="<?php echo site_url('admin/visi_misi') ?>" style="color: dimgray;">
					<i class="fa fa-paper-plane"></i> <span>Visi Misi</span>
				</a>
			</li>
			<li class="<?php echo $this->uri->segment(2) == 'suara' ? 'active' : '';?>">
				<a href="<?php echo site_url('admin/suara') ?>" style="color: dimgray;">
					<i class="fa fa-bell"></i> <span>Suara</span>
				</a>
			</li>
			<li class="<?php echo $this->uri->segment(2) == 'user' ? 'active' : '';?>">
				<a href="<?php echo site_url('admin/user') ?>" style="color: dimgray;">
					<i class="fa fa-user"></i> <span>User</span>
				</a>
			</li>
			<li class="<?php echo $this->uri->segment(2) == 'ulasan' ? 'active' : '';?>">
				<a href="<?php echo site_url('admin/ulasan') ?>" style="color: dimgray;">
					<i class="fa fa-comment"></i> <span>Ulasan</span>
				</a>
			</li>
			<li class="<?php echo $this->uri->segment(2) == 'logout' ? 'active' : '';?>">
				<a href="<?php echo site_url('auth/logout') ?>" style="color: dimgray;">
					<i class="fa fa-sign-out"></i> <span>Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
<div class="content-wrapper">
