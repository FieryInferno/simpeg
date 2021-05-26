<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		if ($this->session->level){
			switch ($this->session->level) {
				case 'pegawai':
					redirect ('pegawai');
					break;
				case 'admin':
					redirect ('admin');
					break;
				case 'kepala_bp4d':
					redirect ('kepala_bp4d');
					break;
				case 'kasubid':
					redirect ('kasubid');
					break;	
        case 'kasubag':
          redirect ('kasubag.html');
          break;			
			}
		}
	}

	public function index()
	{
		if ($this->input->post()) {
			$data	= $this->ModelLogin->login();
			if ($data) {
				$this->session->set_userdata([
          'id_user' => $data['id_user'],
					'email'	  => $data['email'],
					'level'	  => $data['level']
				]);
				switch ($this->session->level) {
					case 'pegawai':
						redirect ('pegawai');
						break;
					case 'admin':
						redirect ('admin');
						break;
					case 'kepala_bp4d':
						redirect ('kepala_bp4d');
						break;
					case 'kasubid':
						redirect ('kasubid');
						break;			
				}
			} else {
				$this->session->set_flashdata(['error'=>'Login Gagal!!!']);
			}
		}
		$this->load->view('login');
	}

	public function aksilogin()
	{
		$nip= $this->input->post('nip');
		$password= $this->input->post('password');
		$data= $this->Modellogin->login($nip,$password);
		if ($data) {
			switch ($data['jabatan']) {
				case 'staff':
					redirect ('staff');
					break;
				case 'kepala_seksi':
					redirect ('kepala_seksi');
					break;
				case 'kepala_subseksi':
					redirect ('kepala_subseksi');
					break;
				case 'satgas':
					redirect ('satgas');
					break;
				case 'tata_usaha':
					redirect ('tata_usaha');
					break;				
				}
				}else {
					$this->session->set_flashdata(['error'=>'Login Gagal!!!']);
					redirect ('login');
			}
		}
	}
