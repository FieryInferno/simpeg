<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
		parent::__construct();
		$this->load->library('session');
		if ($this->session->level){
			switch ($this->session->level) {
				case 'pegawai':
					redirect ('pegawai');
					break;
				case 'kepala_bp4d':
					redirect ('kepala_bp4d');
					break;
				case 'kasubid':
					redirect ('kasubid');
					break;			
			}
		}
	}
	
	public function index()
	{
		$data['title']	= 'Dashboard';
		$this->load->view('admin/index', $data);
	}

  public function pegawai()
  {
    $data['pegawai']  = $this->ModelPegawai->get_all();
    $data['title']    = 'Data Pegawai';
    $this->load->view('admin/pegawai', $data);
  }

  public function data_user()
  {
    $data['user']  = $this->ModelUser->get_all();
    $data['title']    = 'Data User';
    $this->load->view('admin/user', $data);
  }

  public function verifikasi_pegawai($idPegawai)
  {
    $this->ModelPegawai->verifikasi($idPegawai);
    $this->session->set_flashdata(['alert'  => 'Data sudah diverifikasi']);
    redirect('admin/data_user');
  }

  public function jabatan_reguler()
  {
    $data['title']				= 'Data Jabatan Reguler';
    $data['jabatan_reguler'] 	= $this->ModelJabatan->get_jabatan_reguler();
    $this->load->view('admin/jabatan_reguler', $data);
  }

  public function jabatan_pilihan()
  {
  	$data['title']				= 'Data Jabatan Pilihan';
  	$data['jabatan_pilihan'] 	= $this->ModelJabatan->get_jabatan_pilihan();
  	$this->load->view('admin/jabatan_pilihan', $data);
  }

  public function tambah_jabatan_reguler()
  {
  	if ($this->input->post()) {
  		$this->ModelJabatan->tambah_jabatan_reguler();
  		$this->session->set_flashdata('pesan', 'Data Kenaikan Jabatan Berhasil Ditambah');
  		redirect('admin/jabatan_reguler');
  	}
  	$data['pegawai']	= $this->ModelPegawai->get_all();
  	$data['title']		= 'Data Jabatan Reguler';
  	$this->load->view('admin/tambah_jabatan_reguler', $data);	
  }

  public function tambah_jabatan_pilihan()
  {
    if ($this->input->post()) {
      $this->ModelJabatan->tambah_jabatan_pilihan();
      $this->session->set_flashdata('pesan', 'Data Kenaikan Jabatan Berhasil Ditambah');
      redirect('admin/jabatan_pilihan');
    }
    $data['pegawai']	= $this->ModelPegawai->get_all();
    $data['title']		= 'Data Jabatan Pilihan';
    $this->load->view('admin/tambah_jabatan_pilihan', $data);	
  }

  public function verifikasi_cuti($id_cuti)
  {
    $this->db->where('id_cuti', $id_cuti);
    $this->db->update('cuti', [
      'status_cuti'  => 'verifikasi_admin'
    ]);
    $this->session->set_flashdata('alert', 'Data cuti berhasil disetujui');
    redirect('admin/pengajuan_cuti');
  }

  public function tambah_data_user()
  {
    if ($this->input->post()) {
      $this->ModelUser->tambah();
      $this->session->set_flashdata('alert', 'Data user ditambah ');
      redirect('admin/data_user');
    }
		$data['title']	= 'Tambah User';
		$this->load->view('admin/tambahUser', $data);
  }
}
