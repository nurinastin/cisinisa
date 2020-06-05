<?php

class sinisa_model extends CI_Model{
    function index(){

    }

	function getAll(){
		$this->db->select('*');
		$this->db->from('penyuluhan');
		$query = $this->db->get();
            return $query;

		
	}

	
	function getgrup(){
		$this->db->select('*');
		$this->db->from('ts_grup');
		$query = $this->db->get();
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

	//CRUD UPDATE DELETE
	function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$query = $this->db->delete($table);
			return ($this->db->affected_rows($query) > 0) ? TRUE : FALSE;
	}
}
?>