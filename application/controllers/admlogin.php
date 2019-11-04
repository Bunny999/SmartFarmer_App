<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admlogin extends CI_Controller {
   
public function __construct()
        {
                  parent::__construct();
                 $this->load->model('Adminlogin');
                     $this->load->library(array('form_validation','session'));
                 $this->load->helper(array('url','html','form'));
                 $this->user_id = $this->session->userdata('user_id');
        }
 
 
      
    public function login()
        {

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');

        if ($this->form_validation->run() === FALSE)
        {  
            $this->load->view('admin_view');
        }
        else
        {   
            $data = array(
               'username' => $this->input->post('username'),
               'password' => md5($this->input->post('password')),

             );
  
           

            redirect( base_url('admindash_view') ); 
            }

           $this->load->view('admin_view');
        }
        


    public function logout(){
    $this->session->sess_destroy();
    redirect(base_url('auth'));
   }  

   public function dashboard(){
       if(empty($this->user_id)){
        redirect(base_url('auth'));
      }
       $this->load->view('dashboard');
    }
}
