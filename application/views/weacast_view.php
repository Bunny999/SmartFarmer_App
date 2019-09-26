<!DOCTYPE html>
  <html>
    <head>
      <title>WeaCast | <?=$title?></title>
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <style>
        body {
          padding: 4% 2%;
          background-color:  #4e342e;
          color: #fff;
          font-family: 'Raleway', sans-serif;
          padding-left: 500px;
        }
        .title {
          border-bottom: .1em solid #fff;
        }
        .title h1 {
          margin-top: 0;
          font-size: 4em;
        }
        .cityinput input {
          border:0;
          border-radius: 6px;
          box-shadow: none;
          font-size: 18px;
          background-color: transparent;
          color: #fff;
          padding: 0;
        }
        /*----------------------------------------------------------*/
        .cityinput input::-webkit-input-placeholder {
        	color: #f4f4f4;
        }
        .cityinput input.form-control:focus {
        	box-shadow: none;
        }
        .cityinput label {
        	font-size: 24px;
        }
        .listdata {
        	border-bottom: 1px solid #fff;
        	padding: 10px 5px;
        	margin: 0;
        }
        .listdata:last-child {
        	border-bottom: 0;
        }
        .level {
        	position: relative;
        	font-size: 120px;
        	border-right: 1px solid #fff;
        }
        .level #unit {
        	position: absolute;
        	font-size: 30px;
        	bottom: 10px;
        	right: 5px;
        }
        .descript p {
        	margin-bottom: 2px;
        }
        .scrollable-list {
        	overflow-y: scroll;
        	overflow-x: hidden;
        	height: 60vh;
        }
        .weather {
        	border-right:1px solid #fff
        }
        @media screen and (max-width: 767px) {
        	.level {
        		border-right: 0;
        	}
        }
        .alignn{
            text-align: center;
        }
    </style>

    <body>
        <div class="container">
          
	            
                <div class="col-sm-6" style="padding: 0 0 0 25px">
	                <div class="title">
	                	<h1 class="alignn"><strong>Forecast</strong></h1>
	                </div>
  	                	<?php foreach($forecast_weather['list'] as $data) { ?>
		                <div class="listdata">
			                <h3><?=date('d F Y', $data['dt'])?></h3>
			                <div class="row">
				                <div class="col-sm-8 descript weather">
                          <p><strong>Temperature:</strong>  <?= $data['main']['temp']?>  </p>
				                	<p><strong>Humidity:</strong>    </p>
				                	<p><strong>Pressure:</strong>  </p>
				                	<p><strong>Cloudiness:</strong>  </p>
				                	<p><strong>Rain:</strong>       </p>
		                			<p><strong>Wind Speed:</strong>  </p>
			                	</div>
			                	<div class="col-sm-4 descript">
	                				<p><strong>Day:</strong>  &deg;</p>
				                	<p><strong>Low:</strong>  &deg;</p>
				                	<p><strong>High:</strong>  &deg;</p>
	                				<p><strong>Morning:</strong>  &deg;</p>
				                	<p><strong>Evening:</strong>  &deg;</p>
				                	<p><strong>Night:</strong>  &deg;</p>
			                	</div>
			                </div>
		                </div>
		                <?php } ?>
                 </div>
            </div>
 
    </body>
  </html>