<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Profile extends CI_Controller {
	public function __construct(){
	parent::__construct();
	$this->load->helper(array('form', 'url'));
	$this->load->model('ProfileModel');
	$this->load->helper('url');
	$this->load->database();

}

public function index()
  {

      
     $this->load->view('profile_view');
  }


public function data()
    {
    $this->data['profile'] = $this->ProfileModel->getProfile();
	}

 }
