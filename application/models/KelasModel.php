<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelasModel extends CI_Model
{
	public function getUser()
	{
		$this->db->select('*, user.id as id_user, user.nama as nama_user, kelas.nama as nama_kelas');
		$this->db->from('user');
		$this->db->join('kelas', 'kelas.id = user.id_kelas', 'left');
		return $this->db->get();
	}

	public function jumlahsiswa()
	{
		$query = $this->db->query('SELECT COUNT(user.id_kelas) as total, kelas.id, kelas.nama FROM user right JOIN kelas on user.id_kelas = kelas.id WHERE kelas.nama NOT IN ("") GROUP BY kelas.nama;');
		return $query->result();
	}
	public function simpan()
	{
		$kelas = $this->input->post('nama', true);
		$data = [];
		foreach ($kelas as $key => $value) {
			$data[] = [
				'nama' => $kelas[$key]
			];
		}
		$this->db->insert_batch('kelas', $data);
	}

	public function update()
	{
		$data = ['nama' => $this->input->post('nama', true)];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('kelas', $data);
	}
}
