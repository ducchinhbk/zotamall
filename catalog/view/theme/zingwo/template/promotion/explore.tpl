<?php echo $header; ?>
<div id="about" class="about-home full-100">
    <div class="about-cover-o about-box full-100" style="background: url('image/catalog/nb_mainbg.png')!important;">
		<div class="container">
			<div class="header-container hero__search">
				<h1 class="search-title hidden-sm hidden-xs">Khám phá khuyến mãi quanh bạn</h1>
				<div class="w-100 clearfix">
					<div class="col-md-10 small-centered">
                        <form id="searchForm" action="promotion/explore" method="get">
                            <div class="hero-search-group">
                                <div class="hero-search-input">
                                    <div class="loader hide-loader"></div>
                                    <input type="search" id="searchKey" placeholder="Search restaurants, spa, events, things to do..." class="ui-autocomplete-input search-form-input" autocomplete="off">
                                    <div class="suggestion_list">
                                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content hero-search-input__suggest" id="ui-id-1" tabindex="0" style="display: none;">
                                            <li class="ui-menu-item" id="ui-id-2" tabindex="-1">Sparkle Salon &amp; Academy, Navrangpura, Ahmedabad <span>outlet</span></li>
                                            <li class="ui-menu-item" id="ui-id-2" tabindex="-1">Sparkle Salon &amp; Academy, Navrangpura, Ahmedabad <span>outlet</span></li>
                                            <li class="ui-menu-item" id="ui-id-2" tabindex="-1">Sparkle Salon &amp; Academy, Navrangpura, Ahmedabad <span>outlet</span></li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="keyword"  value="" />
                                </div>
                                <div class="hero-search-button">
                                    <button type="submit" class="button prefix search-button"></button>
                                </div>
                            </div>
                        </form>
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
                                
								<li class="lv2"><a data-city="tat-ca" id="city-tat-ca">Tất cả địa điểm</a></li>
                                <?php foreach($cities as $city) {?>
								<li class="lv2" ><a data-city="<?php echo $city['link']; ?>" id="city-<?php echo $city['link']; ?>"><?php echo $city['name']; ?></a></li>
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
							<ul id="category_dropdown" class="dropdown-menu dropdown-menu-category">
								<li class="lv2"><a data-category="tat-ca" id="category-tat-ca">Tất cả danh mục</a></li>
                                <?php foreach($categories as $category) {?>
								    <li class="lv2"><a data-category="<?php echo $category['link']; ?>" id="category-<?php echo $category['link']; ?>"><?php echo $category['name']; ?></a></li>
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
							<ul id="time_dropdown" class="dropdown-menu dropdown-menu-time">
								<li class="lv2"><a data-time="tat-ca" id="time-tat-ca">Tất cả thời gian</a></li>
								<li class="lv2"><a data-time="sap-dien-ra" id="time-sap-dien-ra">Sắp diễn ra</a></li>
								<li class="lv2"><a data-time="moi-dang" id="time-moi-dang">Mới đăng</a></li>
								<li class="lv2"><a data-time="dang-dien-ra" id="time-dang-dien-ra">Đang diễn ra</a></li>
                                
								<li class="divider" role="separator"></li>
								<li class="lv2">
									<span class="li-calen"><i class="fa fa-calendar"></i><input type="text" id="datetimepicker12" value = "" placeholder="Chọn ngày diễn ra" /></span>
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
							<ul id="type_dropdown" class="dropdown-menu dropdown-menu-save">
								<li class="lv2"><a data-type="tat-ca" id="type-tat-ca">Tất cả khuyến mãi</a></li>
								<li class="lv2"><a data-type="noi-bat" id="type-noi-bat">Nổi bật</a></li>
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
                    <span id="keyword-filter" class="badge" data-keyword="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>" data-remove-param="<?php echo isset($_GET['keyword']) ? 'keyword='. $_GET['keyword'] : ''; ?>"></span>
					<span id="city-filter" class="badge" data-city="<?php echo isset($_GET['city']) ? '#city-'.$_GET['city'] : ''; ?>" data-remove-param="<?php echo isset($_GET['city']) ? 'city='. $_GET['city'] : ''; ?>"></span>
					<span id="category-filter" class="badge" data-category="<?php echo isset($_GET['category']) ? '#category-'.$_GET['category'] : ''; ?>" data-remove-param="<?php echo isset($_GET['category']) ? 'category='. $_GET['category'] : ''; ?>"></span>
					<span id="time-filter" class="badge" data-time="<?php echo isset($_GET['time']) ? '#time-'.$_GET['time'] : ''; ?>" data-remove-param="<?php echo isset($_GET['time']) ? 'time='. $_GET['time'] : ''; ?>"></span>
                    <span id="type-filter" class="badge" data-type="<?php echo isset($_GET['type']) ? '#type-'.$_GET['type'] : ''; ?>" data-remove-param="<?php echo isset($_GET['type']) ? 'type='. $_GET['type'] : ''; ?>"></span>						 
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
                    <div class="col-md-4 col-sm-6 pdl0 pdr15 mgb20 promotion-item">
						<div class="bi-img">
							<a href="<?php echo $promotion['link']; ?>" class="img-thumb">
							     <img src="<?php echo $promotion['image']; ?>" class="img-responsive" alt="<?php echo $promotion['name']; ?>">  
                            </a>
                            <div class="bookmark-action">
                                <a class="bookmark-item" data-itemId="<?php echo $promotion['promotion_id']; ?>" title="Lưu vào yêu thích">
                                  <i class="fa fa-heart"></i>
                                </a>
                            </div>
                            <div class="share-action">
                                <a href="javascript:fb_share('http://www.facebook.com/sharer.php?u=<?php echo $promotion['link']; ?>')" title="Chia sẻ trên facebook">
                                  <i class="fa fa-facebook"></i>
                                </a>
                            </div>
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
            console.log($('#datetimepicker12').data('date'));
            var old_param = '<?php echo isset($_GET["time"]) ? "time=".$_GET["time"]: ""; ?>';
            var new_param = 'time=' + $('#datetimepicker12').data('date');
            redirectUrl(old_param, new_param);
            //get_events_filter(filterJson,key,'start_date','>=',$('#datetimepicker12').data('date'),limit,offset);
        });
        
        if($('#keyword-filter').data('keyword') != '') {
            var keyword = $('#keyword-filter').data('keyword');
            if(keyword != ''){
                keyword = str_replace('-', ' ', keyword);
                $('#keyword-filter').text(keyword).append('<i class="fa fa-remove"></i>');
            }
        }
        if($('#city-filter').data('city') != '') {
            var citySelector = $('#city-filter').data('city');
            var activeCity = $(citySelector).text();
            $('#city-filter').text(activeCity).append('<i class="fa fa-remove"></i>');
        }
        if($('#category-filter').data('category') != '') {
            var cateSelector = $('#category-filter').data('category');
            var activeCate = $(cateSelector).text();
            $('#category-filter').text(activeCate).append('<i class="fa fa-remove"></i>');
        }
        if($('#time-filter').data('time') != '') {
            var timeSelector = $('#time-filter').data('time');
            var activeTime = $(timeSelector).text();
            if(activeTime != ''){    
                $('#time-filter').text(activeTime).append('<i class="fa fa-remove"></i>');
            }
            else{
                $('#time-filter').text(str_replace('#time-', '', timeSelector)).append('<i class="fa fa-remove"></i>');
            }
        }
        if($('#type-filter').data('type') != '') {
            var typeSelector = $('#type-filter').data('type');
            var activeType = $(typeSelector).text();
            $('#type-filter').text(activeType).append('<i class="fa fa-remove"></i>');
        }
        
        $('.badge .fa-remove').on('click', function() {
            var currentParam = $(this).parent().data('remove-param');
            console.log('currentParam= ' + currentParam);
            var currentUrl  = decodeURI(window.location.href);
            console.log('currentUrl= ' + currentUrl);
            if(currentUrl.indexOf('&'+ currentParam) !== -1){
                redirectUrl = str_replace('&'+ currentParam, '', currentUrl);
            }
            else if(currentUrl.indexOf(currentParam) !== -1){
                redirectUrl = str_replace(currentParam, '', currentUrl);
            }
            else{
                redirectUrl = 'error/not_found';
            }
            console.log('redirectUrl= ' + redirectUrl);
            window.location = redirectUrl;
        });
    });
</script>

<script type="text/javascript"><!--
$('#city_dropdown li a').on('click', function() {
    var old_param = '<?php echo isset($_GET["city"]) ? "city=".$_GET["city"]: ""; ?>';
    var new_param = 'city=' + $(this).data('city');
    redirectUrl(old_param, new_param);
});

$('#category_dropdown li a').on('click', function() {
    var old_param = '<?php echo isset($_GET["category"]) ? "category=".$_GET["category"]: ""; ?>';
    var new_param = 'category=' + $(this).data('category');
    redirectUrl(old_param, new_param);
});

$('#time_dropdown li a').on('click', function() {
    var old_param = '<?php echo isset($_GET["time"]) ? "time=".$_GET["time"]: ""; ?>';
    var new_param = 'time=' + $(this).data('time');
    redirectUrl(old_param, new_param);
});

$('#type_dropdown li a').on('click', function() {
    var old_param = '<?php echo isset($_GET["type"]) ? "type=".$_GET["type"]: ""; ?>';
    var new_param = 'type=' + $(this).data('type');
    redirectUrl(old_param, new_param);
});
//--></script>


<?php echo $footer; ?>