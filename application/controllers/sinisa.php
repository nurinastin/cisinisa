<?php

class sinisa extends CI_Controller {
	//untuk mengeksekusi mahasiswa_mode lebih awal 
	function __construct(){
		parent:: __construct();
		$this->load->model('sinisa_model');
			$this->load->library('template');
	}

    public function index(){
		//array data yang berindeks user dan memanggil mahasiswa_mmodel
		//dan menjalankan fungsi getAll()
		$data['user'] = $this->sinisa_model->getAll()->result();
		//menampilkan views menggunakan template yang letak view nya ada didalam folder crud
		//dan nama file nya home_mahasiswa
		$this->template->views('sinisa_home', $data);

	
}
}