<?php echo $header; ?>
	
<div id="eventdetail" itemscope itemtype="http://schema.org/Event">
	<div id="mainevent">
		<div class="container" style="position: relative">
			<div class="sidebar hidden-sm hidden-xs">
				<div class="event-organ full-100">
					<h4><?php echo $shop['name'];?></h4>
                    <p><?php echo $shop['short_description'];?></p>
                    <div class="place-block">
                        <div class="place-info">
                          <img class="place-avatar" src="<?php echo $shop['avatar'];?>"/>
                          <div class="place-details">
                            <div class="place-detailsName">
                              sarah.hidey
                            </div>
                            <div class="place-detailsLocation">
                              <?php echo $shop['district'] .', '. $shop['city'];?>
                            </div>
                            <div class="place-detailsLinks">
                              <a href="<?php echo $shop['link'];?>" class="place-detailsLinks-info">Xem trang</a>
                            </div>
                          </div>
                        </div>
                    </div>
					<ul class="event-info-key mgt10">
						<li class="phonekey">
							<a class="btn btn-success" data-telephone="<?php echo $shop['telephone'];?>" id="display-telephone"><i class="fa fa-phone"></i> Xem số điện thoại</a>
						</li>
                        <li class="addskey">
							<span><i class="fa fa-map-marker"></i> <?php echo $shop['address'];?></span>
						</li>
					</ul>
				</div>
				<div class="event-info full-100">
					<input type="hidden" id="event_latitude" value="10.851644"/>
					<input type="hidden" id="event_longitude" value="106.660675"/>
					<div class="event-maps">
						<div id="map" style="width:100%;height:150px;">No map</div>
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
					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzzE_zON49mpNwFjeFT8WnOznyNXs70YQ&callback=initAutocomplete" async defer></script>
					<p class="type-xs lg-map-view">
                		<a href="#" data-reveal-id="getMap">
                		<i class="fa fa-location-arrow"></i> Xem bản đồ lớn	</a>
                	</p>
				</div>
				
				
				<div class="event-sponsor full-100">
					
					<div class="boxads adsl1 txtcenter full-100">
					</div>					
					<div id="event-sponser" style="float: left; position: static; z-index: 999">
						<h3 class="sidebarst1" style="margin-top:0">Khuyến mãi gợi ý</h3>
						<ul style="display: block; float: left">
                            <li>
								<div class="col-md-5 pdl0 pdr0">
									<a class="event-avatar" href="liveshow-hoai-linh-chi-tai-truong-giang-chi-tai-dinh-menh-1995074-2016.html">
										<img src="http://media.sukienhay.com/cache/images/event/1620014086.png" class="img-responsive" alt="Liveshow Hoài Linh - Chí Tài - Trường Giang: Chỉ Tại Định Mệnh" />                
                                    </a>
								</div>
								<div class="title col-md-7 pdr0 pdl10">
									<h3><a href="liveshow-hoai-linh-chi-tai-truong-giang-chi-tai-dinh-menh-1995074-2016.html" class="nameevent">Liveshow Hoài Linh - Chí Tài - Trường Giang: Chỉ Tại Định Mệnh</a></h3>
									<span class="date"><i class="fa fa-map-marker"></i> Hồ Chí Minh</span>
								</div>
							</li>
							<li>
								<div class="col-md-5 pdl0 pdr0">
									<a class="event-avatar" href="#">
										<img src="http://media.sukienhay.com/cache/images/event/781378192.png" class="img-responsive" alt="Đào Tạo Trực Tiếp Bởi John C Maxwell" /> 
                                    </a>
								</div>
								<div class="title col-md-7 pdr0 pdl10">
									<h3><a href="#" class="nameevent">Khóa Học &quot;Phát Triển Khả Năng Lãnh Đạo&quot;- Đào Tạo Trực Tiếp Bởi John C Maxwell</a></h3>
									<span class="date"><i class="fa fa-map-marker"></i> Hồ Chí Minh</span>
									 
								</div>
							</li>
							<li>
								<div class="col-md-5 pdl0 pdr0">
									<a class="event-avatar" href="#">
										<img src="http://media.sukienhay.com/cache/images/event/3188390902.png" class="img-responsive" alt="Khóa học Xây dựng Thương hiệu bền vững theo chuẩn Quốc tế [Hà Nội]" />                
                                    </a>
								</div>
								<div class="title col-md-7 pdr0 pdl10">
									<h3><a href="#" class="nameevent">Khóa học Xây dựng Thương hiệu bền vững theo chuẩn Quốc tế [Hà Nội]</a></h3>
									<span class="date"><i class="fa fa-map-marker"></i> Hồ Chí Minh</span>
								</div>
							</li>
						
						</ul>
					</div>									
				</div>

			</div>
			<div class="content main-content">
				<div class="coverevent pdt15">
					<div class="box-event-avatar">
						<img itemprop="image" class="img-responsive img-ava-event" style="width: 100%" src="<?php echo 'image/' . $promotion['image'];?>" alt="<?php echo $promotion['name'];?> 1" />
					</div>
				</div>
				<div class="title pdt15">
					<h1>
						<a href="javascript:;"><?php echo $promotion['name'];?></a>
					</h1>
					<div class="col-md-7 pdl0">
						<span class="category">
							<a href="#">Văn hóa &amp; Giải trí</a>																				
						</span>
						<span class="date">
							Bắt đầu : <strong itemprop="startDate" content="<?php echo $promotion['start_hour'] . ' | ' . $promotion['start_date'];?>"><?php echo $promotion['start_hour'] . ' | ' . $promotion['start_date'];?></strong> 
						</span>
						<span class="date">
							Kết thúc : <strong itemprop="endDate" content="<?php echo $promotion['end_hour'] . ' | ' . $promotion['end_date'];?>"><?php echo $promotion['end_hour'] . ' | ' . $promotion['end_date'];?></strong>
						</span>
						<span class="local">
							<i class="fa fa-map-marker"></i><?php echo $shop['address'];?>													
							
						</span>
					</div>
					<div class="col-md-5 reviews text-right hidden-xs hidden-sm pdr00 pdl00 ">
						<div class="mgb20">
							<div class="col-md-4 pdl00 pdr05" data-toggle="tooltip" title="Lượt xem">
								
							</div>
							<div class="col-md-5 pdl00 pdr00" data-toggle="tooltip" title="Đánh giá">
								<span class="rate">
									<a id="event-review-link" href="javascript:void(0);">
									<i class="fa fa-star" style="color:#ffd600;"></i> 0.0 | 0 đánh giá</a>
								</span>
							</div>
						</div>

					</div>
					<div class="clearfix"></div>
				</div>
			
				<div class="action-e full-100" id="action-register-button">
				
				</div>
			<!--  /* End action Event*/ -->
				<div class="event-content full-100">
					<?php echo html_entity_decode($promotion['description']);?>			
                </div>
				<div class="event-tag full-100">
				    <span class="tag"></span>
				</div>	
                <div class="event-reviews full-100" id="event-reviews">
				    <h3 class="sidebarst2">Đánh giá</h3>
				    <div class="col-md-5 pdl0 pdt20">
				        <p class="full-100">Đăng nhập để chia sẻ đánh giá, nhận xét của bạn</p>
				        <p>
				            <a href="javascript:void(0);" class="btn btn-success"><b class="fa fa-edit"></b> Viết đánh giá</a>
				        </p>
                    </div>
				    <div class="col-md-7 pdr0 hidden-xs  hidden-sm">
				        <div class="row">
				            <div class="col-md-2"> 5 sao </div>
                            <div class="col-md-6 pdl0">
				                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 53%;">
                                    </div>
				                </div>
				            </div>
				            <div class="col-md-4 pdl0">53%</div>
				        </div>
                        <div class="row">
				            <div class="col-md-2">4 sao</div>
                            <div class="col-md-6 pdl0">
								<div class="progress">
						              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
									  </div>
							    </div>
				            </div>
				            <div class="col-md-4 pdl0">20%</div>
				        </div>
                        <div class="row">
				            <div class="col-md-2">3 sao</div>
                            <div class="col-md-6 pdl0">
				                <div class="progress">
		                           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
						           </div>
								</div>
				            </div>
				            <div class="col-md-4 pdl0">0%</div>
				        </div>
                        <div class="row">
				            <div class="col-md-2">2 sao</div>
                            <div class="col-md-6 pdl0">
								<div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                    </div>
								</div>
				            </div>
				            <div class="col-md-4 pdl0">0%</div>
				        </div>
                        <div class="row">
				            <div class="col-md-2">1 sao</div>
                            <div class="col-md-6 pdl0">
								<div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                </div>
				            </div>
				        </div>
    				        <div class="col-md-4 pdl0">0%</div>
    				    </div>
                    </div> <!-- END THONG KE LUOT DANH Gia -->
    				<div class="col-md-12"></div>
    				<ul class="full-100" id="review-content">
                    
                    </ul>
    				<ul class="full-100" id="review-content-2">
    
                    </ul>
                    <div class="loader-inner ball-pulse text-center hidden" id="loader-review"></div>
                </div>
            
                <div class="event-other full-100">
                    <h3 class="sidebarst2">Sự kiện liên quan khác</h3>
                    <div id="event-related">
                        <ul>
                            <li class="col-md-4 mgl0 mgr0">
                                <img src="http://media.sukienhay.com/cache/images/event/73802211.png" class="img-responsive" alt="BEETHOVEN &amp; BRAHMS" />            
                                <div class="title">
                                    <h3><a href="beethoven-brahms-1995417-2016.html" class="nameevent">BEETHOVEN &amp; BRAHMS</a></h3>
                                    <span class="date">19:00 - 24/06/2016</span>
                                    <span class="local"><i class="fa fa-map-marker"></i>Quận 1, Hồ Chí Minh</span>
                                </div>
                            </li>
                            <li class="col-md-4 mgl0 mgr0">
                                <img src="http://media.sukienhay.com/cache/images/event/1871318128.png" class="img-responsive" alt="Hòa nhạc - Tình khúc BOLERO" />            
                                <div class="title">
                                    <h3><a href="hoa-nhac-tinh-khuc-bolero-1995420-2016.html" class="nameevent">Hòa nhạc - Tình khúc BOLERO</a></h3>
                                    <span class="date">20:00 - 24/06/2016</span>
                                    <span class="local"><i class="fa fa-map-marker"></i>Quận 1, Hồ Chí Minh</span>
                                </div>
                            </li>
                            <li class="col-md-4 mgl0 mgr0">
                                <img src="http://media.sukienhay.com/cache/images/event/2182060529.png" class="img-responsive" alt="Đêm nhạc danh ca PHƯƠNG DUNG - GIAO LINH" />            
                                <div class="title">
                                    <h3><a href="dem-nhac-danh-ca-phuong-dung-giao-linh-1995568-2016.html" class="nameevent">Đêm nhạc danh ca PHƯƠNG DUNG - GIAO LINH</a></h3>
                                    <span class="date">21:00 - 25/06/2016</span>
                                    <span class="local"><i class="fa fa-map-marker"></i>Quận 1, Hồ Chí Minh</span>
                                </div>
                            </li>
                            <li class="col-md-12 pdt20"></li>                
                            <li class="col-md-4 mgl0 mgr0">
                                <img src="http://media.sukienhay.com/cache/images/event/3036481794.png" class="img-responsive" alt="Liveshow ĐÀM VĨNH HƯNG - Có Những Niềm Riêng" />            
                                <div class="title">
                                    <h3><a href="liveshow-dam-vinh-hung-co-nhung-niem-rieng-1995569-2016.html" class="nameevent">Liveshow ĐÀM VĨNH HƯNG - Có Những Niềm Riêng</a></h3>
                                    <span class="date">20:30 - 30/06/2016</span>
                                    <span class="local"><i class="fa fa-map-marker"></i>Quận 1, Hồ Chí Minh</span>
                                </div>
                            </li>
                            <li class="col-md-4 mgl0 mgr0">
                                <img src="http://media.sukienhay.com/cache/images/event/3395832094.png" class="img-responsive" alt="Liveshow Ông Hoàng Nhạc Sến - NGỌC SƠN" />            
                                <div class="title">
                                    <h3><a href="liveshow-ong-hoang-nhac-sen-ngoc-son-1995570-2016.html" class="nameevent">Liveshow Ông Hoàng Nhạc Sến - NGỌC SƠN</a></h3>
                                    <span class="date">20:30 - 08/07/2016</span>
                                    <span class="local"><i class="fa fa-map-marker"></i>Quận 1, Hồ Chí Minh</span>
                                </div>
                            </li>
                            <li class="col-md-4 mgl0 mgr0">
                                <img src="http://media.sukienhay.com/cache/images/event/1495721632.png" class="img-responsive" alt="Danh ca Ý LAN với đêm nhạc chủ đề: &quot;Dạ Khúc&quot;" />            
                                <div class="title">
                                    <h3><a href="danh-ca-y-lan-voi-dem-nhac-chu-de-da-khuc-1995415-2016.html" class="nameevent">Danh ca Ý LAN với đêm nhạc chủ đề: &quot;Dạ Khúc&quot;</a></h3>
                                    <span class="date">21:00 - 15/07/2016</span>
                                    <span class="local"><i class="fa fa-map-marker"></i>Quận 1, Hồ Chí Minh</span>
                                </div>
                            </li>
                            <li class="col-md-12 pdt20"></li>            
                        </ul>
                    </div>				
                </div>
            </div>
		</div>
	</div>
</div>
<script type="text/javascript"><!--
$('#display-telephone').on('click', function() {
    var telephone = $(this).data('telephone');
    $(this).html('<i class="fa fa-phone"></i> ' + telephone);
});

//--></script>
<?php echo $footer; ?>