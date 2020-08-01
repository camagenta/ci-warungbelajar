<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Siswa extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model('siswa_model');
	}
 
	public function index(){
        //echo "ini adalah method index pada controller Siswa";
        // $data['nama'] = "Taufik Hidayat";
        // $data['kelas'] = "3 IPA 1";

        // tutorial 5
        // $data['siswa'] = [
        //     ["nama" => "Budi", "kelas" => "3MM1"],
        //     ["nama" => "Cika", "kelas" => "3MM2"],
        //     ["nama" => "Dika", "kelas" => "3MM1"],
        // ];

        // tutorial 6
        $data['siswa'] = $this->siswa_model->get_data();
        $this->load->view('tampil_siswa', $data);
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