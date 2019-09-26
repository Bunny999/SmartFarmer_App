<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_Forecast extends CI_Model
{
	function forecast_weather()
    {
		 //get JSON
	    	 //you can get param appid from your account in openweathermap.org
	    	 //http://api.openweathermap.org/data/2.5/forecast/daily?appid=[YOUR_APP_ID]&units=metric&q=$city&cnt=7
		 $json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?id=198629&APPID=36bf61966a68f9cf4590dbe05eede4b8");

		 //decode JSON to array

		 $data = json_decode($json,true);
		 
		 //return data array()

		 return $data;
    }
}