<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
  
	public function index()
	{
    if ($this->input->post()) {
      $this->ModelDaftar->daftar();
      $this->session->set_flashdata(['alert' => 'Data Sudah Ditambahkan']);
      redirect('daftar');
    }
		$this->load->view('daftar');
	}
}
