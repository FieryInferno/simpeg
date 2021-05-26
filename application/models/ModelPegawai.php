<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPegawai extends CI_model {

	public function get_all()
	{
		return $this->db->get('pegawai')->result_array();
	}

  public function verifikasi($idPegawai)
  {
    $this->db->where('id_pegawai', $idPegawai);
    $this->db->update('pegawai', [
      'status'  => 'sudah'
    ]);
    $data = $this->db->get_where('pegawai', [
      'id_pegawai'  => $idPegawai
    ])->row_array();
    $config = [
			'mailtype'  	=> 'html',
			'charset'   	=> 'utf-8',
			'protocol'  	=> 'smtp',
			'smtp_host' 	=> 'smtp.gmail.com',
			'smtp_user'		=> 'fieryinferno33@gmail.com',  // Email gmail
			'smtp_pass'   => 'NaonWeAh00',  // Password gmail
			'smtp_crypto'	=> 'ssl',
			'smtp_port'   => 465,
			'crlf'    		=> "\r\n", 
			'newline' 		=> "\r\n"
		];
		$this->email->initialize($config);
		$this->email->from('fieryinferno33@gmail.com', 'Sistem BP4D Subang');
		$this->email->to($data['email']);
		$this->email->subject('Verifikasi User');
		$this->email->message(base_url() . 'verifikasi?id_pegawai=' . $idPegawai);
		$this->email->send();
  }

  public function verifikasiPegawai($idPegawai)
  {
    $data = $this->db->get_where('pegawai', [
      'id_pegawai'  => $idPegawai
    ])->row_array();
    $this->db->insert('user', [
      'id_user'   => $data['id_user'],
      'email'     => $data['email'],
      'password'  => $this->input->post('password'),
      'level'     => 'pegawai'
    ]);
  }
}
