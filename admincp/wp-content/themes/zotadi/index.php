<?php
/**
 * The template for displaying Home page.
 *
 * @file      index.php
 * @package   VnUp news
 * @author    Chinh Tran
 * 
 **/
?>
<?php get_header(); ?>

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
                    <form class="clearfix foody-form" id="get-started" action="c/foody/search" method="get" role="search">
                        
                        <div class="col-sm-6 no-padding-left no-padding-right what">
                             <span class="ico"></span>
                            <input placeholder="Địa điểm ăn uống, giải trí.." value="<?php echo esc_attr( get_search_query() ); ?>" name="place" id="search-input" type="text" maxlength="85" />
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
                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/e40960514831cb9b74c552d69eceee0f_1418387628_l.jpg');">
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
                        <div class="collection-box-bg lazy" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/dc347fcba38a39000ab7ab50f0f222ad_1424059541_l.jpg');">
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
                        <div class="collection-box-bg lazy" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/fb1dfaf63322c68558b27ed7e5dc6e9c_1418401086_l.jpg');">
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
                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/0707137915a22b40b4d5e8274f47d791_1419918315_l.jpg');">
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
                        <div class="collection-box-bg lazy" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/95d517d48c52188721ddfcf69d7d34f5_1419406534_l.jpg');">
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
                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/4c2b30d63f25fc4d52a220890442421a_1421300685_l.jpg'); ">
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
                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/b762edbc2f8303b0ffdbdaa2ed6287a6_1424180016_l.jpg'); ">
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
                        <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/d5e7778988c8df486127982a097b7ba5_1418401323_l.jpg'); ">
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
                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/e359a2a24366b32acfe905ee084f4206_1418629602_l.jpg'); ">
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
                        <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/81fbcaec4c83f321c854a0fdc9dcfdfd_1422002949_l.jpg'); ">
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
                        <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/6a5f59d28b2e695b15e7029643e4ca27_1418391059_l.jpg'); ">
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
                        <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/7d78f516cf561c362481f1d7a1fc7464_1418393872_l.jpg'); ">
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
                    
                     <!-- The Loop -->

                        <?php   
                            $args = array(
                                'posts_per_page' => 16
                            );
                            $the_query = new WP_Query($args);
                            if ( $the_query->have_posts() ) {
                                	
                                	while ( $the_query->have_posts() ) {
                                		$the_query->the_post();
                                        $user_info = get_userdata(get_the_author_ID()); 
                                        //var_dump($user_info); exit;
                                        $full_name = $user_info->first_name.' '.$user_info->last_name;
                                        $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                                        $avatar_url =  site_url( $user_info->cus_avatar );
                                        //echo $avatar_url; exit;
                                        ?>
                       
                                        <div class="col-xs-12 col-sm-4 col-md-3 hourlie-tile-container">
                                            <div class="clearfix hourlie-tile js-listing-tile  with-member-info">
                                                <span data-res-id="302636"  data-entity-id="302636" data-entity-type="WISHLIST" data-in-wtt="false" class="bookmark fpph-bookmark login-require" title="Lưu vào"></span>
                                                <div class="image-container">
                                                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="img-grid">
                                                         
                                                        <img width="253" height="195" src="<?php echo c_crop_image_resize($url, 253, 195, true); ?> " class="attachment-253x195 wp-post-image" alt="Capture"/>       
                                                        <span class="circle">5,0</span>
                                                    </a>
                                                </div>
                                                <div class="title-container">
                                                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="color-hourlie js-paragraph-crop" style="word-wrap: break-word;font-weight: bold;">
                                                        <?php the_title(); ?>           
                                                    </a>
                                                </div>
                                                <div class="profile-container stretch clearfix">
                                                    <div class="col-xs-8 no-padding-right">
                                                        
                                                        <div class="user-info pull-left">
                                                            <span class="user-country clearfix crop">Nhà hàng</span>
                                                            <a class="clearfix user-name crop" href="#" title=" 268 Lý thường kiệt, P14, Q.10" ><i class="fpph-location" style="font-size: 11px; margin-left: -1px;"></i> 268 Lý thường kiệt, P14, Q.10</a>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-xs-4 price-container price-tag text-right" style="font-size: 12px;line-height: 2.5;">
                                                        <span>30</span><sup> votes</sup>              
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <?php } } else { ?>
                                <p><?php _e('Không có bài viết hiển thị..'); ?></p>
                        
                            <?php } ?>
                        
                        <!-- End Loop -->
                   
                    </div>
   
                </div>    
            </div>
        </section>
    </div>
</div>

