<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ReportModel extends CI_Model
{
	  function insert() 
	  { 
    	
    	// $insert_id = $this->db->insert_id();

 
           //Setting values for tabel columns
	  	  		
                 $data = array(
                     'harvest2015 ' => $this->input->post('field1'),
                     'harvest2016' => $this->input->post('field2'),
                     'harvest2017' => $this->input->post('field3'),
                     'harvest2018' => $this->input->post('field4'),
                     'harvest2019 ' => $this->input->post('field5'),
 					 // 'UserID' => $insert_id	
                 );
                   return $this->db->insert('farmrecords', $data);
 
     } 

}