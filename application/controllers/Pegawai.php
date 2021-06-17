<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;

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
      if ($_FILES['foto']['name'] !== '') {
        $config['upload_path']          = './assets/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('foto')){
          $this->session->set_flashdata(['alert' => $this->upload->display_errors()]);
          $this->load->view('daftar');
        }else{
          $foto = $this->upload->data('file_name');
          if (file_exists('./assets/' . $this->input->post('oldFoto'))) {
            unlink('./assets/' . $this->input->post('oldFoto'));
          }
        }
      } else {
        $foto = $this->input->post('oldFoto');
      }
      
      $this->db->where('id_user', $this->session->id_user);
      $this->db->update('pegawai', [
        'nip'               => $this->input->post('nip'),
        'nama_lengkap'      => $this->input->post('nama_lengkap'),
        'email'             => $this->input->post('email'),
        'tempat_lahir'      => $this->input->post('tempat_lahir'),
        'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
        'no_telp'           => $this->input->post('no_telp'),
        'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
        'agama'             => $this->input->post('agama'),
        'status_perkawinan' => $this->input->post('status_perkawinan'),
        'suku_bangsa'       => $this->input->post('suku_bangsa'),
        'foto'              => $foto
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

  public function pengajuanPindah()
  {
    if ($this->input->post()) {
      $data = $this->db->get_where('pegawai', ['id_user'  => $this->session->id_user])->row_array();
      ob_start();
        $this->load->view('surat_pengajuan_pindah.php', $data);
        $html = ob_get_contents();
      ob_end_clean();
      ob_clean();
      $filename = uniqid();
      $options  = new Options();
      $options->set('isRemoteEnabled', TRUE);
      $dompdf = new Dompdf($options);
      $dompdf->loadHtml($html);
      $dompdf->setPaper('legal', 'potrait');
      $dompdf->render();
      file_put_contents('./assets/' . $filename . '.pdf', $dompdf->output());

      $config['upload_path']    = './assets/';
      $config['allowed_types']  = 'jpeg|jpg|png';
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('sk_cpns')){
        print_r($this->upload->display_errors());
        die();
      }else{
        $sk_cpns = $this->upload->data('file_name');
      }

      if ( ! $this->upload->do_upload('sk_pangkat')){
        print_r($this->upload->display_errors());
        die();
      }else{
        $sk_pangkat = $this->upload->data('file_name');
      }

      if ( ! $this->upload->do_upload('kartu_pegawai')){
        print_r($this->upload->display_errors());
        die();
      }else{
        $kartu_pegawai  = $this->upload->data('file_name');
      }

      if ( ! $this->upload->do_upload('penilaian_kerja')){
        print_r($this->upload->display_errors());
        die();
      }else{
        $penilaian_kerja  = $this->upload->data('file_name');
      }

      $this->db->insert('pengajuan_pindah', [
        'id_user'           => $this->session->id_user,
        'sk_cpns'           => $sk_cpns,
        'sk_pangkat'        => $sk_pangkat,
        'kartu_pegawai'     => $kartu_pegawai,
        'penilaian_kerja'   => $penilaian_kerja,
        'surat_permohonan'  => $filename . '.pdf'
      ]);
      $this->session->set_flashdata('alert', '
        <strong>Sukses</strong> Berhasil tambah pengajuan pindah.
      ');
      redirect('pegawai/pengajuan_pindah');
    }
    $data           = $this->db->get_where('pengajuan_pindah', ['id_user' => $this->session->id_user])->row_array();
		$data['title']	= 'Pengajuan Pindah';
    $this->load->view('pegawai/pengajuan_pindah', $data);
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
      redirect('pegawai/pengajuan_cuti');
    }
    $data['title']	= 'Tambah Pengajuan Cuti';
    $this->load->view('pegawai/tambah_pengajuan_cuti', $data);
  }
}
