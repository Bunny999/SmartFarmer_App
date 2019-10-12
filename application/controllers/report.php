<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Report extends CI_Controller {
	public function __construct(){
	parent::__construct();            
    $this->load->helper(array('form', 'url'));
 	$this->load->model('ReportModel');
    $this->load->database();
}


public function index()
  {
     $this->load->view('reportform_view');

     
  }

 public function validate()

    {
         // //laod CI's validation library
         $this->load->library('form_validation');

        // // Validation rule for field
        $this->form_validation->set_rules('field1', 'required');

         // Validation rule for field
         $this->form_validation->set_rules('field2',  'required');

        // // Validation rule for field
        $this->form_validation->set_rules('field3', 'required');

        // // Validation rule for field
        $this->form_validation->set_rules('field4', 'required');
        $this->form_validation->set_rules('field5', 'required');


         if ($this->form_validation->run() == FALSE) {

             $this->load->view('reportform_view');
             echo "All these fields are required";

         }   
               
            //call the model method and pass data to it
             $this->ReportModel->insert(); 

             redirect('/');
         }
    

}

?>
   