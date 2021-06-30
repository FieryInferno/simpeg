<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {
  
	public function index()
	{
    $data['title']  = 'Pengajuan Cuti';
    $this->db->join('pegawai', 'cuti.id_pegawai = pegawai.id_user');
    $this->db->where_in('status_cuti', ['1', '2']);
    $data['cuti']   = $this->db->get('cuti')->result_array();
		$this->load->view('kepala_bp4d/pengajuan_cuti', $data);
	}

  public function verifikasi($id_cuti)
  {
    $this->ModelCuti->verifikasiKepala($id_cuti);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses</strong> Berhasil verifikasi Surat Edaran.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('kepala_bp4d/pengajuan_cuti.html');
  }
}
