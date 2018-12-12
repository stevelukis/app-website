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

    function login()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $success = $this->Main_model->login();

            if ($success) {
                $this->load->view('index');
            } else {
                $this->load->view('login');
            }
        }

    }

    function signup()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');


        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup');
        } else {
            $this->Main_model->add_user();

            $this->load->view('index');
        }
    }

    function delete()
    {
        $params = $this->getPostedObject();
        $this->Main_model->delete_user($params['username']);
        $this->load->view('index');
    }

    function change_password() {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('change_password');
        } else {
            $this->Main_model->update_password();

            $this->load->view('index');
        }
    }

    private function getPostedObject()
    {
        return json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
    }
}