<!--style>
#navigation_toolbox{
    display: none ;
    position: fixed;
    top: 0;
    left: 0;
    width: 64px;
    height: 100%;
    background-color: #3a3847;
    box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0,0,0,0.1);
    font-size: 0.9em;
    z-index: 99;
}
#navigation_toolbox:hover{
    width: 200px;
}
#navigation_toolbox ul{
    list-style: none;
    padding: 10px 2px;
}
#navigation_toolbox li{
    padding-left: 20px;
    margin-right: 10px;
    border-bottom: 1px dotted #434252;
}
#navigation_toolbox .sub-menu{
    display: none;
    position: absolute;
    right: 152px;
    margin-top: -34px;
    background: #fff;
    box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0,0,0,0.1);
    border-left: none;
    padding: 0 20px;
}
#navigation_toolbox .sub-menu li a{
    border-bottom: none;
}
#navigation_toolbox li a {
    display: block;
    width: 100%;
    height: 100%;
    padding: 7px 0;
    color: #e3e3e3;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    font-size: 12px;
    text-align: left;
    font-weight: bold;
    
}
#navigation_toolbox li a:hover{
	color: #fff;
}
#navigation_toolbox li:last-child a{
   border-bottom: none; 
}
#navigation_toolbox li:hover > .sub-menu{
    display: block;
} 
#navigation_toolbox li .sub-menu li a{
    color: #5F5A5A !important;
}
#navigation_toolbox li .sub-menu li a:hover {
    color: #E66E46 !important;
}
#navigation_toolbox #menu-category-menu .current-menu-item{
    background-color: #E66E46;
    color: #fff;
}
#navigation_toolbox #menu-category-menu .current-menu-item a{
    color: #fff;
}
#navigation_toolbox .lw-section-icon{
    margin-right: 10px;
}
</style>
<div id="navigation_toolbox" class="hidden-xs hidden-sm">
    
    <ul id="menu-category-menu" class="menu-list">
        <li id="menu-item-367" class="menu-item">
            <a href="http://localhost/zotadi/chuyen-muc/goc-nhin-vi-mo"><i class="lw-section-icon icon-11"></i>Ative life </a>
        </li>
        <li id="menu-item-368" class="menu-item">
            <a href="http://localhost/zotadi/chuyen-muc/khoi-nghiep"><i class="lw-section-icon icon-01"></i>Nhà hàng </a>
        
        </li>
        <li id="menu-item-373" class="menu-item">
            <a href="http://localhost/zotadi/chuyen-muc/van-de-va-giai-phap"><i class="lw-section-icon icon-02"></i>Khách sạn </a>
        </li>
        <li id="menu-item-382" class="menu-item">
            <a href="http://localhost/zotadi/chuyen-muc/dau-tu"><i class="lw-section-icon icon-03"></i>Giải trí </a>
        
        </li>
        <li id="menu-item-390" class="menu-item">
            <a href="http://localhost/zotadi/chuyen-muc/kinh-doanh"><i class="lw-section-icon icon-04"></i>Cuộc sống về đêm </a>
        </li>
        <li id="menu-item-408" class="menu-item">
            <a href="http://localhost/zotadi/chuyen-muc/nhin-ra-the-gioi"><i class="lw-section-icon icon-05"></i>Nghệ thuật</a>
        </li>
        <li id="menu-item-397" class="menu-item">
            <a href="http://localhost/zotadi/chuyen-muc/lich-su-cuoc-song"><i class="lw-section-icon icon-07"></i>Du lịch</a>
        </li>
        <li id="menu-item-400" class="menu-item">
            <a href="http://localhost/zotadi/chuyen-muc/tam-linh-va-triet-hoc"><i class="lw-section-icon icon-07"></i>Sức khỏe và làm đẹp</a>
        </li>
        <li id="menu-item-415" class="menu-item">
            <a href="http://localhost/zotadi/chuyen-muc/sach-hay"><i class="lw-section-icon icon-09"></i>Shopping</a>
        </li>
    </ul>
 </div>
 
 <script>
 
    $(window).scroll(function() {

     if ($(this).scrollTop()> 200)
     { 
        $('#navigation_toolbox').show();
        $('#secondary-bar').addClass('menu-fixed');
     }
     else
     {
      $('#navigation_toolbox').hide();
      $('#secondary-bar').removeClass('menu-fixed');
     }
 });
 </script-->
 <!--form class="clearfix appointment-form" id="get-started" action="<?php echo esc_url( home_url( '/' ) ); ?>c/appoinment/search" method="get" role="search">
    <div class="col-sm-6 no-padding-left no-padding-right what">
        <span class="ico"></span>
        <input placeholder="Tìm địa điểm dịch vụ.." value="<?php echo esc_attr( get_search_query() ); ?>" name="appointment" id="search-input" type="text" maxlength="85" />
    </div>
    <div class="col-sm-4 no-padding-left no-padding-right where">
        <span class="ico"></span>
        <input placeholder="Ho Chi Minh" data-hook="destination" name="destination" id="destination" type="text"/>
                           
    </div>
    <div class="col-sm-2 no-padding-left no-padding-right">
        <input class="btn call-to-action btn-inverted" type="submit"  value="Tìm kiếm ›" />
    </div>
 </form>
 <form class="clearfix event-form" id="get-started" action="<?php echo esc_url( home_url( '/' ) ); ?>c/event/search" method="get" role="search">
    <div class="col-sm-6 no-padding-left no-padding-right what">
        <span class="ico"></span>
        <input placeholder="Tìm sự kiện, khóa học.." value="<?php echo esc_attr( get_search_query() ); ?>" name="event" id="search-input" type="text" maxlength="85" />
    </div>
    <div class="col-sm-4 no-padding-left no-padding-right where">
        <span class="ico"></span>
        <input placeholder="Ho Chi Minh" data-hook="destination" name="destination" id="destination" type="text"/>
    </div>
    <div class="col-sm-2 no-padding-left no-padding-right">
        <input class="btn call-to-action btn-inverted" type="submit"  value="Tìm kiếm ›" />
    </div>
 </form-->
<?php get_footer();?>