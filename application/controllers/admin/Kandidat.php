<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Kandidat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('KandidatModel');
		if ($this->session->userdata('level') != 'admin'){
			redirect('auth');
		}
	}
	public function index()
	{
		$data['title'] = 'Kandidat';
		$data['rows'] = $this->db->get('kandidat')->result();
		$this->load->view('templates/admin_header',$data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kandidat',$data);
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
		$data['title'] = 'Kandidat';
		$data['row'] = $this->db->get_where('kandidat',['id'=>$id])->row();;
		$this->load->view('templates/admin_header',$data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kandidat_edit',$data);
		$this->load->view('templates/admin_footer');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}

	public function simpan(){
		$this->KandidatModel->simpan();
		redirect('admin/kelas');
	}

	public function update(){
		$this->KandidatModel->update();
		redirect('admin/kandidat');
	}

	public function hapus($id){
		$this->db->delete('kelas',['id' => $id]);
		redirect('admin/kelas');
	}
	
}
?>
