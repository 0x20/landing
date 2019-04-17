<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$slider = true; include 'layout_top.php'; ?>
			<!--<section class="image-slider slider-all-controls parallax controls-inside pt0 pb0 height-70" style="background: #292929;">
				<ul class="slides">
					<li class="overlay image-bg" >
						<div class="background-image-holder">
							<img alt="image" class="background-image" src="img/poster.png">
						</div>
						<div class="container v-align-transform">
							<div class="row text-center">
								<div class="col-md-offset-1 col-md-10">
								</div>
							</div>

						</div>

					</li>
				</ul>
			</section>


test2
-->
<style>
	h5 {
		font-weight: bold;
		text-transform: uppercase;
		margin-bottom: 10px;
		margin-top:15px;
	}

	h5.talk {
		color: #e7c547;
	}

	h5.talk a {
		color: #e7c547;
	}

	h5.workshop {
		color: #20B2AA;
	}

	h5.workshop a {
		color: #20B2AA;
	}

	h5.general {
		color: #5FB851;
	}

	h5.general a {
		color: #5FB851;
	}

	h5.concert {
		color: #5FB851;
	}

	h5.concert a {
		color: #5FB851;
	}

	p{
		/*margin-bottom:10px;*/
	}

	span.talk {
		font-weight: bold;
		text-transform: uppercase;
		color: #292929;
		background-color: #e7c547;
		border: 3px solid #e7c547;
		margin-right: 10px;
	}

	span.workshop {
		font-weight: bold;
		text-transform: uppercase;
		color: #292929;
		background-color: #20B2AA;
		border: 3px solid #20B2AA;
		margin-right: 10px;
	}

	span.general {
		font-weight: bold;
		text-transform: uppercase;
		color: #292929;
		background-color: #5FB851;
		border: 3px solid #5FB851;
		margin-right: 10px;
	}

	span.concert {
		font-weight: bold;
		text-transform: uppercase;
		color: #292929;
		background-color: #5FB851;
		border: 3px solid #5FB851;
		margin-right: 10px;
	}

	.day {
		font-weight: bold;
		text-transform: uppercase;
		color: #292929;
		background-color: #e5692c;
		border: 3px solid #e5692c;
		text-align:center;
		font-size:18px;
		margin:30px 0px;
	}
</style>


<?php
	$json = file_get_contents('../newline/2019/json/schedule.json');
	$json_data_raw = json_decode($json,true);
	$json_data = $json_data_raw['schedule']['conference']['days'];

	// sort on event start time
	function cmp_event_start($a, $b) {
		if ($a['date'] == $b['date']) {
			return 0;
		}
		return ($a['date'] < $b['date']) ? -1 : 1;
	}

	function parse_day($day_index){
		global $json_data;
		$all_events = array();
		foreach ($json_data[$day_index]['rooms'] as $room => $events) {
			$all_events = array_merge($all_events, $events);
		}
		usort($all_events, "cmp_event_start");
		foreach ($all_events as $event)
		{
			if ($event['type'] == "lecture") $event['type'] = "talk";
			if ($event['type'] == "other") $event['type'] = "general";
			$duration = (new DateTime("00:00"))->diff(new DateTime($event['duration']));
			$endtime = (new DateTime($event['start']))->add($duration);
			$event['stop'] = $endtime->format("H:i");
			echo "\n<h5 class='".$event['type']."'>";
			echo "<span class='".$event['type']."'>&nbsp;".$event['type']."&nbsp;</span>".$event['start']." - ".$event['stop']."\n";
			echo " : <a href=\"".$event['url']."\">".$event['title']."</a></h5>\n";
			echo "<p>".$event['abstract']."</p>\n";
		}
	}
