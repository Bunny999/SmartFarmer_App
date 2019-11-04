<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProfileModel extends CI_Model
{
	  function getProfile() 
	  { 
	  	$this->db->select("username, email, first_name, last_name");
	  	$this->db->from('users');
	  	$query = $this->db->get();
	  	return $query->result();
	  }
	}
	?>