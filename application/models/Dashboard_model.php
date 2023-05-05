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
        $password = $data["password"];
        $result = $this->db->query("SELECT * FROM sys_user 
                                  AGENT_CODE = ?", [$password]);
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
