<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		$data['title']	= 'Dashboard';
		$this->load->view('pegawai/index', $data);
	}

  public function profile()
  {
    $data = $this->db->get_where('pegawai', [
      'id_user' => $this->session->id_user
    ])->row_array();
		$data['title']	= 'Profile';
		$this->load->view('pegawai/profile', $data);
  }

  public function ubah_profile()
  {
    if ($this->input->post()) {
      $this->db->where('id_user', $this->session->id_user);
      $this->db->update('pegawai', [
        'nip' => $this->input->post('nip'),
        'nama_lengkap' => $this->input->post('nama_lengkap'),
        'email' => $this->input->post('email'),
        'tempat_lahir' => $this->input->post('tempat_lahir'),
        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
        'no_telp' => $this->input->post('no_telp'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'agama' => $this->input->post('agama'),
        'status_perkawinan' => $this->input->post('status_perkawinan'),
        'suku_bangsa' => $this->input->post('suku_bangsa')
      ]);
      $this->session->set_flashdata('pesan', '
        <div class="alert alert-succcess alert-dismissible fade show" role="alert">
          <strong>Sukses</strong> Berhasil edit profile.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      ');
      redirect('pegawai/profile');
    }
    $data = $this->db->get_where('pegawai', [
      'id_user' => $this->session->id_user
    ])->row_array();
		$data['title']	= 'Profile';
		$this->load->view('pegawai/ubah_profile', $data);
  }

  public function pengajuanCuti()
  {
    $data['cuti'] = $this->db->get_where('cuti', [
      'id_pegawai'  => $this->session->id_user
    ])->result_array();
		$data['title']	= 'Pengajuan Cuti';
    $this->load->view('pegawai/pengajuan_cuti', $data);
  }

  public function tambahPengajuanCuti()
  {
    if ($this->input->post()) {
      $tanggal1     = new DateTime($this->input->post('tanggal_mulai'));
      $tanggal2     = new DateTime($this->input->post('tanggal_selesai'));
      $jumlah_hari  = $tanggal2->diff($tanggal1)->format("%a");
      $this->db->insert('cuti', [
        'id_pegawai'        => $this->session->id_user,
        'tanggal_pengajuan' => date('Y-m-d'),
        'jenis_cuti'        => $this->input->post('jenis_cuti'),
        'jumlah_hari'       => $jumlah_hari,
        'tanggal_mulai'     => $this->input->post('tanggal_mulai'),
        'tanggal_selesai'   => $this->input->post('tanggal_selesai'),
        'alamat_cuti'       => $this->input->post('alamat_cuti')
      ]);
      $this->session->set_flashdata('alert', '
        <strong>Sukses</strong> Berhasil tambah pengajuan cuti.
      ');
      redirect('pegawai/pengajuan_cuti.html');
    }
    $data['title']	= 'Tambah Pengajuan Cuti';
    $this->load->view('pegawai/tambah_pengajuan_cuti', $data);
  }
}
