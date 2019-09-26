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
		<link rel="stylesheet" href="<?php echo base_url(). '/assets/css/style.css';?>">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" class="branding">
						<img src="<?php echo base_url(). '/assets/images/logo.png';?>" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">SmartFarmer</h1>
							<small class="site-description">Farm Smart</small>
						</div>
					</a>

					 

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			 
			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
							<?php foreach($forecast_weather['list'] as $data) { ?>
  						<div class="today forecast">
							<div class="forecast-header">
								<div class="day"><?=date('d F Y', $data['dt'])?></div>
 							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location"> </div>
								<div class="degree">
									<div class="num"><?= $data['main']['temp']?><sup>o</sup></div>
									<div class="forecast-icon">
										<img src="<?php echo base_url(). '/assets/images/icons/icon-1.svg';?>" alt="" width=90>
									</div>	
								</div>
 								<span><img src="<?php echo base_url(). '/assets/images/icon-umberella.png';?>" alt="">20%</span>
								<span><img src="<?php echo base_url(). '/assets/images/icon-wind.png';?>" alt="">18km/h</span>
								<span><img src="<?php echo base_url(). '/assets/images/icon-compass.png';?>" alt="">East</span>
 					</div>
				</div>

						 <?php } ?> 
						 
						 
						 
						 
					 
						 
					</div>
				</div>
			</div>
			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Maize Facts</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="<?php echo base_url(). '/assets/images/live-camera-1.jpg';?>" alt=""></figure>
									<h3 class="location">New York</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="<?php echo base_url(). '/assets/images/live-camera-2.jpg';?>" alt=""></figure>
									<h3 class="location">Los Angeles</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="<?php echo base_url(). '/assets/images/live-camera-3.jpg';?>" alt=""></figure>
									<h3 class="location">Chicago</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="<?php echo base_url(). '/assets/images/live-camera-4.jpg';?>" alt=""></figure>
									<h3 class="location">London</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block" data-bg-color="#262936">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="news">
									<div class="date">06.10</div>
									<h3><a href="#">Doloremque laudantium totam sequi </a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo saepe assumenda dolorem modi, expedita voluptatum ducimus necessitatibus. Asperiores quod reprehenderit necessitatibus harum, mollitia, odit et consequatur maxime nisi amet doloremque.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<div class="date">06.10</div>
									<h3><a href="#">Doloremque laudantium totam sequi </a></h3>
									<p>Nobis architecto consequatur ab, ea, eum autem aperiam accusantium placeat vitae facere explicabo temporibus minus distinctio cum optio quis, dignissimos eius aspernatur fuga. Praesentium totam, corrupti beatae amet expedita veritatis.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<div class="date">06.10</div>
									<h3><a href="#">Doloremque laudantium totam sequi </a></h3>
									<p>Enim impedit officiis placeat qui recusandae doloremque possimus, iusto blanditiis, quam optio delectus maiores. Possimus rerum, velit cum natus eos. Cumque pariatur beatae asperiores, esse libero quas ad dolorem. Voluptates.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">Application features</h2>
								<ul class="arrow-feature">
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
								</ul>
							</div>
							<!-- <div class="col-md-4">
								<h2 class="section-title">Weather analyssis</h2>
								<ul class="arrow-list">
									<li><a href="#">Accusantium doloremque laudantium rem aperiam</a></li>
									<li><a href="#">Eaque ipsa quae ab illo inventore veritatis quasi</a></li>
									<li><a href="#">Architecto beatae vitae dicta sunt explicabo</a></li>
									<li><a href="#">Nemo enim ipsam voluptatem quia voluptas</a></li>
									<li><a href="#">Aspernatur aut odit aut fugit, sed quia consequuntur</a></li>
									<li><a href="#">Magni dolores eos qui ratione voluptatem sequi</a></li>
									<li><a href="#">Neque porro quisquam est qui dolorem ipsum quia</a></li>
								</ul>
							</div>
							 
						</div> -->
					</div>
				</div>
			</main> <!-- .main-content -->
 
		</div>
		
		<script src="<?php echo base_url(). '/assets/js/jquery-1.11.1.min.js';?>"></script>
		<script src="<?php echo base_url(). '/assets/js/plugins.js';?>"></script>
		<script src="<?php echo base_url(). '/assets/js/app.js';?>"></script>
		
	</body>

</html>