<?php $slider = true;$home = true;  include 'layout_top.php'; ?>


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
									<a class="btn btn-lg inner-link" href="#home">Hack the planet</a>
								</div>
							</div>

						</div>

					</li>
          <li class="vid-bg image-bg overlay">
						<div class="background-image-holder">
							<img alt="Background Image" class="background-image" src="img/hall2.jpg">
						</div>
						<div class="fs-vid-background">
							<video muted="true" loop="">
		                        <source src="video/disco.mp4" type="video/mp4">
		                    </video>
						</div>
						<div class="container v-align-transform">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h2 class="mb-xs-16 uppercase bold">HACKERSPACE GENT</h2>
									<a class="btn btn-lg inner-link" href="#home">Hack the planet</a>
								</div>
							</div>

						</div>

					</li>
					<!--
					<li class="overlay image-bg">
						<div class="background-image-holder">
							<img alt="image" class="background-image" src="img/arduino_back.jpg">
						</div>
						<div class="container v-align-transform">
							<div class="row text-center">
								<div class="col-md-offset-1 col-md-10">
									<img alt="" class="" src="img/arduino_top.jpg" height="351px">
								</div>
							</div>

						</div>

					</li>-->
					<li class="overlay image-bg">
						<div class="background-image-holder">
							<img alt="image" class="background-image" src="img/pancakes.jpg">
						</div>
						<div class="container v-align-transform">
							<div class="row text-center">
								<div class="col-md-offset-1 col-md-10">
									<h2 class="mb-xs-16 uppercase bold">HACKERSPACE GENT</h2>
									<a class="btn btn-lg inner-link" href="#home">Hack the planet</a>
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
		                        <source src="video/splitflaps_opt_bw.mp4" type="video/mp4">
		                    </video>
						</div>
						<div class="container v-align-transform">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h2 class="mb-xs-16 uppercase bold">HACKERSPACE GENT</h2>
									<a class="btn btn-lg inner-link" href="#home">Hack the planet</a>
								</div>
							</div>

						</div>

					</li>

					<?php } ?>
				</ul>
			</section>






			<a id="home"></a>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 text-center">
							<h3 class="uppercase color-primary mb40 mb-xs-24">A Place To Call Home</h3>
							<p class="lead">
								Hackerspace Gent (0x20) is a hackerspace in the wonderful city of Ghent, Belgium. It is a physical space run by a group of people dedicated to various aspects of constructive &amp; creative tinkering. This page is an ever growing resource of information about who we are, what we do, and how you can become a part of all the <b>awesomeness</b>.
							</p>
						</div>
					</div>

				</div>

			</section>

			<a id="hackers"></a>
			<section class="bg-primary">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-1 text-right text-left-xs col-sm-5">
							<h1 class="uppercase mb24 italic bold" style="font-size:36px;margin-bottom:0px;">Hackers?</h1>
							<h5 class="uppercase italic fade-1-4">something about hackers</h5>
							<hr class="visible-xs">
						</div>
						<div class="col-md-5 col-sm-7">
							<p>
								Don't worry, we won't break into your computer. The hacker culture is a subculture of individuals who enjoy the intellectual challenge of creatively overcoming the limitations of current technologies to achieve novel and clever outcomes. The culture consists of, but is not limited to: computing, networking, programming, music, gaming, electronics, lock picking, woodworking, robotics, science fiction...
							</p>
							<p>
								However, the defining characteristic of a hacker is not the activities performed themselves, but the manner in which it is done. A hacker is someone who invents, constructs, learns, shares, trains basic skills and is willing to think outside the box to find a creative solution to a problem.
							</p>
							<p><i>
								Note: While we hackers are always aiming to be constructive, there is a group of people who loudly call themselves hackers, but aren't. These are people who get a kick out of breaking into computers for unethical purposes. Unfortunately, some media have been fooled into using the word ‘hacker’ to describe people who are not.
							</i></p>


						</div>
					</div>
				</div>
			</section>

			<a id="hackerspace"></a>
			<section class="pt120 pb120 image-bg overlay">
				<div class="background-image-holder">
					<img alt="Background" class="background-image" src="img/moody.jpg">
				</div>
				<div class="container">
					<div class="row v-align-children">
						<div class="col-sm-8 mb-xs-80">
							<h2 class="mb16">What exactly
		                        <br class="hidden-sm"> is a hackerspace?</h2>
							<h6 class="uppercase mb32">A short introduction</h6>
						</div>
						<div class="col-sm-4 text-center text-left-xs">
							<div class="modal-container">
								<div class="play-button btn-modal large inline"></div>
								<div class="foundry_modal no-bg">
									<iframe data-provider="youtube" data-video-id="HdSei7UOb4g" data-autoplay="1" allowfullscreen="allowfullscreen"></iframe>
								</div>
							</div>

						</div>
					</div>

				</div>

			</section>


			<a id="calendar"></a>
			<section>
				<div class="container calendar">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 text-center">
							<h3 class="uppercase color-primary mb40 mb-xs-24">Calendar</h3>
							<a href="#calendar" onclick="this.style.display = 'none'; document.getElementById('googlecalendar').style.display = ''; return false;">Show calendar</a>
							<div id="googlecalendar" style="display:none;">
								<div class="responsive-iframe-container big-container">
								<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=koth9eg7q353n7s1u81g2pea9g%40group.calendar.google.com&amp;color=%23691426&amp;ctz=Europe%2FBrussels" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
								</div>

								<div class="responsive-iframe-container small-container">
								<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=koth9eg7q353n7s1u81g2pea9g%40group.calendar.google.com&amp;color=%23691426&amp;ctz=Europe%2FBrussels" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<a id="whatwedo"></a>
			<section class="whatwedo bg-dark">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h4 class="mb16 uppercase" style="color:#e5692c;">Things we do..</h4>
							<p class="lead mb64">
								.. and things we did
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<ul class="accordion accordion-1 one-open">
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Social Evening</h4>
									</div>
									<div class="content">
										<p>
											Every Thursday we get together to enjoy a beer while we talk about technology, discuss various topics, and share philosophies. These social evenings (and sometimes social nights) are open for everyone so join us if you want to get nerdy!
										</p><p>
											<a href="img/space3.jpg" data-lightbox="socialevening"><img src="img/space3.jpg"></a>
											<a href="img/space2.jpg" data-lightbox="socialevening"><img src="img/space2.jpg"></a>
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Hack Sabbath</h4>
									</div>
									<div class="content">
										<p>
											Social night on Thursday is fun but not ideal for productivity. The holy sunday gives us the ideal combination of silence and focus for a productive day. Do you want to focus on your own project or work together with others? Join us on a sunday Hack Sabbath. Powertools usage is minimized, so we can work in peace and have relaxed brainstorms to get new inspiration.
										</p>
										<p>
										<a href="img/people.jpg" data-lightbox="hacksabbath"><img src="img/people.jpg"></a>
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Newline</h4>
									</div>
									<div class="content">
										<p>
											To celebrate the space once a year, we organize the "Newline" hacker conference in the spring. A newline character marks the end of a line and moves the cursor to the next one. It's a sign of progress and it gives you a whole new line to be filled. We are looking forward to long talks, short talks, hands-on workshops and having an awesome time in our space. Feel like participating? Great! Join us for the next Newline!
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Project Flappers</h4>
									</div>
									<div class="content">
											<p>
												Once upon a time, our hackerspace got a bunch of classic airport/trainstation flappers (you know, the things that used to take up the infoboards). A few people were intrigued by this forgotton technology so they made a 140-character flapper board that can show tweets from a live feed. This amazing contraption is now visible in the offices of USE-IT Brussels. His 4-character baby brother is visible in our space, he shows us who is entering the building.<br /><br /> <a href="https://vimeo.com/98027612">Check out a demonstration
												of the 140-character display.</a>
											<br><br>
												<a href="img/flappers.jpg" data-lightbox="flaps"><img src="img/flappers.jpg"></a><a href="img/splitflaps2.jpg" data-lightbox="flaps"><img src="img/splitflaps2.jpg"></a><br>
											</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Spacebar</h4>
									</div>
									<div class="content">
										<p>
											We like to consume beverages in the space.. To prevent a need for payment every time we take something out of the fridge, we created the "Sexy Genderless Bar Entity". This is a touchscreen computer where we add money to accounts, so we can just tap a few buttons to pay for our drinks.
										</p><p>
											<a href="img/spacebar.jpg" data-lightbox="spacebar"><img src="img/spacebar.jpg"></a>
										</p>
									</div>
								</li>
							</ul>

						</div>
						<div class="col-sm-6">
							<ul class="accordion accordion-1 one-open">

								<li>
									<div class="title">
										<h4 class="inline-block mb0">Spacecontrol</h4>
									</div>
									<div class="content">
										<p>
											Of course, we like to automate things and after some tinkering we are able to control almost every electrical device from one webpage. With that and pizza delivery, it's a beautiful world...
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Electronics</h4>
									</div>
									<div class="content">
										<p>
											Light switches are so 2008, so let's see what cool stuf we can do with electronics! With tools like the infamous Arduino and a little bit of programming you can make your own internet-connected universal remote. Or maybe you want to fix an old synthesizer? Learn how to solder, use a multimeter or oscilloscope! We can help you with our resources, knowledge and inspiration.
										</p><p>
											<a href="img/lamp.jpg" data-lightbox="electronics"><img src="img/lamp.jpg"></a>
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Programming</h4>
									</div>
									<div class="content">
										<p>
											Programming is a creative process done by programmers to instruct a computer to do a task. Hollywood has helped instill the image of programmers as uber techies who can sit down at a computer and break any password in seconds or make highly tuned warp engines improve performance by 500% with just one tweak. Sadly the reality is far less interesting!

											Or is it? At the hackerspace we combine, change and share code to get computers to do all kinds of cool stuff. Do you want a big red button that orders a pizza when pressed? Or do you need a digital dj that makes a music playlist for you? That and more is possible through the art of programming.
										</p><p>
											<a href="img/programming.jpg" data-lightbox="programming"><img src="img/programming.jpg"></a>
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Lock picking</h4>
									</div>
									<div class="content">
										<p>
											You can pick your friends. You can pick a beer. But can you pick… a Lock? Join us on a lock picking evening as we embark on an ancient mechanical adventure to explore the inner workings of a modern lock, first developed by the Mesopotamians and Egyptians over 4000 years ago. Lock picking is a classic sport in the hacker community. Rather than wanting to break into something, it is a way of appreciating and learning about these awesome pieces of machinery called locks.
										</p><p>
										<a href="img/lockpicking.jpg" data-lightbox="lockpicking"><img src="img/lockpicking.jpg"></a>
										<a href="img/lockpicking2.jpg" data-lightbox="lockpicking"><img src="img/lockpicking2.jpg"></a>
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Other Events</h4>
									</div>
									<div class="content">
										<p>
											For people wanting to explore new horizons there are events, workshops and talks with subjects like "Make paintings nerdy", "Android malware in numbers", "Talk about software licensing", "Ubuntu 14.04 Release Party", "Origami Workshop" and "Creating a heart in a jar". We also have social gatherings such as "Movie Night", "Game Night" and "Comedy Evening".
										</p>
										<p>
											<a href="img/pancakes2.jpg" data-lightbox="workshops"><img src="img/pancakes2.jpg"></a>
											<a href="img/movie.jpg" data-lightbox="workshops"><img src="img/movie.jpg"></a>
										</p>
									</div>
								</li>
							</ul>

						</div>
					</div>

				</div>

			</section>




			<a id="faq"></a>
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
										<h4 class="inline-block mb0">I want to visit Hackerspace Gent!</h4>
									</div>
									<div class="content">
										<p>
											Great! You can find our location on the bottom of this page. We recommend coming over on a Thursday evening, our social night. That way you'll have a bunch of people who can show you around. However, you are welcome anytime when there are members present. To enter: call +32(0)484739588 on Thursday night and the right front gate will open automatically. At other times call 093953323, if a member is present (s)he will let you in. <a href="https://wiki.hackerspace.gent/Main_Page">Details about visiting.</a>
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Are you guys Whitespace?</h4>
									</div>
									<div class="content">
										<p>
										Yup, we're the same people. Whitespace is our previous name. It's still remembered in our logo.
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Why is this all in English?</h4>
									</div>
									<div class="content">
										<p>
											There are a lot of interesting people who don't speak any of the official Belgian languages, most Belgian people speak English pretty well, and we're too lazy to write this page in multiple languages. But don't let this scare you. A lot of people in the space speak both Dutch and English, and we'll happily use what's most comfortable to you.
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Can I drink/eat there?</h4>
									</div>
									<div class="content">
										<p>
											We have our own bar with all the normal beverages (including Club Mate!). We sell some snacks and if you're lucky even some instant food. Feel free to bring your own food or just order pizza if you're too lazy for anything else.
										</p>
									</div>
								</li>
							</ul>

						</div>
						<div class="col-sm-6">
							<ul class="accordion accordion-1 one-open">
								<li>
									<div class="title">
										<h4 class="inline-block mb0">Can I do $thing?</h4>
									</div>
									<div class="content">
										<p>
											Yes, unless it will kill little puppies. To be clear: don't break the law, don't break things you don't own and don't endanger people or the space itself. If you have a cool project idea, try to find people interested
											in joining the project, but don't expect everybody to just jump on it. Everybody has only so much time to spend on cool stuff and people might be busy with other things already. So come over with cool ideas, share your knowledge with others
											and have a great time.
										</p>
									</div>
								</li>
								<li>
									<div class="title">
										<h4 class="inline-block mb0">How can I get more involved?</h4>
									</div>
									<div class="content">
										<p>
											When just passing by is not enough you can apply for membership at the space. This offers some privileges like a key to the space, access to different systems and our trust. People will have to vouch for you, but if you are nice and constructive that
											shouldn't be a problem. Members also contribute 20 EUR a month to the space, so we can pay the rent and other costs of running the space.
										</p>
									</div>
								</li>
							</ul>

						</div>
					</div>

				</div>

			</section>


			<!--

			<a id="stats"></a>
			<section class="bg-dark">
				<div class="container">
					<div class="row v-align-children">
						<div class="col-sm-12">
							<div class="col-sm-3 text-center">
								<div class="feature bordered mb40">
									<h1 class="large"><?php echo $members_in; ?></h1>
									<h5 class="uppercase">Humans in <br>the space <br></h5>

								</div>
							</div>

							<div class="col-sm-3 text-center">
								<div class="feature bordered mb30">
									<h1 class="large"><?php echo $strangers_in; ?></h1>
									<h5 class="uppercase">Active devices <br>in the space </h5>
								</div>
							</div>

							<div class="col-sm-3 text-center">
								<div class="feature bordered mb30">
									<h1 class="large">3</h1>
									<h5 class="uppercase">Astronauts in<br> outer space </h5><!-- http://api.open-notify.org/astros.json
								</div>
							</div>

							<div class="col-sm-3 text-center">
								<div class="feature bordered mb30">
									<h1 class="large uppercase">??</h1>
									<h5 class="uppercase">Website <br>visits today</h5>
								</div>
							</div>
						</div>
					</div>

				</div>

			</section>-->

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
