<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasubag extends CI_Controller {
  
	public function index()
	{
    $data['title']  = 'Dashboard';
		$this->load->view('kasubag/index', $data);
	}
}
