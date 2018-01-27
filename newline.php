<?php $slider = true; include 'layout_top.php'; ?>
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
			</section>-->
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

	h5.workshop {
		color: #20B2AA;
	}

	h5.general {
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
							$json = file_get_contents('https://hackerspace.gent/newline/2018/json/data.json');
							$json_data = json_decode($json,true);
							//print_r($json_data);
							//ksort($json_data);
							
							function parse_day($from,$to){
								global $json_data;
								foreach ($json_data as $key => $value){
									if(is_numeric($value['start']) and $value['start'] >= $from and $value['start'] < $to){
									
										echo "<h5 class='".$value['type']."'>";

										echo "<span class='".$value['type']."'>&nbsp;".$value['type']."&nbsp;</span>";

										if (date('H:i', $value['start']) == "00:01" or date('Y', $value['start']) == "1970"){
											echo "xx:xx - xx:xx";
										}else{
											echo date('H:i', $value['start'])." - ".date('H:i', $value['start']+$value['duration']);
										}

										echo " : ".$value['name'];

										echo "</h5>";

										echo "<p>".$value['description']."</p>";
										
									}
									
								}
							}
							?>

	<section class="bg-dark">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-10 col-sm-offset-1">
					<h3 class="uppercase color-primary mb40 mb-xs-24 text-center">Schedule<br>(more to be announced soon)</h3>
					<center>
						<a class="btn btn-lg" href="https://www.facebook.com/events/143174433013216/">Facebook</a>
						<a class="btn btn-lg" href="https://hackerspace.gent/newline/2018/cfp">Participate</a>
					</center>
					<div class="day">Friday 13/04</div>
					<?php parse_day(1523635200,1523656800); ?>
					<div class="day">Saturday 14/04</div>
					<?php parse_day(1523656800,1523743200); ?>
					<div class="day">Sunday 15/04</div>
					<?php parse_day(1523743200,1523872800); ?>
					<div class="day">Time Unknown</div>
					<?php parse_day(0,1000000000); ?>
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

	

	<?php include 'layout_bottom.php'; ?>