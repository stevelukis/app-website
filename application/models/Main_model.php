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


}