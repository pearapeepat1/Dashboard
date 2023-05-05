<?php
class Dashboard_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('parser');
        $this->load->library('session');
    }
    
    public function checkLoginDb($data) {
        $username = $data["username"];
        $password = $data["password"];
        $result = $this->db->query("SELECT * FROM sys_users
                                    WHERE username = ? 
                                    AND password = ?", [$username, $password]);

        if ($result->num_rows() > 0) {
            return ['result' => true, 'message' => 'login success'];
        } else {
            return ['result' => false, 'message' => 'invalid password'];
        }
    }

    public function get_position_db(){
        $sql = "SELECT * FROM [dbo].[mst_position]";
        $query = $this->db->query($sql);

        return $query->result();
    }
    
    
}
