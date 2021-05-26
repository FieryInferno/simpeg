<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelJabatan extends CI_model {

	public function get_all()
	{
		return $this->db->get('kenaikan_jabatan_reguler')->result_array();
	}

	public function tambah_jabatan_reguler()
	{
		$this->db->insert('kenaikan_jabatan_reguler', [
			'id_pegawai'		=> $this->input->post('pegawai'),
			'pangkat_diajukan'	=> $this->input->post('pangkat')
		]);
	}

	public function get_jabatan_reguler()
	{
		$this->db->join('pegawai', 'kenaikan_jabatan_reguler.id_pegawai = pegawai.id_pegawai');
		return $this->db->get('kenaikan_jabatan_reguler')->result_array();
	}

	public function get_jabatan_pilihan()
	{
		$this->db->join('pegawai', 'kenaikan_jabatan_pilihan.id_pegawai = pegawai.id_pegawai');
		return $this->db->get('kenaikan_jabatan_pilihan')->result_array();
	}

	public function tambah_jabatan_pilihan()
	{
		$this->db->insert('kenaikan_jabatan_pilihan', [
			'id_pegawai'		=> $this->input->post('pegawai'),
			'pangkat_diajukan'	=> $this->input->post('pangkat')
		]);
	}
}
