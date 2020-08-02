<?php 
class M_pegawai extends CI_Model{
	function get_data(){
		return $this->db->get('tb_pegawai');
	}
}