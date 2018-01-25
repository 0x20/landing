<?php if (!isset($slider)){ $slider = false; } ?>
<?php if (!isset($home)){ $home = false; } ?>
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
		<?php if($home){ echo '<meta http-equiv="refresh" content="300;url=index.php?reload=true" />'; }?>
		
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



			<nav class="bg-dark <?php if($slider){ echo 'absolute transparent'; }?>">
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
									<a href="newline.php">Newline 0x08</a>
								</li>
								<li class="has-dropdown">
									<a href="#top">More</a>
									<ul>
										<li><a href="http://wiki.hackerspace.gent/">Wiki</a></li>
										<li><a href="http://hub.hackerspace.gent/">Hub</a></li>
										<li><a href="http://pad.hackerspace.gent/">Pad</a></li>
										<li><a href="heatmap.php">Heatmap</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="main-container">

		

<!-------------------------------------------------------------------------------------------------------------------------------- -->
