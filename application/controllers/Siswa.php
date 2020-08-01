<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Siswa extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model('siswa_model');
	}
 
	public function index(){
        //echo "ini adalah method index pada controller Siswa";
        $this->load->view('tampil_siswa');
	}
 
	public function profil(){
		echo "ini adalah method profil pada controller Siswa";
    }
    
	public function folder(){
		$this->load->view('siswa/folder_siswa');
    }
    
    public function multi(){
		$this->load->view('siswa/kepala_siswa');
		$this->load->view('siswa/badan_siswa');
		$this->load->view('siswa/kaki_siswa');
	}
 
}