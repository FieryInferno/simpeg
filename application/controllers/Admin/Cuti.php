<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {
  
	public function index()
	{
    $data['title']  = 'Pengajuan Cuti';
    $data['cuti']   = $this->ModelCuti->getAll();
		$this->load->view('admin/pengajuanCuti', $data);
	}

  public function buatSurat($id_cuti)
  {
    $this->ModelCuti->buatSurat($id_cuti);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses</strong> Surat Edaran Berhasil Dibuat.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('admin/pengajuan_cuti.html');
  }
}
