<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
    }


    function index()
    {
        $this->load->view('index');
    }

    function signup()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');


        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup');
        } else {
            $this->Main_model->add_user();
        }
    }
}
