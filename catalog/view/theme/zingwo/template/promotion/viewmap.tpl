<?php echo $header; ?>
	
<div id="eventdetail" itemscope itemtype="http://schema.org/Event">
	<div id="mainevent">
		<div class="event-info full-100">
            <input type="hidden" id="event_latitude" value="<?php echo $lat; ?>"/>
            <input type="hidden" id="event_longitude" value="<?php echo $long; ?>"/>
            <div class="event-maps">
                <div id="map" style="width:100%;height:500px;">No map</div>
            </div>
            <script>
		      var map;
		      var marker;
              function initAutocomplete(){
		          var lat = parseFloat($('#event_latitude').val());
		          var lng = parseFloat($('#event_longitude').val());
		          if((lat==0&&lng==0)||(lng==255&&lat==255)) {
		              return false;
		          } else {
		              var latlng = {lat: lat, lng:lng};
		              map = new google.maps.Map(document.getElementById('map'), {
		                  center: latlng,
		                  zoom: 14
    		          });
    		          marker = new google.maps.Marker({
    		              position: latlng,
    		              map: map
    		          });
		          }
		      }
		      </script>
		</div>
	</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzzE_zON49mpNwFjeFT8WnOznyNXs70YQ&callback=initAutocomplete" async defer></script>

<?php echo $footer; ?>