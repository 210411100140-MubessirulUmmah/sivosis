<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Suara extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SuaraModel');
		if ($this->session->userdata('level') != 'admin'){
			redirect('auth');
		}
	}
	public function index()
	{
		$data['title'] = 'Suara';
		$data['rows'] = $this->SuaraModel->getSuara()->result();
		$this->load->view('templates/admin_header',$data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/suara',$data);
		$this->load->view('templates/admin_footer');
	}


	public function hapus($id)
	{
		$this->db->delete('suara',['id' => $id]);
		redirect('admin/suara');
	}
	
}
?>