?>

	<section class="bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<h3 class="uppercase color-primary mb40 mb-xs-24 text-center">Schedule</h3>
					<center>
						<a class="btn btn-lg" href="https://hackerspace.gent/drop/newline19/poster2019_2.png">Poster</a>
						<a class="btn btn-lg" href="newline.php#location">Location</a>
						<a class="btn btn-lg" href="https://hackerspace.gent/landing/lastnewline.php">Program 2018</a>
					</center>
					<!--
					<div class="day">Time Unknown</div>
					<?php //parse_day(0); ?>
					-->
					<div class="day">Friday 26/04</div>
					<?php parse_day(0); ?>
					<div class="day">Saturday 27/04</div>
					<?php parse_day(1); ?>
					<div class="day">Sunday 28/04</div>
					<?php parse_day(2); ?>
				</div>
			</div>

		</div>

	</section>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h4 class="mb16 uppercase">FAQ</h4>
							<p class="lead mb64">
								Frequently Asked Questions
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<ul class="accordion accordion-1 one-open">
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Price?</h4>
									</div>
									<div class="content">
										<p>
											Free! We do sell drinks.
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Can I bring my own food?</h4>
									</div>
									<div class="content">
										<p>
										Yes, but we also provide snacks and warm meals (meat/vegetarian)
										</p>
									</div>
								</li>
							</ul>

						</div>
						<div class="col-sm-6">
							<ul class="accordion accordion-1 one-open">
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Where can I sleep?</h4>
									</div>
									<div class="content">
										<p>
											Send us a mail at info@0x20.be and we'll tell you about some options (free/cheap/...)
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Where is Newline and how do I get there?</h4>
									</div>
									<div class="content">
										<p>
											Location: our hackerspace, see the homepage for more information.<br>
											Multiple busses and trams at walking distance. <br>
											10 minutes walking from Ghent Dampoort train station. <br>
											Parking: in the streets nearby, free after 19h and on Sundays. <br>
											Look for the signs once you're at number 75.<br>
										</p>
									</div>
								</li>
							</ul>

						</div>
					</div>

				</div>

			</section>

			<section class="page-title page-title-3 image-bg overlay parallax">
				<div class="background-image-holder">
					<img alt="Background Image" class="background-image" src="img/moody.jpg">
				</div>


				<?php if (rand(0,1) == 0){ ?>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h4 class="uppercase mb0">“Oh 't ain't what you do it's the place that you
do it<br>'T ain't what you do it's the time that you do it<br>'T ain't what you do it's the way that you do it<br>That's what gets results”</h3>
		                </div>
		            </div>

		        </div>

		        <ol class="breadcrumb breadcrumb-2">

		            <li>
		                <a href="#">- Ella Fitzgerald</a>
		            </li>

		        </ol>

				<?php }else{ ?>

				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h4 class="uppercase mb0">“My primary goal of hacking was the intellectual curiosity, the seduction of adventure.”</h3>
		                </div>
		            </div>

		        </div>

		        <ol class="breadcrumb breadcrumb-2">

		            <li>
		                <a href="#">- Kevin Mitnick</a>
		            </li>

		        </ol>

				<?php } ?>




		    </section>

				<a id="location"></a>
			<section class="image-square right">
				<div class="col-md-6 p0 image">
					<div class="map-holder background-image-holder">
						<iframe src="map.php"></iframe>
					</div>
				</div>
				<div class="col-md-6 content">
					<h6 class="uppercase text-center"><br /><a href="tel:+3293953323">09 395 33 23</a><br>
					info@0x20.be</h6>
					<h6 class="uppercase text-center">Blekerijstraat 75, 9000 Ghent, Belgium
											<br /> We're in room 1.21</h6>
					<h6 class="uppercase text-center"><a href="https://map.what3words.com/unroll.voices.purely">unroll.voices.purely</a></h6>
					<!--<h6 class="uppercase text-center"><br />Open the gate on Thursdays<br /> by calling +32 (0) 484 73 95 88</h6>-->

					<h6 class="uppercase text-center">come alone and make sure<br> you are not being followed</h6>


				</div>
			</section>

	<?php include 'layout_bottom.php'; ?>
