<?php

class sinisa_model extends CI_Model{
    function index(){

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
}