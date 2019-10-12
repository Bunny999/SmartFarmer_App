<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Chart extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
    // load model
        $this->load->database();
        $this->load->helper(array('url','html','form'));
    }       
     public function index() {
   
      $query =  $this->db->query(""); 
 
     
    }
    
     
}
?>