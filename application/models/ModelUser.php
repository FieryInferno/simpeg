<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_model {
	
	public function get_all()
	{
		return $this->db->get('pegawai')->result_array();
	}

	public function verifikasi_daftar($nip)
	{
		$data=$this->db->get_where('user',[
			'nip'=>$nip
		])->row_array();
		if ($data['status']=='belum_verifikasi'){
			$status='sudah_verifikasi';
		} else {
			$status='belum_verifikasi';
		}
		$this->db->where('nip',$nip);
		$this->db->update('user',[
			'status'=> $status
		]);
	}

  public function tambah()
  {
    $id_user  = uniqid();
    $this->db->insert('pegawai', [
      'nama_lengkap'  => $this->input->post('nama_lengkap'),
      'email'         => $this->input->post('email'),
      'nip'           => $this->input->post('nip'),
      'bagian'        => $this->input->post('bagian'),
      'bidang'        => $this->input->post('bidang'),
      'id_user'       => $id_user
    ]);
    $this->db->insert('user', [
      'id_user' => $id_user,
      'level'   => 'pegawai'
    ]);
  }
}
