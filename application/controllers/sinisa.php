<?php

class sinisa extends CI_Controller {

    public function index(){
		$this->load->view('sinisa_home');
	}

	public function penyuluhan(){
		$this->load->view('penyuluhan_view');
	}
}