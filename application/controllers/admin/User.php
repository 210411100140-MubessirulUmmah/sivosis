<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		if ($this->session->userdata('level') != 'admin'){
			redirect('auth');
		}
	}
	public function index()
	{
		$data['title'] = 'User';
		$data['rows'] = $this->UserModel->getUser()->result();
		$this->load->view('templates/admin_header',$data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/user',$data);
		$this->load->view('templates/admin_footer');
	}
	public function tambah()
	{
		$data['title'] = 'Tambah User';
		$data['kelas'] = $this->db->get('kelas')->result();
		$this->load->view('templates/admin_header',$data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/user_tambah',$data);
		$this->load->view('templates/admin_footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit User';
		$data['kelas'] = $this->db->get('kelas')->result();
		$data['row'] = $this->db->get_where('user',['id'=>$id])->row();;
		$this->load->view('templates/admin_header',$data);
		$this->load->view('templates/admin_topbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/user_edit',$data);
		$this->load->view('templates/admin_footer');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}

	public function simpan(){
		$this->UserModel->simpan();
		redirect('admin/user');
	}

	public function update(){
		$this->UserModel->update();
		redirect('admin/user');
	}

	public function hapus($id){
		$this->db->delete('user',['id' => $id]);
		$this->db->delete('suara',['id_user' => $id]);
		redirect('admin/user');
	}
	
}
?>
