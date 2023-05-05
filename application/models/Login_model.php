<?php
class Login_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('parser');
        $this->load->library('session');
    }

    public function chk_login_db($data) {
        $username = $data["username"];
        $password = $data["password"];

        $result = $this->db->query("SELECT * FROM sys_users
                                    WHERE su_username = ? 
                                    AND su_password = ?", [$username, $password]);


        if ($result->num_rows() > 0) {
            return ['result' => true, 'message' => 'login success'];
        } else {
            return ['result' => false, 'message' => 'invalid password'];
        }
    }

}

