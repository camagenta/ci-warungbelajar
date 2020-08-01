<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajarlibrary extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->library('table');
	}

	public function index()
	{
		$this->load->view('vw_belajar_library');
	}
}