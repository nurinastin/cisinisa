<?php

class login_controller extends CI_Controller{
    function __construct() {
        parent:: __construct();
        $this->load->view('sinisa_model');
    }

    public function index(){
        $this->load->view('login_view');
    }
}