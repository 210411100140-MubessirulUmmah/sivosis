<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KandidatModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
    	$this->load->database();
		
	}
	public function simpan(){
		$kelas = $this->input->post('nama',true);
		$data = [];
		foreach ($kelas as $key => $value){
			$data[] = [
				'nama' => $kelas[$key]
			];
		}
		$this->db->insert_batch('kelas',$data);
	}

	public function update(){
		$foto = $_FILES['foto']['name'];
		if ($foto){
			$config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
                $config['max_size']             = 2048;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto'))
                {
                    echo $this->upload->display_errors();
                }
                else
                {
                    $CekFotoLama = $this->db->get_where('kandidat',['id'=> $this->input->post('id')])->row();
					if ($CekFotoLama->foto != 'default.png') {
						unlink('assets/img/' . $CekFotoLama->foto);
					}

					$FotoBaru = $this->upload->data('file_name');
					$kandidat['foto'] = $FotoBaru;
                }
		}
		$kandidat['nama_kandidat'] = $this->input->post('nama_kandidat',true);
		$kandidat['nama_calon'] = $this->input->post('nama_calon',true);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('kandidat',$kandidat);
	}
}
