<?php
class Show_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('parser');
        $this->load->library('session');
    }
    
    public function ProjectList()
    {
        $sql = "select * from manage_pro";
        $query = $this->db->query($sql);
        return $query->result_array();
    }  
    public function checkLoginDb($data) {
        $password = $data["password"];
        $result = $this->db->query("SELECT * FROM agents 
                                  AGENT_CODE = ?", [$password]);
        if ($result->num_rows() > 0) {
            return ['result' => true, 'message' => 'login success'];
        } else {
            return ['result' => false, 'message' => 'invalid password'];
        }
    }
    
    
}


