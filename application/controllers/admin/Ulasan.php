<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Ulasan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UlasanModel');
		if ($this->session->userdata('level') != 'admin'){
			redirect('auth');
		}
	}
	public function index()
	{
		$data['title'] = 'Ulasan Pengguna';
		$data['rows'] = $this->db->get('ulasan')->result();
		$this->load->view('templates/admin_header',$data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/ulasan',$data);
		$this->load->view('templates/admin_footer');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}
	
}
?>
