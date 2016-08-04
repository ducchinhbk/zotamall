<?php echo $header; ?>
<div id="about" class="about-home full-100">
    <div class="about-cover-o about-box full-100">
		<div class="container">
			<div class="header-container">
				<h1 class="search-title hidden-sm hidden-xs">Thế giới sự kiện đặc sắc</h1>
				<div class="w-100 clearfix">
					<div class="col-md-8 col-md-offset-2 clearfix padding-left-0 padding-right-0">
						<div class="w-100 searcher">
							<div class="input-group rounded search-form">
								<input data-autocomplete="search" type="text" class="form-control" placeholder="Tìm sự kiện, khóa học, khu vui chơi..." aria-describedby="sizing-addon1" value="" tabindex="1" autocomplete="off">
								<span tabindex="2" class="search-btn input-group-addon bg-white smooth-trans" data-search-click="true"><span class="fa fa-search"></span></span>
							</div>
							<div class="search-res relative" data-search-result="true"><div class="autocomplete-suggestions" style="position: absolute; display: none; z-index: 9999;"></div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="container">
		<div class="row">
			<div class="menumain navbar-collapse collapse pdl0 pdr0 mgt10 navbar-search" id="navbar-search">
				<div id="filltermenu" class="col-lg-10 col-sm-12 col-xs-12 pdr0">
					<ul>
						<li class="lv1 em-address">
							<span class="em-icon">
								<b class="fa fa-map-marker"></b>
								<b class="hidden-sm">Địa điểm</b>
							</span>
							<span class="em-bo">
							<input id="city_filter"  class="dropdown-toggle em-li" data-toggle="dropdown" type="text" value="" placeholder="Tất cả địa điểm"/>
							 <i class="fa fa-angle-down"></i>
							
							<ul id="city_dropdown" class="dropdown-menu dropdown-menu-address">
                                
								<li class="lv2"><a data-link="tat-ca">Tất cả địa điểm</a></li>
                                <?php foreach($cities as $city) {?>
								<li class="lv2" ><a data-link="<?php echo $city['link']; ?>" ><?php echo $city['name']; ?></a></li>
                                <?php } ?>
							</ul>
							</span>
						</li>
						<li class="lv1 em-category">
							<span class="em-icon">
								<b class="fa fa-book"></b>
								<b class="hidden-sm">Danh mục</b>
							</span>
							<a href="#" class="dropdown-toggle em-bo" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Tất cả danh mục <i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-category">
								<li class="lv2"><a data-category="tat-ca">Tất cả danh mục</a></li>
                                <?php foreach($categories as $category) {?>
								    <li class="lv2"><a data-category="<?php echo $category['link']; ?>"><?php echo $category['name']; ?></a></li>
                                <?php } ?>
								
							</ul>
						</li>
						<li class="lv1">
							<span class="em-icon">
								<b class="fa fa-clock-o"></b>
								<b class="hidden-sm">Thời gian</b>
							</span>
							<a class="em-bo dropdown-time" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="event/search/">
							Tất cả thời gian <i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-time">
								<li class="lv2"><a data-time="tat-ca">Tất cả thời gian</a></li>
								<li class="lv2"><a data-time="sap-dien-ra">Sắp diễn ra</a></li>
								<li class="lv2"><a data-time="moi-dang">Mới đăng</a></li>
								<li class="lv2"><a data-time="dang-dien-ra">Đang diễn ra</a></li>
								<li class="divider" role="separator"></li>
								<li class="lv2">
									<span class="li-calen"><i class="fa fa-calendar"></i><input type="text" id="datetimepicker12" placeholder="Chọn ngày diễn ra" value = ""/></span>
								</li>
							</ul>
						</li>
						<li class="lv1">
							<span class="em-icon">
								<b class="fa fa-ticket"></b>
								<b class="hidden-sm">Khuyến mãi</b>
							</span>
							<a class="em-bo dropdown-time" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="event/search/">
							Tất cả <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu dropdown-menu-save">
								<li class="lv2"><a data-type="tat-ca">Tất cả</a></li>
								<li class="lv2"><a data-type="noi-bat">Nổi bật</a></li>
							</ul>
						</li>
		
					</ul>
				</div>
				
				<div id="lehoi" class="col-lg-2 hidden-md hidden-sm hidden-xs">
					<a href="#" target="_blank"><img src="image/catalog/johncmaxwell.png" alt="Phát Triển Khả Năng Lãnh Đạo" style="max-height: 90px; top: -28px !important;" /></a>
				</div>        
			</div>
			<div class="es-top full-100">
				<div class="container" id="filter-tag">
					<span class="keyword"><strong>Tìm kiếm:</strong>  &nbsp;&nbsp;</span>
                    <span id="name-filter" class="badge" data-url=""></span>
					<span id="city-filter" class="badge" data-url=""></span>
					<span id="category-filter" class="badge" data-url="<?php echo ($activeCateUrl) ? '&category=' .$activeCateUrl : ''; ?>"><?php echo ($activeCateName)? $activeCateName .'<span><i class="fa fa-remove"></i></span>': '' ; ?></span>
					<span id="time-filter" class="badge" data-url=""></span>
                    <span id="type-filter" class="badge" data-url=""></span>						 
				</div>
			</div>
		</div>
	</div>
        
