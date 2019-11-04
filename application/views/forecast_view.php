<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>SmartFarmer</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url(). '/assets/fonts/font-awesome.min.css';?>" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		  	
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
		<style>
			
h1{
  
  font-size: 30px;
  color: black  ;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
 background: linear-gradient(to right, #ec2F4B, #009FFF);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(201,255,255,6  .3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: bold;
  font-size: 12px;
  color: white;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: bold;
  font-size: 12px;
  color: black;
  border-bottom: solid 1px rgba(201,255,255,6.3);
}
.logo-image-small{
	width :100px;
	height: 100px;
}

/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
 /* background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);*/
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}

 
/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
.simple-text{
	text-decoration: none;
	color: black;
}
/*Table Css*/
		</style>
	</head>


	<body>
		 <div class="logo">
        <a href="http://localhost/SmartFarmer/SmartFarmer_App/" class="simple-text logo-mini">
          <div >
            <img  class="logo-image-small" src="<?php echo base_url().'/assets/img/logo-small.png' ;?>">
          </div>
        </a> 
        <a href="http://localhost/SmartFarmer/SmartFarmer_App/" class="simple-text logo-normal">
          Back to Home
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
		 <section>

  <h1>Weather Forecast</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th> Date</th>
          <th> Temperature in (Celcius)</th>
          <th> Time</th>
          <th>Location</th> 
            
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
          <?php foreach($forecast_weather['list'] as $data) { ?>
        <tr>
          <td><?=date('d F Y', $data['dt'])?></td>
          <td><?= $data['main']['temp']?></td>
          <td></td>
          <td>  </td>
        </tr>
       
  <?php } ?> 
         
      </tbody>
    </table>
  </div>
</section>

<section>
		
		 
		</div>
		
		<script src="<?php echo base_url(). '/assets/js/jquery-1.11.1.min.js';?>"></script>
		<script src="<?php echo base_url(). '/assets/js/plugins.js';?>"></script>
		<script src="<?php echo base_url(). '/assets/js/app.js';?>"></script>
		
	</body>

</html>