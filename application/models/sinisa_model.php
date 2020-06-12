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

	function getSewa(){
		$this->db->select('*');
		$this->db->from('barang');
		$query = $this->db->get();
            return $query;
	}

	function getdaftarpenyewa(){
		$this->db->select('*');
		$this->db->from('sewa');
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

	//INPUT
	function input_data($data, $table){
		$query = $this->db->insert($table, $data);
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

	
	function konfirmasi_data($data,$table){
		return $this->db->get_where($table, $where);
	}

	function konfirmasi_status_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	/*function konfirmasi_data($id){
		$array = [
			'status' => 'sudah dikonfirmasi'
		];
		$this->db->update($this->penyuluhan, $array, ['id' => $id]);
	}*/

	function getdetailbarang($id){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('id_barang',$id);
		$query = $this->db->get();
			return $query;
	}

	function hapusdatabarang($where,$table){
		$this->db->where($where);
		$query = $this->db->delete($table);
			return ($this->db->affected_rows($query) > 0) ? TRUE : FALSE;
	}

	function editdatabarang($where,$table){
		return $this->db->get_where($table, $where);
	}

	function updatedatabarang($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function inputdatasewa($data, $table){
		$query = $this->db->insert($table, $data);
		return $query;
	}

	function inputdatabarang($data, $table){
		$query = $this->db->insert($table, $data);
		return $query;
	}

	function editdatapenyewa($where,$table){
		return $this->db->get_where($table, $where);
	}
	function hapusdatapenyewa($where,$table){
		$this->db->where($where);
		$query = $this->db->delete($table);
			return ($this->db->affected_rows($query) > 0) ? TRUE : FALSE;
	}
}
?>