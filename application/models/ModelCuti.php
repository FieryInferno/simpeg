<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;

class ModelCuti extends CI_model {
  
	public function getAll()
	{
    switch ($this->session->level) {
      case 'kasubag':
        $this->db->where('status_cuti', '0');
        $this->db->or_where('status_cuti', '2');
        $status_cuti  = '0';
        break;
      case 'admin':
        $this->db->where('status_cuti', '1');
        break;
      case 'sekretaris':
        $this->db->where('status_cuti', '3');
        break;
      case 'kepala_bp4d':
        $this->db->where('status_cuti', '4');
        break;
      
      default:
        # code...
        break;
    }
    $this->db->join('pegawai', 'cuti.id_pegawai = pegawai.id_user');
    return $this->db->get('cuti')->result_array();
	}

  public function verifikasi($id_cuti)
  {
    $this->db->update('cuti', ['status_cuti'  => '1'], ['id_cuti' => $id_cuti]);
  }

  public function buatSurat($id_cuti)
  {
    $this->db->select_max('no_urut');
    $hasil  = $this->db->get('cuti')->row_array();
    if ($hasil['no_urut'] !== NULL) {
      switch (strlen($hasil['no_urut'] + 1)) {
        case '1':
          $no_urut  = '000' . $hasil['no_urut'];
          break;
        case '2':
          $no_urut  = '00' . $hasil['no_urut'];
          break;
        case '3':
          $no_urut  = $hasil['no_urut'];
          break;
        
        default:
          # code...
          break;
      }
      $data['no_surat'] = $no_urut . '/SE/2021'; 
      $data['no_urut']  = $hasil['no_urut'];
    } else {
      $data['no_surat'] = '001/SE/2021'; 
      $data['no_urut']  = 1;
    }

    $this->db->join('pegawai', 'cuti.id_pegawai = pegawai.id_user');
    $data['pegawai']  = $this->db->get_where('cuti', ['id_cuti' => $id_cuti])->row_array();
    
    ob_start();
      $this->load->view('admin/surat_izin_cuti_tahun', $data);
      $html = ob_get_contents();
    ob_end_clean();
    ob_clean();
    $filename   = uniqid('Surat_Edaran');
    $options  	= new Options();
    $options->set('isRemoteEnabled', TRUE);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('legal', 'portrait');
    $dompdf->render();
    $output = $dompdf->output();
    file_put_contents('./assets/' . $filename . '.pdf', $output);
    
    $this->db->update('cuti', [
      'surat_izin'  => $filename . '.pdf',
      'status_cuti' => '3',
      'no_urut'     => $data['no_urut'],
    ], ['id_cuti' => $id_cuti]);
  }

  public function verifikasiSuratEdaran($id_cuti)
  {
    $this->db->update('cuti', ['status_cuti'  => '3'], ['id_cuti' => $id_cuti]);
  }

  public function verifikasiSekretaris($id_cuti)
  {
    $this->db->update('cuti', ['status_cuti'  => '4'], ['id_cuti' => $id_cuti]);
  }

  public function verifikasiKepala($id_cuti)
  {
    $this->db->update('cuti', ['status_cuti'  => '6'], ['id_cuti' => $id_cuti]);
  }
}
