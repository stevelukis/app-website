<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 2018-12-02
 * Time: 2:13 PM
 */

class Main_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function add_user() {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        return $this->db->insert('user', $data);
    }

    public function login() {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        //if data is found (result size is not 0)
        return sizeof($this->db->get_where('user', $data)->result()) != 0;
    }

    public function delete_user($username) {
        return $this->db->delete('user', array('username' => $username));
    }

    public function update_password() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where('username', $username);
        return $this->db->update('user', array('password' => $password));
    }

}