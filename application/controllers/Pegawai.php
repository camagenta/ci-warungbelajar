<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('M_pegawai');
	}

	function index(){
		$data['pegawai'] = $this->M_pegawai->get_data();
		$this->load->view('vw_pegawai.php',$data);
	}

}