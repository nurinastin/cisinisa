<?php

class sinisa_model extends CI_Model{
    function index(){

    }

	function getAll(){
		//query untuk memilih tm_user yang akan dipakai pada database terkait
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('ts_grup', 'user.grup = ts_grup.id_grup');
		//fungsi eksekusi query yang sama seperti mysqli_query
		$query = $this->db->get();
		//mengembalikan nilai $query
		return $query;
	}

	function getgrup(){
		$this->db->select('*');
		$this->db->from('ts_grup');
		$query = $this->db->get();
			//  $query= $this->db->get();
			 return $query;
	}

    function login($user,$pass,$table){
        //query untuk memilih tabel user pada field username dan password
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		//fungsi eksekusi query yang sama seperti mysqli_query
		$query = $this->db->get();
		//mengembalikan nilai $query
		return $query;
	}
}
?>