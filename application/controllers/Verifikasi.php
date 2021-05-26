<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	public function index($idPegawai = null)
	{
    if ($this->input->post()) {
      $this->ModelPegawai->verifikasiPegawai($idPegawai);
      $this->session->set_flashdata(['error'  => 'Password berhasil disimpan']);
      redirect('Login');
    }
		$this->load->view('verifikasi');
	}
}
