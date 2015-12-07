<?php
/**
 * The template for displaying Home page.
 *
 * @file      tpl_home.php
 * @package   bopanda site
 * @author    Chinh Tran
 * 
 **/
?>


<div class="container container-top"></div>

<!-- BEGIN: Home Page -->
<div id="home-page" class="home-container clearfix fullheight">
    <!-- BEGIN: Carousel section -->
    <section class="section-home section-carousel clearfix">
        <div id="home-slider" class="carousel slide do-fade" data-ride="carousel">
            <!-- Indicators -->
           
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill slide-01"></div>
                    <div class="carousel-caption">
                        <div class="caption-header">Tìm địa điểm ăn uống, giải trí</div>
                        <ul class="caption-list">
                            <li class="foody-tab active">Foody</li>
                            <li class="appointment-tab" >Book lịch hẹn</li>
                            <li class="event-tab">Sự kiện</li>
                        </ul>           
                    </div>
                </div>
                <div class="item">
                    <div class="fill slide-02"></div>
                    <div class="carousel-caption">
                        <div class="caption-header">Tìm địa điểm ăn uống, giải trí</div>
                        <ul class="caption-list">
                            <li class="foody-tab active">Foody</li>
                            <li class="appointment-tab">Book lịch hẹn</li>
                            <li class="event-tab">Sự kiện</li>
                        </ul>             
                    </div>
                </div>
                <div class="item">
                    <div class="fill slide-03"></div>
                    <div class="carousel-caption">
                        <div class="caption-header">Tìm địa điểm ăn uống, giải trí</div>
                        <ul class="caption-list">
                            <li class="foody-tab active">Foody</li>
                            <li class="appointment-tab">Book lịch hẹn</li>
                            <li class="event-tab">Sự kiện</li>
                        </ul>            
                    </div>
                </div>
            </div>
    
        </div>
        <div class="get-started-form">
            <div class="container clearfix">
                <div id="home-form-wrapper" class="col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 no-padding-left no-padding-right clearfix">
                    <form class="clearfix foody-form" id="get-started" action="<?php echo base_url( 'foody/search'); ?>" method="get" role="search">
                        
                        <div class="col-sm-6 no-padding-left no-padding-right what">
                             <span class="ico"></span>
                            <input placeholder="Địa điểm ăn uống, giải trí.." value="" name="place" id="search-input" type="text" maxlength="85" />
                        </div>
                        <div class="col-sm-4 no-padding-left no-padding-right where">
                            <span class="ico"></span>
                            <input placeholder="Ho Chi Minh" data-hook="destination" name="destination" id="destination" type="text"/>
                           
                        </div>
                        <div class="col-sm-2 no-padding-left no-padding-right">
                            <input class="btn call-to-action btn-inverted" type="submit"  value="Tìm kiếm ›" />
                        </div>
                    </form>  
                      
                </div>
            </div>
        </div>
    </section>
    <!-- END: Carousel section -->
    
