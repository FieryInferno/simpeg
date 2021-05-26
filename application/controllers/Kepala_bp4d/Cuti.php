<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {
  
	public function index()
	{
    $data['title']  = 'Pengajuan Cuti';
    $data['cuti']   = $this->ModelCuti->getAll();
		$this->load->view('kasubag/pengajuanCuti', $data);
	}
}
