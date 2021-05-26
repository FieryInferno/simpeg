<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLogin extends CI_model {
	
	public function login()
	{
		return $this->db->get_where('user', [
			'email'		=> $this->input->post('email'),
			'password'	=> $this->input->post('password')
		])->row_array();
	}
}
