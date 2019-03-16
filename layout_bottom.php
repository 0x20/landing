			
<!-------------------------------------------------------------------------------------------------------------------------------- -->

			<footer class="footer-2 bg-dark text-center-xs">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<a href="#"><img class="image-xxs fade-half" alt="Pic" src="img/logo.png"></a>
						</div>

						<div class="col-sm-4 text-center">
							<span class="fade-half">
								© Copyright 2016-2056 hackerspace.gent Vzw<br>Some Rights Reserved<br />Powered by <a href="http://yolo.sexy/">YOLO Sexy Webdesign</a> and <a href="http://bloemist.ninja">Bloemist</a>
							</span>
						</div>

						<div class="col-sm-4 text-right text-center-xs">
							<ul class="list-inline social-list">
								<li><a href="https://twitter.com/HSGhent"><i class="ti-twitter-alt"></i></a></li>
								<li><a href="https://www.facebook.com/hackerspace.gent"><i class="ti-facebook"></i></a></li>
								<li><a href="https://github.com/0x20/landing"><i class="ti-github"></i></a></li>
								<li><a href="https://www.instagram.com/hackerspace.gent/"><i class="ti-instagram"></i></a></li>
								<!--<li><a href="#"><i class="ti-dribbble"></i></a></li>
								<li><a href="#"><i class="ti-vimeo-alt"></i></a></li>-->
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/countdown.min.js"></script>
				<script src="js/smooth-scroll.min.js"></script>
				<script src="js/spectragram.min.js"></script>
				<script src="js/twitterfetcher.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/lightbox.js"></script>
        <!--<script src="js/lightbox.min.js"></script>-->
        <script>document.title = "HS.gent (<?php echo $members_in.','.$strangers_in; ?>)";</script>
		
		
		<!-- CAL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/gcal.js" integrity="sha256-Up0naRM3Y5mccKDulyZHx9Kn0hPh1zFsDwnx4V7r9yk=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#bootstrapModalFullCalendar').fullCalendar({
                googleCalendarApiKey: 'AIzaSyB5BCTDN5vLfegBap8qpo0N2PX_fKYmL9o',
                events: 
			<?php
			echo file_get_contents('http://hub.kwitz.net/data/events/event_output_r.php');
			?>,
                firstDay: 1,
                header: {
                    
                    left: '',
                    center: 'prev title next',
                    right: ''
                },
                timeFormat: 'H(:mm)',
			          columnFormat: {
                  month: 'ddd',    // Mon
                  week: 'ddd D/M', // Mon 7
                  day: 'dddd D/M',  // Monday 7/9
                  agendaDay: 'dddd D/M'
                },
                titleFormat: {
                  month: 'MMMM YYYY', // September 2009
                  week: "MMMM YYYY", // September 2009
                  day: 'D MMMM YYYY'                  // Tuesday, Sep 8, 2009
                },
                defaultView: 'month',
                navLinks: true,
                eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#fullCalModal').modal();
                    return false;
                },
            });
        });
			
			
			
				var Spectra = {
  instaToken: '5738764140.70d477f.d10c7d5f9bc94977b6ea0f6e53dfe01d',
  instaID: ' 70d477fbcea2413690e32b7c15163261',

  init: function () {
    $.fn.spectragram.accessData = {
      accessToken: this.instaToken,
      clientID: this.instaID
    };

    $('.instafeed').spectragram('getUserFeed',{
      max: 4,
      query: 'hackerspace.gent'
    });
  }
}

Spectra.init();
    </script>

    </body>
</html>