</div>
<div id="search" class="clearfix">
    <div class="container" style="position: relative">
		<div class="row">
			<div id="adsvip" class="full-100">
				<div id="adsvip-item" class="full-1001">
                    <?php foreach($promotions as $promotion ){ ?>
                    <div class="col-md-4 col-sm-6 pdl0 pdr15 mgb20">
						<div class="bi-img">
							<a href="<?php echo $promotion['link']; ?>">
							     <img src="<?php echo $promotion['image']; ?>" class="img-responsive" alt="<?php echo $promotion['name']; ?>">  
                            </a>
						</div>
						<div class="description">
							<h3>
							     <a href="<?php echo $promotion['link']; ?>"><?php echo $promotion['name']; ?></a>
							</h3>
                            <div class="pull-left">
                                <p class="date">
							     <?php echo $promotion['shop_name']; ?>             
    							</p>
    							<p class="local">
    								<i class="fa fa-small fa-map-marker"></i>
                                    <?php echo $promotion['city']; ?>
    							</p>
                            </div>
							<div class="pull-right">
                                <div class="event-date">
                                    <?php echo $promotion['dateOuput']; ?>
                                </div>
                            </div> 
						</div>
						
					</div>
                    <?php } ?>
                
				</div>
			</div>
			<div class="col-md-12 pdt20 mgb20 pdl0 text-center" style="clear:both;">
                <a href="javascript:;" id="btnLoadMore" class="btn btn-default btn-seemore" data-waiting="true" style="cursor: pointer;">Xem thêm <i class="fa fa-angle-down"></i></a>
            </div>
		</div>
        
	</div>
</div>
<script type="text/javascript">
   
    $(function () {
        $('#datetimepicker12').datetimepicker({
            //inline: true,
            locale: 'vi',
            format:'DD-MM-YYYY',
            useCurrent: false
        }).on('dp.change',function(e){
            offset = 0;
            get_event($('#datetimepicker12').data('date'));
            //get_events_filter(filterJson,key,'start_date','>=',$('#datetimepicker12').data('date'),limit,offset);
        });
        //$('.datepicker .today').trigger('click');
    });
</script>

<script type="text/javascript"><!--
$('#city_dropdown li a').on('click', function() {
    var old_param = '<?php echo isset($_GET["city"]) ? "&city=".$_GET["city"]: ""; ?>';
    var new_param = '&city=' + $(this).data('link');
    var cityName = $(this).text();
    var cityBlock = cityName + ' <span><i class="fa fa-remove"></i></span>';
    $('#city-filter').data('url', new_param);
    $('#city-filter').html(cityBlock);
    redirect(old_param, new_param);
});
//--></script>
<?php echo $footer; ?>