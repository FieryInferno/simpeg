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
}