</div>
    <div id="colection-wrapper" class="colection-wrapper">
      <div class="container container">
          <div class="col-md-12 col-lg-12 ta-center">
            <div class="hp-collection hp-tour-in">
              <div class="section-title container section-title-thin ta-center">Bộ sưu tập bài viết nổi bật</div>
              <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                  <a href="#" title="Góp ý chính sách cho startup">
                    <h4 class="collections-title" > 
                        <span class="collections-title_outlets">0 Bài viết</span> 
                        <span class="collections-title_text">Góp ý chính sách cho startup</span> 
                    </h4>
                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/e40960514831cb9b74c552d69eceee0f_1418387628_l.jpg');">
                        <div class="collection-overlay"></div>
                    </div>
                    </a> 
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                    <a href="#" title="Tâm sự của đàn anh doanh nhân đi trước">
                        <h4 class="collections-title"> 
                            <span class="collections-title_outlets">0 Bài viết</span> 
                            <span class="collections-title_text">Tâm sự của đàn anh doanh nhân đi trước</span> 
                        </h4>
                        <div class="collection-box-bg lazy" style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/dc347fcba38a39000ab7ab50f0f222ad_1424059541_l.jpg');">
                            <div class="collection-overlay"></div>
                        </div>
                    </a> 
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                    <a href="#" title="Quốc gia khởi nghiệp">
                        <h4 class="collections-title" > 
                            <span class="collections-title_outlets">0 Bài viết</span> 
                            <span class="collections-title_text">Quốc gia khởi nghiệp</span> 
                        </h4>
                        <div class="collection-box-bg lazy" style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/fb1dfaf63322c68558b27ed7e5dc6e9c_1418401086_l.jpg');">
                            <div class="collection-overlay"></div>
                        </div>
                    </a> 
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                    <a href="#" title="Kinh doanh quán cafe">
                    <h4 class="collections-title" > 
                        <span class="collections-title_outlets">0 Bài viết</span> 
                        <span class="collections-title_text">Khởi nghiệp quán cafe</span> 
                    </h4>
                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/0707137915a22b40b4d5e8274f47d791_1419918315_l.jpg');">
                        <div class="collection-overlay"></div>
                    </div>
                    </a> </div>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                    <a href="#" title="Startup về nông nghiệp">
                        <h4 class="collections-title"> 
                            <span class="collections-title_outlets">0 Bài viết</span> 
                            <span class="collections-title_text">Startup về nông nghiệp</span> 
                        </h4>
                        <div class="collection-box-bg lazy" style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/95d517d48c52188721ddfcf69d7d34f5_1419406534_l.jpg');">
                            <div class="collection-overlay"></div>
                        </div>
                    </a> 
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                    <a href="#" title="Khởi nghiệp nhà hàng">
                    <h4 class="collections-title" > 
                        <span class="collections-title_outlets">0 Bài viết</span> 
                        <span class="collections-title_text">Khởi nghiệp nhà hàng</span> 
                    </h4>
                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/4c2b30d63f25fc4d52a220890442421a_1421300685_l.jpg'); ">
                    <div class="collection-overlay"></div>
                  </div>
                    </a> </div>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                    <a href="#" title="Startup về du lịch">
                    <h4 class="collections-title" > 
                        <span class="collections-title_outlets">0 Bài viết</span> 
                        <span class="collections-title_text">Startup về du lịch</span> 
                    </h4>
                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/b762edbc2f8303b0ffdbdaa2ed6287a6_1424180016_l.jpg'); ">
                    <div class="collection-overlay"></div>
                  </div>
                    </a> </div>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                    <a href="#" title="Startup về media">
                        <h4 class="collections-title" > 
                            <span class="collections-title_outlets">0 Bài viết</span> 
                            <span class="collections-title_text">Startup về media</span> 
                        </h4>
                        <div class="collection-box-bg lazy"  style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/d5e7778988c8df486127982a097b7ba5_1418401323_l.jpg'); ">
                            <div class="collection-overlay"></div>
                        </div>
                    </a> 
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                    <a href="#" title="Internet of things">
                    <h4 class="collections-title" > 
                        <span class="collections-title_outlets">0 Bài viết</span> 
                        <span class="collections-title_text">Internet of things</span> 
                    </h4>
                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/e359a2a24366b32acfe905ee084f4206_1418629602_l.jpg'); ">
                        <div class="collection-overlay"></div>
                    </div>
                    </a> 
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                    <a href="#" title="Lý do 55 000 doanh nghiệp phá sản hàng năm">
                        <h4 class="collections-title"> 
                            <span class="collections-title_outlets">0 Bài viết</span> 
                            <span class="collections-title_text">Lý do 55 000 doanh nghiệp phá sản hàng năm</span> 
                        </h4>
                        <div class="collection-box-bg lazy"  style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/81fbcaec4c83f321c854a0fdc9dcfdfd_1422002949_l.jpg'); ">
                            <div class="collection-overlay"></div>
                        </div>
                    </a> 
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                    <a href="#" title="Gửi đến giới trẻ">
                        <h4 class="collections-title" > 
                            <span class="collections-title_outlets">0 Bài viết</span> 
                            <span class="collections-title_text">Gửi đến giới trẻ</span> 
                        </h4>
                        <div class="collection-box-bg lazy"  style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/6a5f59d28b2e695b15e7029643e4ca27_1418391059_l.jpg'); ">
                            <div class="collection-overlay"></div>
                        </div>
                    </a> 
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 collection-item">
                  <div class="collection-box collection-box-snippet"> 
                    <a href="#" title="Kinh doanh bền vững">
                        <h4 class="collections-title" > 
                            <span class="collections-title_outlets">0 Bài viết</span> 
                            <span class="collections-title_text">Kinh doanh bền vững</span> 
                        </h4>
                        <div class="collection-box-bg lazy"  style="background-image: url('<?php echo config_item('asset_url'); ?>default/images/7d78f516cf561c362481f1d7a1fc7464_1418393872_l.jpg'); ">
                            <div class="collection-overlay"></div>
                        </div>
                    </a> 
                  </div>
                  <div class="clear"></div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-12 ta-center mtop"> 
                <a class="btn call-to-action btn-inverted hp-collection-load" href="#">Xem thêm</a> 
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<div id="main-container" class="wrap-container container clearfix offcanvas offcanvas-left with-left-sidebar">
    
    <div class="main-content controller-hourlie action-list" style="width: 100%;">
        <section class="listings-container hourlies-listing-container" id="hourlies-listing">
            <div class="bg-fill clearfix options-container">
                <header class="clear">
                    <h1 id="hourlies-listing-heading">
                        Địa điểm nổi bật
                    </h1>
                </header>
                        
            </div>
            <div class="results grid" id="hourlies-listing-results">
                <div id="hourlies-listing-listview" class="list-view">
                    <div class="items clearfix items-results ">
                        <div class="col-xs-12 col-sm-4 col-md-3 hourlie-tile-container">
                            <div class="clearfix hourlie-tile js-listing-tile  with-member-info">
                                <span data-res-id="302636" data-entity-id="302636" data-entity-type="WISHLIST" data-in-wtt="false" class="bookmark fpph-bookmark login-require" title="Lưu vào"></span>
                                    <div class="image-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="img-grid">
                                            <img width="253" height="195" src="http://localhost/zotadi/wp-content/uploads/2015/01/mbutton_hi_2x-253x195.jpg " class="attachment-253x195 wp-post-image" alt="Capture"/>       
                                            <span class="circle">5,0</span>
                                        </a>
                                    </div>
                                    <div class="title-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="color-hourlie js-paragraph-crop" style="word-wrap: break-word;font-weight: bold;">
                                            Minh bạch để giành “trận địa thông tin”           
                                        </a>
                                    </div>
                                    <div class="profile-container stretch clearfix">
                                        <div class="col-xs-8 no-padding-right">
                                            <div class="user-info pull-left">
                                                <span class="user-country clearfix crop">Nhà hàng</span>
                                                <a class="clearfix user-name crop" href="#" title=" 268 Lý thường kiệt, P14, Q.10"><i class="fpph-location" style="font-size: 11px; margin-left: -1px;"></i> 268 Lý thường kiệt, P14, Q.10</a>      
                                            </div>
                                                        
                                        </div>
                                        <div class="col-xs-4 price-container price-tag text-right" style="font-size: 12px;line-height: 2.5;">
                                            <span>30</span><sup> votes</sup>              
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hourlie-tile-container">
                            <div class="clearfix hourlie-tile js-listing-tile  with-member-info">
                                <span data-res-id="302636" data-entity-id="302636" data-entity-type="WISHLIST" data-in-wtt="false" class="bookmark fpph-bookmark login-require" title="Lưu vào"></span>
                                    <div class="image-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="img-grid">
                                            <img width="253" height="195" src="http://localhost/zotadi/wp-content/uploads/2015/01/mbutton_hi_2x-253x195.jpg " class="attachment-253x195 wp-post-image" alt="Capture"/>       
                                            <span class="circle">5,0</span>
                                        </a>
                                    </div>
                                    <div class="title-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="color-hourlie js-paragraph-crop" style="word-wrap: break-word;font-weight: bold;">
                                            Minh bạch để giành “trận địa thông tin”           
                                        </a>
                                    </div>
                                    <div class="profile-container stretch clearfix">
                                        <div class="col-xs-8 no-padding-right">
                                            <div class="user-info pull-left">
                                                <span class="user-country clearfix crop">Nhà hàng</span>
                                                <a class="clearfix user-name crop" href="#" title=" 268 Lý thường kiệt, P14, Q.10"><i class="fpph-location" style="font-size: 11px; margin-left: -1px;"></i> 268 Lý thường kiệt, P14, Q.10</a>      
                                            </div>
                                                        
                                        </div>
                                        <div class="col-xs-4 price-container price-tag text-right" style="font-size: 12px;line-height: 2.5;">
                                            <span>30</span><sup> votes</sup>              
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hourlie-tile-container">
                            <div class="clearfix hourlie-tile js-listing-tile  with-member-info">
                                <span data-res-id="302636" data-entity-id="302636" data-entity-type="WISHLIST" data-in-wtt="false" class="bookmark fpph-bookmark login-require" title="Lưu vào"></span>
                                    <div class="image-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="img-grid">
                                            <img width="253" height="195" src="http://localhost/zotadi/wp-content/uploads/2015/01/mbutton_hi_2x-253x195.jpg " class="attachment-253x195 wp-post-image" alt="Capture"/>       
                                            <span class="circle">5,0</span>
                                        </a>
                                    </div>
                                    <div class="title-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="color-hourlie js-paragraph-crop" style="word-wrap: break-word;font-weight: bold;">
                                            Minh bạch để giành “trận địa thông tin”           
                                        </a>
                                    </div>
                                    <div class="profile-container stretch clearfix">
                                        <div class="col-xs-8 no-padding-right">
                                            <div class="user-info pull-left">
                                                <span class="user-country clearfix crop">Nhà hàng</span>
                                                <a class="clearfix user-name crop" href="#" title=" 268 Lý thường kiệt, P14, Q.10"><i class="fpph-location" style="font-size: 11px; margin-left: -1px;"></i> 268 Lý thường kiệt, P14, Q.10</a>      
                                            </div>
                                                        
                                        </div>
                                        <div class="col-xs-4 price-container price-tag text-right" style="font-size: 12px;line-height: 2.5;">
                                            <span>30</span><sup> votes</sup>              
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hourlie-tile-container">
                            <div class="clearfix hourlie-tile js-listing-tile  with-member-info">
                                <span data-res-id="302636" data-entity-id="302636" data-entity-type="WISHLIST" data-in-wtt="false" class="bookmark fpph-bookmark login-require" title="Lưu vào"></span>
                                    <div class="image-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="img-grid">
                                            <img width="253" height="195" src="http://localhost/zotadi/wp-content/uploads/2015/01/mbutton_hi_2x-253x195.jpg " class="attachment-253x195 wp-post-image" alt="Capture"/>       
                                            <span class="circle">5,0</span>
                                        </a>
                                    </div>
                                    <div class="title-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="color-hourlie js-paragraph-crop" style="word-wrap: break-word;font-weight: bold;">
                                            Minh bạch để giành “trận địa thông tin”           
                                        </a>
                                    </div>
                                    <div class="profile-container stretch clearfix">
                                        <div class="col-xs-8 no-padding-right">
                                            <div class="user-info pull-left">
                                                <span class="user-country clearfix crop">Nhà hàng</span>
                                                <a class="clearfix user-name crop" href="#" title=" 268 Lý thường kiệt, P14, Q.10"><i class="fpph-location" style="font-size: 11px; margin-left: -1px;"></i> 268 Lý thường kiệt, P14, Q.10</a>      
                                            </div>
                                                        
                                        </div>
                                        <div class="col-xs-4 price-container price-tag text-right" style="font-size: 12px;line-height: 2.5;">
                                            <span>30</span><sup> votes</sup>              
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hourlie-tile-container">
                            <div class="clearfix hourlie-tile js-listing-tile  with-member-info">
                                <span data-res-id="302636" data-entity-id="302636" data-entity-type="WISHLIST" data-in-wtt="false" class="bookmark fpph-bookmark login-require" title="Lưu vào"></span>
                                    <div class="image-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="img-grid">
                                            <img width="253" height="195" src="http://localhost/zotadi/wp-content/uploads/2015/01/mbutton_hi_2x-253x195.jpg " class="attachment-253x195 wp-post-image" alt="Capture"/>       
                                            <span class="circle">5,0</span>
                                        </a>
                                    </div>
                                    <div class="title-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="color-hourlie js-paragraph-crop" style="word-wrap: break-word;font-weight: bold;">
                                            Minh bạch để giành “trận địa thông tin”           
                                        </a>
                                    </div>
                                    <div class="profile-container stretch clearfix">
                                        <div class="col-xs-8 no-padding-right">
                                            <div class="user-info pull-left">
                                                <span class="user-country clearfix crop">Nhà hàng</span>
                                                <a class="clearfix user-name crop" href="#" title=" 268 Lý thường kiệt, P14, Q.10"><i class="fpph-location" style="font-size: 11px; margin-left: -1px;"></i> 268 Lý thường kiệt, P14, Q.10</a>      
                                            </div>
                                                        
                                        </div>
                                        <div class="col-xs-4 price-container price-tag text-right" style="font-size: 12px;line-height: 2.5;">
                                            <span>30</span><sup> votes</sup>              
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hourlie-tile-container">
                            <div class="clearfix hourlie-tile js-listing-tile  with-member-info">
                                <span data-res-id="302636" data-entity-id="302636" data-entity-type="WISHLIST" data-in-wtt="false" class="bookmark fpph-bookmark login-require" title="Lưu vào"></span>
                                    <div class="image-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="img-grid">
                                            <img width="253" height="195" src="http://localhost/zotadi/wp-content/uploads/2015/01/mbutton_hi_2x-253x195.jpg " class="attachment-253x195 wp-post-image" alt="Capture"/>       
                                            <span class="circle">5,0</span>
                                        </a>
                                    </div>
                                    <div class="title-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="color-hourlie js-paragraph-crop" style="word-wrap: break-word;font-weight: bold;">
                                            Minh bạch để giành “trận địa thông tin”           
                                        </a>
                                    </div>
                                    <div class="profile-container stretch clearfix">
                                        <div class="col-xs-8 no-padding-right">
                                            <div class="user-info pull-left">
                                                <span class="user-country clearfix crop">Nhà hàng</span>
                                                <a class="clearfix user-name crop" href="#" title=" 268 Lý thường kiệt, P14, Q.10"><i class="fpph-location" style="font-size: 11px; margin-left: -1px;"></i> 268 Lý thường kiệt, P14, Q.10</a>      
                                            </div>
                                                        
                                        </div>
                                        <div class="col-xs-4 price-container price-tag text-right" style="font-size: 12px;line-height: 2.5;">
                                            <span>30</span><sup> votes</sup>              
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hourlie-tile-container">
                            <div class="clearfix hourlie-tile js-listing-tile  with-member-info">
                                <span data-res-id="302636" data-entity-id="302636" data-entity-type="WISHLIST" data-in-wtt="false" class="bookmark fpph-bookmark login-require" title="Lưu vào"></span>
                                    <div class="image-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="img-grid">
                                            <img width="253" height="195" src="http://localhost/zotadi/wp-content/uploads/2015/01/mbutton_hi_2x-253x195.jpg " class="attachment-253x195 wp-post-image" alt="Capture"/>       
                                            <span class="circle">5,0</span>
                                        </a>
                                    </div>
                                    <div class="title-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="color-hourlie js-paragraph-crop" style="word-wrap: break-word;font-weight: bold;">
                                            Minh bạch để giành “trận địa thông tin”           
                                        </a>
                                    </div>
                                    <div class="profile-container stretch clearfix">
                                        <div class="col-xs-8 no-padding-right">
                                            <div class="user-info pull-left">
                                                <span class="user-country clearfix crop">Nhà hàng</span>
                                                <a class="clearfix user-name crop" href="#" title=" 268 Lý thường kiệt, P14, Q.10"><i class="fpph-location" style="font-size: 11px; margin-left: -1px;"></i> 268 Lý thường kiệt, P14, Q.10</a>      
                                            </div>
                                                        
                                        </div>
                                        <div class="col-xs-4 price-container price-tag text-right" style="font-size: 12px;line-height: 2.5;">
                                            <span>30</span><sup> votes</sup>              
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hourlie-tile-container">
                            <div class="clearfix hourlie-tile js-listing-tile  with-member-info">
                                <span data-res-id="302636" data-entity-id="302636" data-entity-type="WISHLIST" data-in-wtt="false" class="bookmark fpph-bookmark login-require" title="Lưu vào"></span>
                                    <div class="image-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="img-grid">
                                            <img width="253" height="195" src="http://localhost/zotadi/wp-content/uploads/2015/01/mbutton_hi_2x-253x195.jpg " class="attachment-253x195 wp-post-image" alt="Capture"/>       
                                            <span class="circle">5,0</span>
                                        </a>
                                    </div>
                                    <div class="title-container">
                                        <a href="http://localhost/zotadi/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html" title="Minh bạch để giành “trận địa thông tin”" class="color-hourlie js-paragraph-crop" style="word-wrap: break-word;font-weight: bold;">
                                            Minh bạch để giành “trận địa thông tin”           
                                        </a>
                                    </div>
                                    <div class="profile-container stretch clearfix">
                                        <div class="col-xs-8 no-padding-right">
                                            <div class="user-info pull-left">
                                                <span class="user-country clearfix crop">Nhà hàng</span>
                                                <a class="clearfix user-name crop" href="#" title=" 268 Lý thường kiệt, P14, Q.10"><i class="fpph-location" style="font-size: 11px; margin-left: -1px;"></i> 268 Lý thường kiệt, P14, Q.10</a>      
                                            </div>
                                                        
                                        </div>
                                        <div class="col-xs-4 price-container price-tag text-right" style="font-size: 12px;line-height: 2.5;">
                                            <span>30</span><sup> votes</sup>              
                                        </div>
                                    </div>
                            </div>
                        </div>
                   
                    </div>
   
                </div>    
            </div>
        </section>
    </div>
</div>
