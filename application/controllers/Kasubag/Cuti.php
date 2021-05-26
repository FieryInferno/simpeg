<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {
  
	public function index()
	{
    $data['title']  = 'Pengajuan Cuti';
    $data['cuti']   = $this->ModelCuti->getAll();
		$this->load->view('kasubag/pengajuanCuti', $data);
	}

  public function verifikasi($id_cuti)
  {
    $this->ModelCuti->verifikasi($id_cuti);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses</strong> Berhasil verifikasi cuti.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('kasubag/pengajuan_cuti.html');
  }

  public function verifikasiSuratEdaran($id_cuti)
  {
    $this->ModelCuti->verifikasiSuratEdaran($id_cuti);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses</strong> Berhasil verifikasi Surat Edaran.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('kasubag/pengajuan_cuti.html');
  }
}
