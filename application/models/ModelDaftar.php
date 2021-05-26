<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDaftar extends CI_model {
  
	public function daftar()
	{
    $this->upload();
		$this->db->insert('pegawai',[
			'email'         => $this->input->post('email'),
			'nama_lengkap'  => $this->input->post('nama_lengkap'),
			'nip'           => $this->input->post('nip'),
      'id_user'       => uniqid(),
      'bidang'        => $this->input->post('bidang')
		]);
	}

  private function upload()
  {
    $config['upload_path']          = './assets/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
      $this->session->set_flashdata(['alert' => $this->upload->display_errors()]);
      $this->load->view('daftar');
		}else{
      return $this->upload->data('file_name');
		}
  }
}
