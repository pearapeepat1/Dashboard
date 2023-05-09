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


    ##### เมณู #####
    ##count project
    public function get_Projectcount(){
        $sql = "EXEC [dbo].[count_Project]";
        $query = $this->db->query($sql);

        return $query->result();
    }

    ##count person
    public function get_Personcount(){
        $sql = "EXEC [dbo].[count_person]";
        $query = $this->db->query($sql);

        return $query->result();
    }


    ## count เวลาทั้งหมดในการทำ hour
    public function get_Timecount_hour(){
        $sql = "EXEC [dbo].[count_time_hour]";
        $query = $this->db->query($sql);

        return $query->result();
    }

    ## count เวลาทั้งหมดในการทำ day
    public function get_Timecount_day(){
        $sql = "EXEC [dbo].[count_time_day]";
        $query = $this->db->query($sql);

        return $query->result();
    }


    ## query person
    public function get_Person(){
        $sql = "EXEC [dbo].[query_person]";
        $query = $this->db->query($sql);

        return $query->result();
    }
    
    ## query position
    public function get_Position(){
        $sql = "EXEC [dbo].[query_position]";
        $query = $this->db->query($sql);

        return $query->result();
    }
    

   


    


    
}
