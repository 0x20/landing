
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>HS.gent</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:image" content="https://hackerspace.gent/landing/img/preview.png" />

		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/theme-orange.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
		<meta http-equiv="refresh" content="300;url=index.php?reload=true" />
		<meta http-equiv="Refresh" content="350">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		
		<!-- CAL -->
	  <link href="css/fullcal.css" type="text/css" rel="stylesheet" />
	</head>

<?php
		
if(!isset($_GET['reload'])){
	include_once("log/logipandtime.php");
	logIpAndTime("log/iplog.log");
}			
		
$members_in=0;
$strangers_in=0;
$members_list=" - ";
$string = file_get_contents("https://hackerspace.gent/pam/data");
$json = json_decode($string, true);
foreach ($json as $k => $v) {
	if (strpos($v, '(') == false && strpos($v, ':') == false && strpos($v, '<') == false) {
		$members_in++;
		$members_list .= $v." - ";
	}
		if (strpos($v, '(') == false) {
		$strangers_in++;
	}
}
?>
	<body class="boxed-layout scroll-assist">

		<div class="nav-container">
		<a id="top"></a>



			<nav class="bg-dark absolute transparent">
				<div class="nav-bar">
					<div class="module left">
						<a href="index.php">
							<img class="logo logo-light" alt="Hackerspace Gent" src="img/logo.png">
							<img class="logo logo-dark" alt="Hackerspace Gent" src="img/logo-dark.png">
						</a>
					</div>
					<div class="module widget-handle mobile-toggle right visible-sm visible-xs">
						<i class="ti-menu"></i>
					</div>
					<div class="module-group right">
						<div class="module left">
							<ul class="menu">
								<li>
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="http://wiki.hackerspace.gent/">Wiki</a>
								</li>
								<li>
									<a href="http://pad.hackerspace.gent/">Pad</a>
								</li>
								<li>
									<a href="http://hub.hackerspace.gent/">Hub</a>
								</li>
								<li>
									<a href="heatmap.php">Heatmap</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="main-container">


			<section class="image-slider slider-all-controls parallax controls-inside pt0 pb0 height-70" style="background: #292929;">
				<ul class="slides">
					<?php 
					if($members_in >= 1){ ?>
					<li class="overlay image-bg">
						<div class="background-image-holder">
							<img alt="image" class="background-image" src="img/people.jpg">
						</div>
						<div class="container v-align-transform">
							<div class="row text-center">
								<div class="col-md-offset-1 col-md-10">
									<h2 class="mb-xs-16 uppercase bold">HACKERSPACE GENT</h2>
									<h2 class="mb-xs-16 uppercase bold">Open right now!</h2>
									<p class="lead uppercase mb40">
										<?php if($strangers_in > 0){if($strangers_in == 1){ echo "1 device and "; }else{ echo $strangers_in." devices and "; }} if($members_in == 1){ echo "1 human "; }else{ echo $members_in." humans "; }?>detected</p>
									<p class="lead uppercase mb40">
										<?php echo $members_list; ?>
									</p>
								</div>
							</div>

						</div>

					</li>

					<?php }else{ ?>
					<li class="overlay image-bg" >
						<div class="background-image-holder">
							<img alt="image" class="background-image" src="img/hall2.jpg">
						</div>
						<div class="container v-align-transform">
							<div class="row text-center">
								<div class="col-md-offset-1 col-md-10">
									<h2 class="mb-xs-16 uppercase bold">HACKERSPACE GENT</h2>
									<a class="btn btn-lg inner-link" href="#home">Start Exploring</a>
								</div>
							</div>

						</div>

					</li>
					<li class="vid-bg image-bg overlay">
						<div class="background-image-holder">
							<img alt="Background Image" class="background-image" src="img/splitflaps.jpg">
						</div>
						<div class="fs-vid-background">
							<video muted="true" loop="">
		                        <source src="video/splitflaps.mp4" type="video/mp4">
		                    </video>
						</div>
						<div class="container v-align-transform">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h2 class="mb-xs-16 uppercase bold">HACKERSPACE GENT</h2>
									<a class="btn btn-lg inner-link" href="#home">Start To Flap</a>
								</div>
							</div>

						</div>

					</li>
					
					<li class="overlay image-bg">
						<div class="background-image-holder">
							<img alt="image" class="background-image" src="img/arduino_back.png">
						</div>
						<div class="container v-align-transform">
							<div class="row text-center">
								<div class="col-md-offset-1 col-md-10">
									<img alt="" class="" src="img/arduino_top.png" height="351px">
								</div>
							</div>

						</div>

					</li>
					<li class="overlay image-bg">
						<div class="background-image-holder">
							<img alt="image" class="background-image" src="img/pancakes.jpg">
						</div>
						<div class="container v-align-transform">
							<div class="row text-center">
								<div class="col-md-offset-1 col-md-10">
									<h2 class="mb-xs-16 uppercase bold">HACKERSPACE GENT</h2>
									<a class="btn btn-lg inner-link" href="#home">Start Tasting</a>
								</div>
							</div>

						</div>

					</li>

					<?php } ?>
				</ul>
			</section>

<!-------------------------------------------------------------------------------------------------------------------------------- -->
