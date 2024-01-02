<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Kelas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('KelasModel');
		if ($this->session->userdata('level') != 'admin'){
			redirect('auth');
		}
	}
	public function index()
	{
		$data['title'] = 'Kelas';
		$data['rows'] = $this->KelasModel->jumlahsiswa();
		$this->load->view('templates/admin_header',$data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kelas',$data);
		$this->load->view('templates/admin_footer');
	}
	public function tambah()
	{
		$data['title'] = 'Tambah Kelas';
		$this->load->view('templates/admin_header',$data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kelas_tambah',$data);
		$this->load->view('templates/admin_footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Kelas';
		$data['row'] = $this->db->get_where('kelas',['id'=>$id])->row();;
		$this->load->view('templates/admin_header',$data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kelas_edit',$data);
		$this->load->view('templates/admin_footer');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}

	public function simpan(){
		$this->KelasModel->simpan();
		redirect('admin/kelas');
	}

	public function update(){
		$this->KelasModel->update();
		redirect('admin/kelas');
	}

	public function hapus($id){
		$this->db->delete('kelas',['id' => $id]);
		redirect('admin/kelas');
	}
	
}
?>
