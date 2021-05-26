<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekretaris extends CI_Controller {
  
	public function index()
	{
    $data['title']  = 'Dashboard';
		$this->load->view('sekretaris/index', $data);
	}
}
