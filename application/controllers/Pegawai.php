<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	
	function __construct(){
		$data['berkas'] = $this->db->get('tb_berkas');
		$this->load->view('tampil_berkas',$data);
	}

	function index(){
		$data['pegawai'] = $this->M_pegawai->get_data();
		$this->load->view('pegawai/vw_form.php',$data);
	}

	// public function save()
	// {
	// 	$data['name'] = $this->input->post('nama');
	// 	$data['email'] = $this->input->post('email');
	// 	$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
	// 	$data['agama'] = $this->input->post('agama');
	// 	$data['alamat'] = $this->input->post('alamat');
	// 	$this->load->view('vw_pegawai',$data);
	// }

	public function save()
	{
		$this->form_validation->set_rules('nama','Nama','required|min_length[5]|max_length[255]');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('agama','Agama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
 
		if ($this->form_validation->run()==true)
        {
			$data['nama'] = $this->input->post('nama');
			$data['email'] = $this->input->post('email');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$data['agama'] = $this->input->post('agama');
			$data['alamat'] = $this->input->post('alamat');
			$this->load->view('pegawai/vw_pegawai',$data);
		}
		else
		{
			$this->load->view('pegawai/vw_form');			
		}
	}

}