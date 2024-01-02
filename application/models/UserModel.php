<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
    	$this->load->database();
		
	}
	public function getUser(){
		$this->db->select('*, user.id as id_user, user.nama as nama_user, kelas.nama as nama_kelas');
		$this->db->from('user');
		$this->db->join('kelas','kelas.id = user.id_kelas','left');
		$this->db->order_by('user.level','ASC');
		return $this->db->get();
	}
	public function simpan(){
		$data = [
			'level' => $this->input->post('level',true),
			'id_kelas' => $this->input->post('id_kelas'),
			'nama' => $this->input->post('nama',true),
			'email' => $this->input->post('email',true),
			'password' => password_hash($this->input->post('password',true), PASSWORD_DEFAULT),
		];
		$this->db->insert('user',$data);
	}

	public function update(){
		$data = [
			'id' => $this->input->post('id'),
			'id_kelas' => $this->input->post('id_kelas'),
			'nama' => $this->input->post('nama',true),
			'email' => $this->input->post('email',true),
			'password' => password_hash($this->input->post('password',true), PASSWORD_DEFAULT),
			'level' => $this->input->post('level',true)
		];
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('user',$data);
	}
}
