<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model
{
	public function pilih_kandidat(){
		$data = [
			'id_user' => $this->input->post('id_user'),
			'nama_kandidat' => $this->input->post('nama_kandidat'),
		];
		$this->db->insert('suara',$data);
	}

	public function update_status_user(){
		$data = ['status' => 1];
		$this->db->where('id',$this->input->post('id_user'));
		$this->db->update('user',$data);
	}

	public function getUser(){
		$this->db->select('*, user.id as id_user, user.nama as nama_user, kelas.nama as nama_kelas');
		$this->db->from('user');
		$this->db->join('kelas','kelas.id = user.id_kelas','left');
		return $this->db->get();
	}
	
	public function simpan(){
		$data = [
			'nama' => $this->input->post('nama',true),
			'email' => $this->input->post('email',true),
			'kelas' => $this->input->post('kelas',true),
			'message' => $this->input->post('message',true),
		];
		$this->db->insert('ulasan',$data);
	}

}
