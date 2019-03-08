<?php

class m_data extends CI_Model{
	function data($number,$offset){
		return $query = $this->db->get('id_donasi',$number,$offset)->result();
	}

	function jumlah_data(){
		return $this->db->get('id_donasi')->num_rows();
	}
}
?>