<?php

class sinisa extends CI_Controller {
	//untuk mengeksekusi mahasiswa_mode lebih awal 
	function __construct(){
		parent:: __construct();
		$this->load->model('sinisa_model');
			$this->load->library('template');
	}

    public function index(){
		$this->load->view('sinisa_home');
	}

	public function back(){
		redirect('sinsia');
	}

	public function penyuluhan(){
		$data['user'] = $this->sinisa_model->getAll()->result();
		$this->template->views('penyuluhan_view', $data);
	}

	public function sewa(){
		$this->load->view('sewa_view');
	}

	//CRUD
	public function edit($id){
		$where = array('id' => $id);
		$data['grup'] = $this->sinisa_model->getgrup()->result();
		$data['user'] = $this->sinisa_model->edit_data($where, 'penyuluhan') ->result();
		$this->template->views('crud/edit_penyuluhan', $data);
	}

	public function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$instansi = $this->input->post('nama_instansi');
		$tanggal_input = $this->input->post('tanggal_input');
		$tanggal_output = $this->input->post('tanggal_output');
		$materi = $this->input->post('materi');

		$data = array(
			'nama' =>$nama,
			'nama_instansi' =>$instansi,
			'tanggal_input' =>$tanggal_input,
			'tanggal_output' =>$tanggal_output,
			'materi' =>$materi
		);
		
		$where = array(
			'id' => $id
		);
		$this->sinisa_model->update_data($where,$data, 'penyuluhan');
		redirect('sinisa');
	}

	public function hapus($id){
		$where = array('id' => $id);
		$this->sinisa_model->hapus_data($where, 'penyuluhan');
		redirect('sinisa');
	}

}