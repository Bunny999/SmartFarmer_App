<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

    public function __construct() {
        parent::__construct();
    // load model
        $this->load->database();
         $this->load->model('ChartModel');
        $this->load->helper(array('url','html','form'));
    }       
     public  function index(){
      $data = $this->ChartModel->get_data()->result();
      $x['data'] = json_encode($data);
      $this->load->view('chartdisplay_view',$x);
    }
    
}
?>