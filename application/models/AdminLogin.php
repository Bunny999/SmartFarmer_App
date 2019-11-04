<?php
class AdminLogin extends CI_Model {
   public function __construct()
    {
        $this->load->database();
    }
 
public function login($identity, $password, $remember=FALSE)
	{
	 
        $query = $this->db->get_where('users', $data);
        if($query){   
         return $query->row();
        }
        return false;
		}
	}
?> 