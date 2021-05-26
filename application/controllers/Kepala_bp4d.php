<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepala_bp4d extends CI_Controller {

	public function index()
	{
		$data['title']	= 'Dashboard';
		$this->load->view('kepala_bp4d/index', $data);
	}

  public function pengajuan_cuti()
  {
    $this->db->join('pegawai', 'cuti.id_pegawai = pegawai.id_user');
    $this->db->where('status_cuti', 'verifikasi_admin');
    $this->db->or_where('status_cuti', 'verifikasi_kepala');
    $data['cuti']   = $this->db->get('cuti')->result_array();
		$data['title']	= 'Pengajuan Cuti';
    $this->load->view('kepala_bp4d/pengajuan_cuti', $data);
  }

  public function verifikasi_cuti($id_cuti)
  {
    $this->db->where('id_cuti', $id_cuti);
    $this->db->update('cuti', [
      'status_cuti'  => 'verifikasi_kepala'
    ]);
    $this->session->set_flashdata('alert', 'Data cuti berhasil disetujui');
    redirect('kepala_bp4d/pengajuan_cuti');
  }
}
