<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('HomeModel');
		if ($this->session->userdata('level') != 'siswa'){
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = "Home";
		$data['kandidat'] = $this->db->get('kandidat')->result();
		$data['ulasan'] = $this->db->get('ulasan')->result();
		$data['rows'] = $this->HomeModel->getUser()->result();
		$data['kandidat1'] = $this->db->get_where('suara',['nama_kandidat' => 'Calon ke-1'])->num_rows();
		$data['kandidat2'] = $this->db->get_where('suara',['nama_kandidat' => 'Calon ke-2'])->num_rows();
		$data['kandidat3'] = $this->db->get_where('suara',['nama_kandidat' => 'Calon ke-3'])->num_rows();
		$data['total_pemilih'] = $this->db->get_where('user', array('level' => 'siswa'))->num_rows();
		$data['total_admin'] = $this->db->get_where('user', array('level' => 'admin'))->num_rows();
		$data['total_kandidat'] = $this->db->get('kandidat')->num_rows();
		$data['total_kelas'] = $this->db->get('kelas')->num_rows();
		$data['sudah_vote'] = $this->db->get('suara')->num_rows();
		$data['user'] = $this->db->get_where('user',['id' => $this->session->userdata('id')])->row();
		$this->load->view('templates/header',$data);
		$this->load->view('home',$data);
		$this->load->view('templates/footer');
	}

	public function visimisi($id_kandidat)
	{
		$data['title'] = "Visi & Misi";
		$data['kandidat'] = $this->db->get_where('kandidat',['id' => $id_kandidat])->row();
		$data['visimisi'] = $this->db->get('visimisi',['id_kandidat' => $id_kandidat])->row();
		$this->load->view('templates/header',$data);
		$this->load->view('visimisi',$data);
		$this->load->view('templates/footer');
	}

	public function pilih_kandidat(){
		$this->HomeModel->pilih_kandidat();
		$this->HomeModel->update_status_user();
		if($this->db->affected_rows() > 0){
			$result = ['succes' => true];
		}else{
			$result = ['succes' => false];
		}

		echo json_encode($result);
	}

	public function simpan(){
		$this->HomeModel->simpan();
		redirect('home');
	}
}
