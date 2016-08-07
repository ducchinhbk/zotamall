<?php echo $header; ?>

<div id="navbar-sticky" class="hidden">
	<div class="container">
		<div class="row">
			<div class="col-xs-12  pdb05">
				<h4 class="navbar-title">Vở kịch opéra Carmen của Georges Bizet</h4>
				<span class="navbar-info">
					<i class="fa fa-clock-o"></i> Từ 
					<strong itemprop="startDate" content="2016-07-01T20:00">20:00 Ngày 01/07/2016 </strong> 
					Đến <strong itemprop="endDate" content="2016-07-02T23:00">23:00 Ngày 02/07/2016 </strong>
				</span>

			</div>
			<div class="action-r col-xs-5 pdt05 pdb10 pdl0">
				<div class="right">
					<a href="tel:0932015454" class="btn btn-ads pdl0">
						<i class="fa fa-phone-square"></i> &nbsp; 09 32 01 54 54								
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
	
<div id="eventdetail" itemscope itemtype="http://schema.org/Event">
	<div id="mainevent">
		<div class="container" style="position: relative">
			<div class="sidebar hidden-sm hidden-xs">
				<div class="event-organ full-100">
					<h4>Tribe: Fashion & Purpose</h4>
                    <p>A global, socially conscious fashion line created to empower women around the world.</p>
                    <div class="place-block">
                        <div class="place-info">
                          <img class="place-avatar" src="https://graph.facebook.com/v2.2/500071561/picture?width=200"/>
                          <div class="place-details">
                            <div class="place-detailsName">
                              sarah.hidey
                            </div>
                            <div class="place-detailsLocation">
                              Denver, Etats-Unis
                            </div>
                            <div class="place-detailsLinks">
                              <a class="place-detailsLinks-info">Xem trang</a>
                            </div>
                          </div>
                        </div>
                    </div>
					<ul class="event-info-key mgt15">
						
						<li class="phonekey">
							<a class="btn btn-success"><i class="fa fa-phone"></i> Xem số điện thoại</a>
						</li>
                        <li class="addskey">
							<span><i class="fa fa-map-marker"></i> Nhà hát Thành phố, Ho Chi Minh City, Ho Chi Minh, Vietnam</span>
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
										<img src="http://media.sukienhay.com/cache/images/event/1620014086.png" class="img-responsive" alt="Liveshow Hoài Linh - Chí Tài - Trường Giang: Chỉ Tại Định Mệnh" />                </a>
								</div>
								<div class="title col-md-7 pdr0 pdl10">
									<h3><a href="liveshow-hoai-linh-chi-tai-truong-giang-chi-tai-dinh-menh-1995074-2016.html" class="nameevent">Liveshow Hoài Linh - Chí Tài - Trường Giang: Chỉ Tại Định Mệnh</a></h3>
									<span class="date">Từ 20:00 Ngày 09-07-2016</span>
								</div>
							</li>
							<li>
								<div class="col-md-5 pdl0 pdr0">
									<a class="event-avatar" href="khoa-hoc-phat-trien-kha-nang-lanh-dao-dao-tao-truc-tiep-boi-john-c-maxwell-1992512-2016.html">
										<img src="http://media.sukienhay.com/cache/images/event/781378192.png" class="img-responsive" alt="Khóa Học &quot;Phát Triển Khả Năng Lãnh Đạo&quot;- Đào Tạo Trực Tiếp Bởi John C Maxwell" />                </a>
								</div>
								<div class="title col-md-7 pdr0 pdl10">
									<h3><a href="khoa-hoc-phat-trien-kha-nang-lanh-dao-dao-tao-truc-tiep-boi-john-c-maxwell-1992512-2016.html" class="nameevent">Khóa Học &quot;Phát Triển Khả Năng Lãnh Đạo&quot;- Đào Tạo Trực Tiếp Bởi John C Maxwell</a></h3>
									<span class="date">Từ 08:00 Ngày 24-07-2016</span>
									 
								</div>
							</li>
							<li>
								<div class="col-md-5 pdl0 pdr0">
									<a class="event-avatar" href="khoa-hoc-xay-dung-thuong-hieu-ben-vung-theo-chuan-quoc-te-ha-noi-53031-2016.html">
										<img src="http://media.sukienhay.com/cache/images/event/3188390902.png" class="img-responsive" alt="Khóa học Xây dựng Thương hiệu bền vững theo chuẩn Quốc tế [Hà Nội]" />                </a>
								</div>
								<div class="title col-md-7 pdr0 pdl10">
									<h3><a href="khoa-hoc-xay-dung-thuong-hieu-ben-vung-theo-chuan-quoc-te-ha-noi-53031-2016.html" class="nameevent">Khóa học Xây dựng Thương hiệu bền vững theo chuẩn Quốc tế [Hà Nội]</a></h3>
									<span class="date">Từ 18:00 Ngày 27-09-2016</span>
								</div>
							</li>
							<li>
								<div class="col-md-5 pdl0 pdr0">
									<a class="event-avatar" href="khoa-hoc-ceo-toan-dien-ho-tro-hoc-phi-984856-2016.html">
										<img src="http://media.sukienhay.com/cache/images/event/3258867949.png" class="img-responsive" alt="Khóa học CEO Toàn Diện [Hỗ trợ học phí]" />                </a>
								</div>
								<div class="title col-md-7 pdr0 pdl10">
									<h3><a href="khoa-hoc-ceo-toan-dien-ho-tro-hoc-phi-984856-2016.html" class="nameevent">Khóa học CEO Toàn Diện [Hỗ trợ học phí]</a></h3>
									<span class="date">Từ 18:00 Ngày 05-08-2016</span>
								</div>
							</li>
							<li>
								<div class="col-md-5 pdl0 pdr0">
									<a class="event-avatar" href="liveshow-nhac-tinh-muon-thuo-quang-le-phi-nhung-manh-dinh-phuong-my-chi-1995373-2016.html">
										<img src="http://media.sukienhay.com/cache/images/event/3603524573.png" class="img-responsive" alt="Liveshow nhạc tình muôn thuở: Quang Lê, Phi Nhung, Mạnh Đình &amp; Phương Mỹ Chi" />                </a>
								</div>
								<div class="title col-md-7 pdr0 pdl10">
									<h3><a href="liveshow-nhac-tinh-muon-thuo-quang-le-phi-nhung-manh-dinh-phuong-my-chi-1995373-2016.html" class="nameevent">Liveshow nhạc tình muôn thuở: Quang Lê, Phi Nhung, Mạnh Đình &amp; Phương Mỹ Chi</a></h3>
									<span class="date">Từ 20:00 Ngày 06-08-2016</span>
									 
								</div>
							</li>
						</ul>
					</div>									
				</div>

			</div>
			<div class="content main-content">
				<div class="coverevent pdt15">
					<div class="box-event-avatar">
						<img itemprop="image" class="img-responsive img-ava-event" style="width: 100%" src="http://media.sukienhay.com/cache/images/event/865558254.png" alt="Ảnh 1" />
					</div>
				</div>
				<div class="title pdt15">
					<h1>
						<a href="javascript:;">Vở kịch opéra Carmen của Georges Bizet</a>
					</h1>
					<div class="col-md-7 pdl0">
						<span class="category">
							<a href="#">Văn hóa &amp; Giải trí</a>																				
						</span>
						<span class="date">
							Bắt đầu : <strong itemprop="startDate" content="2016-07-01T20:00">20:00 | 01-07-2016 </strong> 
						</span>
						<span class="date">
							Kết thúc : <strong itemprop="endDate" content="2016-07-02T23:00">23:00 | 02-07-2016 </strong>
						</span>
						<span class="local">
							<i class="fa fa-map-marker"></i>Nhà hát Thành phố, Ho Chi Minh City, Ho Chi Minh, Vietnam													
							
						</span>
					</div>
					<div class="col-md-5 reviews text-right hidden-xs hidden-sm pdr00 pdl00 ">
						<div class="mgb20">
							<div class="col-md-4 pdl00 pdr05" data-toggle="tooltip" title="Lượt xem">
								<span class="invite"><i class="fa fa-eye"></i> 23</span>
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
					<p><strong>Carmen l&agrave; vở kịch opera nổi tiếng nhất của Ph&aacute;p, nếu kh&ocirc;ng muốn n&oacute;i l&agrave; một trong những vở được diễn nhiều nhất tr&ecirc;n thế giới.&nbsp;</strong><br />
					<br />
					Carmen l&agrave; một c&acirc;u chuyện n&oacute;i về t&igrave;nh y&ecirc;u, ghen tu&ocirc;ng v&agrave; sự tự do. Carmen, một người phụ nữ lẳng lơ, t&aacute;o bạo đ&atilde; d&ugrave;ng nhan sắc của m&igrave;nh để quyến rũ Don Jos&eacute;, 
					hạ sĩ đang đ&oacute;ng qu&acirc;n ở S&eacute;ville (T&acirc;y Ban Nha). Anh ch&agrave;ng n&agrave;y đ&atilde; đ&iacute;nh h&ocirc;n với một người phụ nữ kh&aacute;c t&ecirc;n l&agrave; Mica&euml;la. Khi Carmen bị c&aacute;o buộc g&acirc;
					y ra ẩu đả trong nh&agrave; m&aacute;y thuốc l&aacute; nơi c&ocirc; l&agrave;m việc, ch&iacute;nh Don Jos&eacute; được giao nhiệm vụ dẫn c&ocirc; về đồn. V&igrave; đ&atilde; y&ecirc;u Carmen say đắm, Don Jos&eacute; đ&atilde; để c&ocirc; 
					trốn tho&aacute;t, sau đ&oacute; th&igrave; đau khổ tiếc nuối.<br />
					<span style="font-size:8px"><a href="https://www.youtube.com/watch?v=SZWjdYtzIZI" target="_blank"><span style="color:#FFFFFF">nhac giao huong</span></a></span><br />
					Carmen l&agrave; một c&acirc;u chuyện n&oacute;i về t&igrave;nh y&ecirc;u, ghen tu&ocirc;ng v&agrave; sự tự do. C&acirc;u chuyện n&agrave;y như được gởi gắm đến tất cả ch&uacute;ng ta. Carmen l&agrave; hiện th&acirc;n cho niềm đam m&ecirc; v&agrave; l&ograve;ng dũng cảm của mọi phụ nữ tr&ecirc;n thế giới. Vở diễn hứa hẹn sẽ t&igrave;m thấy được tiếng vang lớn trong l&ograve;ng c&ocirc;ng ch&uacute;ng Việt Nam.&nbsp;</p>

					<p style="text-align: center;"><img alt="" src="https://scontent-hkg3-1.xx.fbcdn.net/v/t1.0-9/13427798_1102406849826529_8248559395027293119_n.jpg?oh=76f2273529ebe2d6a252036bdb6c9e40&amp;oe=57CE18B6" /></p>

					<p><br />
					Đ&acirc;y l&agrave; lần đầu ti&ecirc;n to&agrave;n bộ phi&ecirc;n bản gốc của vở opera Carmen c&ugrave;ng với d&agrave;n nhạc được d&agrave;n dựng tại Việt Nam.<br />
					<span style="font-size:8px"><a href="https://www.youtube.com/watch?v=a_bI_au5asw" target="_blank"><span style="color:#FFFFFF">nhac beethoven</span></a></span><br />
					Với sự hỗ trợ của : Air France, Ambient Digital, Caravelle Saigon, Fusion Suites (Serenity Holding) Asia Holidays (by Phoenix Voyages), Le Petit Journal, Takalau Resort, Thuy Duong v&agrave; tạp ch&iacute; Word.<br />
					Gi&aacute; v&eacute; : Cat.A : 1.200.000 VNĐ; Cat.B : 700.000 VNĐ; Cat.C : 450.000 VNĐ<br />
					<br />
					<strong>V&eacute; được b&aacute;n tại Caravelle S&agrave;i G&ograve;n&nbsp;</strong><br />
					+ Thứ hai &ndash; thứ s&aacute;u : 9h &ndash; 18h<br />
					+ Thứ bảy : 9h &ndash; 12h<br />
					<span style="font-size:8px"><a href="https://www.youtube.com/watch?v=OVLAhHBUjL4" target="_blank"><span style="color:#FFFFFF">nhạc thư gi&atilde;n đầu &oacute;c</span></a></span><br />
					Th&ocirc;ng tin li&ecirc;n hệ : carmen@lysevents.com &ndash; 09 32 01 54 54</p>				</div>
					<div class="event-tag full-100">
						<span class="tag"></span>
					</div>
					

					<div class="event-reviews full-100" id="event-reviews">
						<h3 class="sidebarst2">Đánh giá</h3>
						<div class="col-md-5 pdl0 pdt20">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <b class="fa fa-caret-down"></b> 
							<a class=" text-primary">0 đánh giá</a> - 0.0/5.0 điểm.
							<p class="full-100">Đánh giá của bạn là thông tin quý giá cho cộng đồng</p>
							<p class=''>
								<a href="javascript:void(0);" class="btn btn-success">
								<b class="fa fa-edit"></b> Viết đánh giá</a>
							</p>
                        </div>
						<div class="col-md-7 pdr0 hidden-xs  hidden-sm">
							<div class="row">
								<div class="col-md-2">
									5 sao
								</div>

								<div class="col-md-6 pdl0">
									<div class="progress">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 53%;">
									  </div>
									</div>
								</div>
								<div class="col-md-4 pdl0">
									53%
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">
									4 sao
								</div>

								<div class="col-md-6 pdl0">
									<div class="progress">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
									  </div>
									</div>
								</div>
								<div class="col-md-4 pdl0">
									20%
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">
									3 sao
								</div>

								<div class="col-md-6 pdl0">
									<div class="progress">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
									  </div>
									</div>
								</div>
								<div class="col-md-4 pdl0">
									0%
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">
									2 sao
								</div>

								<div class="col-md-6 pdl0">
									<div class="progress">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
									  </div>
									</div>
								</div>
								<div class="col-md-4 pdl0">
									0%
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">
									1 sao
								</div>

								<div class="col-md-6 pdl0">
									<div class="progress">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
									  </div>
									</div>
								</div>
								<div class="col-md-4 pdl0">
									0%
								</div>
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

<?php echo $footer; ?>