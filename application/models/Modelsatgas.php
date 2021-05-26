<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelsatgas extends CI_model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function add_satgas()
	{
		$this->db->insert('satgas',[
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'bagian' => $this->input->post('bagian'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		]);
	}

	public function get_all()
	{
		return $this->db->get('satgas')->result_array();
	}

	public function get_by_id($id_satgas)
	{
		return $this->db->get_where('satgas',['id_satgas'=>$id_satgas])->row_array();
	}

	public function update_satgas($id_satgas)
	{
		$this->db->where('id_satgas',$id_satgas);
		$this->db->update('satgas',[
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'bagian' => $this->input->post('bagian'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		]);
	}

	public function deletesatgas($id_satgas)
	{
		$this->db->where('id_satgas', $id_satgas);
		$this->db->delete('satgas');
	}

}
