<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ChartModel extends CI_Model{
 
  //get data from database
  function get_data(){
      $this->db->select('year,profit,harvest,sales');
      $result = $this->db->get('farmrecords');
      return $result;
  }
 
} 