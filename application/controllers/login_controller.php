<?php

class login_controller extends CI_Controller{
    function __construct() {
        parent:: __construct();
        $this->load->model('sinisa_model');
    }

    public function input_daftar(){
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
       // $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'alamat' => $alamat,
          //  'email' => $email,
            'username' => $username,
            'password' => $password
        );

        $this->sinisa_model->input_data($data, 'user');
        redirect('login_controller/index');
    }

    public function daftar(){
        $this->load->view('daftar_view');
    }

    public function index(){
        $this->load->view('login_view');
    }

    public function cek_log(){
        $username = $this->input->post('txt_user');
        $password = $this->input->post('txt_pass');

        //$cek mengarahkan ke sinisa_model, login dengan data $username,$password, table user
        $cek = $this->sinisa_model->login($username, $password, 'user')->result();

        if($cek != FALSE){
            foreach ($cek as $row) {
                $user = $row->username;
                $grup = $row->grup;
            }
            $this->session->set_userdata('session_user', $user);
            $this->session->set_userdata('session_grup', $grup);
			redirect('sinisa');
        }else{
            //maka load view login
			$this->load->view('login_view');
        }
    }

    //fungsi logout
	function logout() {
		$this->session->sess_destroy();
		redirect('login_controller');
    }

}