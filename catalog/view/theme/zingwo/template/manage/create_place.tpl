
<form class="form" method="post" id="form-post-event" enctype="multipart/form-data">
        <div class="alert alert-danger hidden alert-error-event"> </div>
        <div class="row mgb15">
            <div class="col-md-9 form-group">
				<label for="title-place">Tên địa điểm/cửa hàng <span>*</span></label>
				<input type="text" name="name" id="title-place" class="form-control" />
                <span style="color:#ea6153;" class="text-danger" id="pla_name_error"></span>
            </div>

        </div>
        <div class="row mgb15">
            <div class="col-md-4 form-group">
                <label for="category_id">Lĩnh vực <span>*</span></label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="0">Chọn lĩnh vực</option>
                    <?php foreach($categories as $category){?>
                        <option value="<?php echo $category['category_id']; ?>"><?php echo $category['name']; ?></option>
                    
                    <?php } ?>
                </select>
                <span style="color:#ea6153;" class="text-danger" id="pla_category_id_error"></span>
            </div>
            <div class="col-md-4 form-group">
                <label for="ec-working-time">Thời gian mở cửa<span>*</span></label>
                <textarea name="working_time" class="form-control noresize" id="ec-working-time" placeholder="Ví dụ: 8h30-22h Thứ 2 - Thứ 6 "></textarea>
                <span style="color:#ea6153;" class="text-danger" id="pla_working_time_error"></span>
                
            </div>
        </div>
        
        <div class="row ec-avatar mgb15">
            <div class="col-md-4">
                <label for="categories">Ảnh bìa địa điểm <span>*</span></label>
                <div class="col-md-12 panel panel-default pdl0 pdr0">
                    <div class="panel-body">
				        <div class="col-md-5 pdl0 text-center pdt25">
							<i class="fa fa-camera"></i>
                        </div>
                        <div class="col-md-7 pdr0">
							<div role="group" class="btn-group-vertical">
    							 <br/>
    						    <input id="uploadImage" class="btn btn-default" type="file" accept="image/*" name="uploadImage" title="Tải ảnh lên"/>
    												
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pdl0 pdr0">
                    <small class="noti">Kích thước ảnh tối thiểu: 755x290px</small><br />
                    <small class="noti">Dung lượng ảnh tối đa cho phép: 1mb</small>
                    <span style="color:#ea6153;" class="text-danger" id="pla_image_error"></span>
                </div>
            </div>
            <div class="col-md-8">
                <label for="categories">Preview <span>*</span> <small>(Kích thước ảnh chuẩn 815x315px)</small></label>
                
                <div class="col-md-12 panel panel-default pdl0 pdr0">
                    <div class="panel-heading" id="previewImage" style="height:208px;padding:0;">
                        <img style="width: 100%;height:100%;" class="img-resposive" src="image/catalog/no-image.jpg"/>
                        <input type="hidden" name="image" id="image-src" value=""/>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        
        <div class="row mgt35 mgb25">
            <div class="col-md-12">
                <label for="short_descript">Đoạn mô tả ngắn</label>
                <textarea name="short_description" class="form-control noresize" id="short_descript" placeholder="Viết đoạn giới thiệu ngắn gọn và thu hút về địa điểm của bạn.."></textarea>
                <span style="color:#ea6153;" class="text-danger" id="pla_short_description_error"></span>
    
            </div>
        </div>
        <div class="row mgb25">
            <div class="col-md-12 form-group">
                <label for="descript">Giới thiệu về địa điểm <span>*</span></label>
                <textarea name="description" class="form-control vresize summernote" rows="15" id="descript" placeholder="Nội dung giới thiệu địa điểm .."></textarea>
                <span style="color:#ea6153;" class="text-danger" id="pla_description_error"></span>
            </div>
        </div>
        <div class="row mgb15">
            <div class="col-md-9 form-group">
				<label for="telephone">Điện thoại<span>*</span></label>
				<input type="text" name="telephone" id="telephone" class="form-control" />
                <span style="color:#ea6153;" class="text-danger" id="pla_telephone_error"></span>
            </div>

        </div>
        <div class="row mgb15">
            <div class="col-md-9 form-group">
				<label for="email">Email<span>*</span></label>
				<input type="text" name="email" id="email" class="form-control" />
                <span style="color:#ea6153;" class="text-danger" id="pla_email_error"></span>
            </div>

        </div>
		<div class="row mgt35 mgb25">
            <div class="col-md-5 form-group">
                <label for="ec-address">Địa chỉ <span>*</span></label>
                <input type="text" name="address" class="form-control noresize" id="address" placeholder="Số nhà, tên đường, phường"/>
                <span style="color:#ea6153;" class="text-danger" id="pla_address_error"></span>
                
            </div>
            <div class="col-md-3">
                <label for="city_id">Tỉnh thành <span>*</span></label>
                <select class="form-control" id="city_id" name="city_id">
                    <option value="0">Chọn tỉnh thành</option>
                    <?php foreach($zones as $zone){?>
                        <option value="<?php echo $zone['zone_id']; ?>"><?php echo $zone['name']; ?></option>
                    
                    <?php } ?>
																					
                </select>
                <span style="color:#ea6153;" class="text-danger" id="pla_city_id_error"></span>
    
            </div>
            <div class="col-md-3">
                <label for="district_id">Quận huyện <span>*</span></label>
                <select class="form-control" id="district_id" name="district_id">													
                </select>
                <span style="color:#ea6153;" class="text-danger" id="pla_district_id_error"></span>
    
            </div>
        </div>
        <div class="row mgb15">
            <div class="col-md-9 form-group">
				<label for="email">Bản đồ</label>
				<span class="btn btn-success mgl20" id="update-map">Cập nhật vị trí</span>
                <input id="latitude" name="latitude" type="hidden" value=""/>
                <input id="longitude" name="longitude" type="hidden" value=""/>
                <span style="color:#ea6153;" class="text-danger" id="pla_map_error"></span>
            </div>
			<div class="col-md-12 form-group">
				<div class="map-popup">
					<input id="pac-input" class="controls" type="text" placeholder="Search Box">
					<div id="map"></div>
				</div>
			</div>

        </div>
         <div class="row mgb15 mgr15">
            <p class="text-danger alert-error-event"></p>
            
            <span class="btn btn-danger mgl05 pull-right" id="save-place-btn">Lưu địa điểm</span>
        </div>
    </form> <!-- End Form -->
