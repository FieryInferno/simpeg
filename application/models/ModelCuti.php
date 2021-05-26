<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCuti extends CI_model {
  
	public function getAll()
	{
    return $this->db->get_where('cuti', ['status_cuti' => '0'])->result_array();
	}

  public function verifikasi($id_cuti)
  {
    $this->db->update('cuti', ['status_cuti'  => '1'], ['id_cuti' => $id_cuti]);
  }
}
