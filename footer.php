
		<div class="footer-after-bg"></div>
			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">



				<div id="inner-footer" class="wrap cf">
					
					<div class="t1of2 d-1of2" >
							<div id="map"></div>
					</div>
		


					<div class="t-1of2 d-10f2 ">
					
						<h2>Contact Us</h2>
						<p class="footer-p"><i class="fa fa-home"></i> 15 Princes Street, PO Box 75,	Paeroa</p> 
						<p class="footer-p"><i class="fa fa-phone"></i> 07 862 8755</p>
						<p class="footer-p"><i class="fa fa-fax"></i> 07 862 8220</p>
						<p class="footer-p"><i class="fa fa-calendar"></i> Monday to Friday  8:00AM till 5:00PM</p>

					</div>
					
				

				</div>
	<script>
      var map;
      var myLatLng = {lat: -37.3817599, lng: 175.6703098};
    	var mapStyles = [{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}];
    	
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 14
        });
      var marker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    title: 'Hello World!'
      });
    map.setOptions({styles: mapStyles});
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDedQ4Ic2YGqq_weqcO2Xxvmdio8dwf45U&callback=initMap"
    async defer>
    </script>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