<script type="text/javascript"><!--
$('#collapse-place select[name=\'city_id\']').on('change', function() {
	$.ajax({
		url: 'manage/create/zone&parent_id=' + this.value,
		dataType: 'json',
		beforeSend: function() {
			$('#collapse-place select[name=\'city_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
		},
		complete: function() {
			$('.fa-spin').remove();
		},
		success: function(json) {
		  
			html = '';

			if (json['zones'] && json['zones'] != '') {
				for (i = 0; i < json['zones'].length; i++) {
					html += '<option value="' + json['zones'][i]['zone_id'] + '"';


					html += '>' + json['zones'][i]['name'] + '</option>';
				}
			} 

			$('#collapse-place select[name=\'district_id\']').html(html);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$('#collapse-place select[name=\'city_id\']').trigger('change');
//--></script>

<script type="text/javascript"><!--
$('#uploadImage').on('change', function() {
    var data = new FormData();
    data.append('uploadImage', $('#uploadImage').prop('files')[0]);
    
	$.ajax({
	    type: 'POST',
	    processData: false, // important
        contentType: false, // important
        data: data,
		url: 'manage/create_place/image_upload',
        dataType: 'json',
		beforeSend: function() {
			$('#uploadImage').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
            $('#pla_image_error').html('');
		},
		complete: function() {
			$('.fa-spin').remove();
		},
		success: function(json) {
		    if (json['error']) {
                $('#pla_image_error').html(json['error']);
            }
            else{
                var image = 'image/'+ json['image'];
                $('.img-resposive').attr("src",image);
                $('#image-src').val(json['image']);
            }
			
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});
//--></script>

<script type="text/javascript"><!--
	    var pyrmont = {lat: 10.7738122, lng: 106.6821994};
		if (navigator.geolocation) {
			var location_timeout = setTimeout("geolocFail()", 10000);

			navigator.geolocation.getCurrentPosition(function(position) {
				clearTimeout(location_timeout);
				pyrmont = {lat: position.coords.latitude, lng: position.coords.longitude};
			}, function(error) {
				clearTimeout(location_timeout);
				var errors = { 
					1: 'Permission denied',
					2: 'Position unavailable',
					3: 'Request timeout'
				  };
				console.log("Error: " + errors[error.code]);
			});
		} else {
			// Fallback for no geolocation
			console.log("Geolocation is not supported by this browser.");
		}
      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
			console.log(place.geometry.location.lat());
          });
          map.fitBounds(bounds);
        });
      }

//--></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYW-HSImpSWbLZPjMcx5ypGIHwlsP9xGI&libraries=places&callback=initAutocomplete" async defer></script>