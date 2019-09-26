<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Forecast extends CI_Controller {

		function __construct(){
        parent::__construct();
		$this->load->helper('url');

		//call model
        $this->load->model('M_Forecast');
    }


    public function index()
	{


			 $data['forecast_weather'] = $this->M_Forecast->forecast_weather();
			 $data['title'] = "Result";
			 $this->load->view('forecast_view', $data);
  }


	}
