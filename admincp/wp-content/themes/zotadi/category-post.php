<?php
/**
 * The template for displaying category page.
 *
 * @file      category.php
 * @package   VnEconomist news
 * @author    Chinh Tran
 * 
 **/
?>
<?php get_header();?>
<?php  $cat_ID = get_query_var('cat');  ?>

<div class="container container-top"></div>

<div id="main-container" class="wrap-container container clearfix offcanvas offcanvas-left with-left-sidebar">
	<aside class="left-column sidebar-job-list offcanvas-sidebar">
        <section class="clearfix job-listing-sidebar listings-sidebar" id="listing-sidebar">
            <div class="clearfix gutter-top gutter-bottom visible-xs visible-sm">
                <a href="#" class="js-hide-offcanvas pull-right discreet jobs-popular-tags">
                    <i class="fa fa-times fa-2x"></i>
                </a>
            </div>
            <form id="job-listing-search-form" action="#" method="POST">    
                <div class="clearfix search-container" id="job-listing-search">
                    <div class="input-group clearfix ">
                        <input id="keyword" placeholder="Search Jobs..." class="form-control" type="text" value="" name="keyword">    <span class="input-group-btn">
                            <button type="button" class="btn btn-default js-reset-form" style="display: none;">
                                <i class="fa fa-times-circle"></i>
                            </button>
                            <button type="submit" class="btn btn-default js-submit-search">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </form>   
            <br class="clear"/>
            <div class="sidebar-box gutter-top">
                <div class="hide" style="display: none">
                    <a href="#"  class="action-signup-show save-search call-to-action pull-right" >
                    Save</a>
                </div>
                <div class="sidebar-box prepend-top saved-searches">
                    <div class="clearfix">
                        <h2 class="bubble dark"> Saved Searches </h2>
                        <span class="pull-right">
                            <i class="fa fa-question-circle color-info"></i>
                        </span>
                    </div>
                    <div class="clearfix">
                        <ul class="categories">
                            <li class="clearfix current-search">
                                <a href="#" class="right call-to-action" >Save</a>
                                Current Search            
                            </li>
                        </ul>
                
                        <center id="no-saved-searches" class="clearfix">
                            You haven't created any<br/> saved searches yet            
                            <div class="clearfix gutter-top"></div>
                        </center>
                
                    </div>
                </div>
        
            </div>
            <br class="clear"/>
            <div class="sidebar-box" data-hook="filters">
                <h3 class="bubble">Experience Level</h3>
                <hr/>
                <div class="filter-options-container">
                    <ul class="sidebar-filter-options clearfix">
                        <li>
                            <input class="pph-custom-input" value="1" checked="checked" name="experienceLevel" id="experience-level-1" type="checkbox"><label class="crop" for="experience-level-1">Entry Level ($)<span data-tooltip-content="Buyers looking for Freelancers with lower rates and less experience" data-tooltip-style="info" data-tooltip-title="Entry Level"><i class="fa fa-question-circle color-info gutter-left"></i></span></label><span>1,062</span>                
                        </li>
                        <li>
                            <input class="pph-custom-input" value="2" checked="checked" name="experienceLevel" id="experience-level-2" type="checkbox"><label class="crop" for="experience-level-2">Intermediate ($$)<span data-tooltip-content="Buyers looking for Freelancers with average rates and experience" data-tooltip-style="info" data-tooltip-title="Intermediate"><i class="fa fa-question-circle color-info gutter-left"></i></span></label><span>3,772</span>                
                        </li>
                        <li>
                            <input class="pph-custom-input" value="3" checked="checked" name="experienceLevel" id="experience-level-3" type="checkbox"><label class="crop" for="experience-level-3">Expert ($$$)<span data-tooltip-content="Buyers looking for Freelancers with higher rates and more experience" data-tooltip-style="info" data-tooltip-title="Expert"><i class="fa fa-question-circle color-info gutter-left"></i></span></label><span>1,440</span>                
                        </li>
                    </ul>
                </div>
            </div>    
            <br class="clear"/>
            <div class="clearfix" data-hook="filters">
                <h3>
                    <i class="fpph fpph-location color-pph"></i>
                    Location    
                </h3>
                <hr/>
                <div class="filter-options-container">
                    <ul class="sidebar-filter-options clearfix">
                        <li>
                            <input class="pph-custom-input" value="all" name="locationFilter" id="location-filter-all" checked="checked" type="radio"/>
                            <label class="crop" for="location-filter-all">All Jobs</label><span>6,274</span>            
                        </li>
                        <li>
                            <input class="pph-custom-input" value="remote" name="locationFilter" id="location-filter-remote" type="radio"/>
                            <label class="crop" for="location-filter-remote">Remote Jobs only</label><span>6,177</span>            
                        </li>
                        <li>
                            <input class="pph-custom-input" value="onsite" name="locationFilter" id="location-filter-onsite" type="radio"/>
                            <label class="crop" for="location-filter-onsite">On-site Jobs near me</label><span>0</span>            
                        </li>
                    </ul>
                </div>
            </div>    
            <br class="clear"/>
            <div class="freelancers-tags-tree listings-category-tree" data-hook="filters">
                <h3>
                    <i class="fpph-categories color-pph"></i>
                    Categories        
                </h3>
                <hr/>
                <ul class="category-tree sidebar-filter-options tree-node depth-0 last-level">
                    <li class="depth-1  selected last-level">
                        <a href="#">All Categories<span class="level-count">6,262</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Design<span class="level-count">1,556</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Web Development<span class="level-count">1,356</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Video, Photo &amp; Audio<span class="level-count">507</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Writing<span class="level-count">476</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Business Support<span class="level-count">465</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Software Development<span class="level-count">440</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Marketing &amp; PR<span class="level-count">396</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Admin<span class="level-count">215</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Mobile<span class="level-count">198</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Social Media<span class="level-count">180</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Search Marketing<span class="level-count">178</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Translation<span class="level-count">127</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Creative Arts<span class="level-count">95</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Tutorials<span class="level-count">39</span></a>
                    </li>
                    <li class="depth-1  last-level">
                        <a href="#">Extraordinary<span class="level-count">34</span></a>
                    </li>
                </ul>    
            </div>
            <div class="sidebar-box gutter-top" data-hook="filters">
                <h3 class="bubble">Filters</h3>
                <hr/>
                <div class="filter-options-container js-filters-options">
                    <ul class="sidebar-filter-options">
                        <li>
                            <input class="pph-custom-input js-filtering-option" value="all" id="filter-all" data-filter="all" checked="checked" type="radio" name="filter"/>
                            <label class="crop" for="filter-all">All Jobs</label><span>7,077</span>
                        </li>
                        <li>
                            <input class="pph-custom-input js-filtering-option" value="urgent" id="filter-urgent" data-filter="urgent" type="radio" name="filter"/>
                            <label class="crop" for="filter-urgent">Urgent</label><span>258</span>
                        </li>
                        <li>
                            <input class="pph-custom-input js-filtering-option" value="no-proposals" id="filter-no-proposals" data-filter="no-proposals" type="radio" name="filter"/>
                            <label class="crop" for="filter-no-proposals">With no Proposals</label><span>905</span>
                        </li>
                        <li>
                            <input class="pph-custom-input js-filtering-option" value="pre-funded" id="filter-pre-funded" data-filter="pre-funded" type="radio" name="filter"/>
                            <label class="crop" for="filter-pre-funded">Pre-Funded</label><span>128</span>
                        </li>
                    </ul>
                </div>
            </div>
            <br class="clear"/>
            <div class="sidebar-box" data-hook="filters">
                <h3 class="bubble">Job Type</h3>
                <hr/>
                <div class="col-xs-12 price-filters-container">
                    <div class="clearfix">
                        <input id="ytpriceType" type="hidden" value="" name="priceType"/>
                        <div id="priceType">
                            <div class="price-radio-option">
                                <input class="pph-custom-input" id="priceType_0" value="" checked="checked" type="radio" name="priceType"/>
                                <label for="priceType_0">All</label>
                            </div>
                            <div class="price-radio-option">
                                <input class="pph-custom-input" id="priceType_1" value="fixed_price" type="radio" name="priceType"/>
                                <label for="priceType_1">Fixed</label>
                            </div>
                            <div class="price-radio-option">
                                <input class="pph-custom-input" id="priceType_2" value="hourly" type="radio" name="priceType"/>
                                <label for="priceType_2">Per Hour</label>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
            <br class="clear"/>
            <div class="clearfix gutter-top">
                <div id="banner-job_listings" data-hook="banner-ad" class="sidebar-box append-bottom clearfix banner-ad ">
                    <a class="banner-link" href="#">
                    <img class="banner-image" style="display: inline-block; border: none; outline: none; max-width: 250px; max-height: 75px; width: 100%;" src="https://d3v9w2rcr4yc0o.cloudfront.net/homepage/carousel/22889f302b2733146bad169d4bf2ac1c.jpg" alt="PeoplePerHour new feature!"/>
                    </a>
                </div>    
            </div>
        </section>
        <section class="clearfix hourlies-listing-sidebar listings-sidebar" id="listing-sidebar">
				<div class="clearfix gutter-top gutter-bottom visible-xs visible-sm">
					<a href="#" class="js-hide-offcanvas pull-right discreet hourlie-popular-tags">
						<i class="fa fa-times fa-2x"></i>
					</a>
				</div>
				
				<br class="clear"/>
				
				<div class="hourlie-popular-tags listings-popular-tags">
					<h3>
						<i class="fpph-bookmark color-pph"></i>
						Bộ sưu tập liêu quan        
					</h3>
					<hr/>
					<div class="clearfix gutter-top">
						 <div class="col-md-12 col-lg-12 ta-center">
                            <div class="hp-collection hp-tour-in" style="padding: 0;">
                              <div class="row">
                                <div class="col-lg-12 col-md-12 collection-item">
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
                                <div class="col-lg-12 col-md-12 collection-item">
                                  <div class="collection-box collection-box-snippet"> 
                                    <a href="#" title="Internet of things">
                                        <h4 class="collections-title"> 
                                            <span class="collections-title_outlets">0 Bài viết</span> 
                                            <span class="collections-title_text">Internet of things</span> 
                                        </h4>
                                        <div class="collection-box-bg lazy" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/dc347fcba38a39000ab7ab50f0f222ad_1424059541_l.jpg');">
                                            <div class="collection-overlay"></div>
                                        </div>
                                    </a> 
                                  </div>
                                  <div class="clear"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 collection-item">
                                  <div class="collection-box collection-box-snippet"> 
                                    <a href="#" title="Startup về media">
                                        <h4 class="collections-title" > 
                                            <span class="collections-title_outlets">0 Bài viết</span> 
                                            <span class="collections-title_text">Startup về media</span> 
                                        </h4>
                                        <div class="collection-box-bg lazy" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/fb1dfaf63322c68558b27ed7e5dc6e9c_1418401086_l.jpg');">
                                            <div class="collection-overlay"></div>
                                        </div>
                                    </a> 
                                  </div>
                                  <div class="clear"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 collection-item">
                                  <div class="collection-box collection-box-snippet"> 
                                    <a href="#" title="Lý do 55 000 doanh nghiệp phá sản hàng năm">
                                    <h4 class="collections-title" > 
                                        <span class="collections-title_outlets">0 Bài viết</span> 
                                        <span class="collections-title_text">Lý do 55 000 doanh nghiệp phá sản hàng năm</span> 
                                    </h4>
                                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/0707137915a22b40b4d5e8274f47d791_1419918315_l.jpg');">
                                        <div class="collection-overlay"></div>
                                    </div>
                                    </a> </div>
                                  <div class="clear"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 collection-item">
                                  <div class="collection-box collection-box-snippet"> 
                                    <a href="#" title="Startup về du lịch">
                                        <h4 class="collections-title"> 
                                            <span class="collections-title_outlets">0 Bài viết</span> 
                                            <span class="collections-title_text">Startup về du lịch</span> 
                                        </h4>
                                        <div class="collection-box-bg lazy" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/95d517d48c52188721ddfcf69d7d34f5_1419406534_l.jpg');">
                                            <div class="collection-overlay"></div>
                                        </div>
                                    </a> 
                                  </div>
                                  <div class="clear"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 collection-item">
                                  <div class="collection-box collection-box-snippet"> 
                                    <a href="#" title="Startup về nông nghiệp">
                                    <h4 class="collections-title" > 
                                        <span class="collections-title_outlets">0 Bài viết</span> 
                                        <span class="collections-title_text">Startup về nông nghiệp</span> 
                                    </h4>
                                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/4c2b30d63f25fc4d52a220890442421a_1421300685_l.jpg'); ">
                                    <div class="collection-overlay"></div>
                                  </div>
                                    </a> </div>
                                  <div class="clear"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 collection-item">
                                  <div class="collection-box collection-box-snippet"> 
                                    <a href="#" title="Khởi nghiệp nhà hàng">
                                    <h4 class="collections-title" > 
                                        <span class="collections-title_outlets">0 Bài viết</span> 
                                        <span class="collections-title_text">Khởi nghiệp nhà hàng</span> 
                                    </h4>
                                    <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/b762edbc2f8303b0ffdbdaa2ed6287a6_1424180016_l.jpg'); ">
                                    <div class="collection-overlay"></div>
                                  </div>
                                    </a> </div>
                                  <div class="clear"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 collection-item">
                                  <div class="collection-box collection-box-snippet"> 
                                    <a href="#" title="Khởi nghiệp quán cafe">
                                        <h4 class="collections-title" > 
                                            <span class="collections-title_outlets">0 Bài viết</span> 
                                            <span class="collections-title_text">Khởi nghiệp quán cafe</span> 
                                        </h4>
                                        <div class="collection-box-bg lazy"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/7d78f516cf561c362481f1d7a1fc7464_1418393872_l.jpg'); ">
                                            <div class="collection-overlay"></div>
                                        </div>
                                    </a> 
                                  </div>
                                  <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                      </div>
						
					</div>    
				</div>
			</section>
    </aside>	
    <div class="main-content controller-hourlie action-list">
			<section class="listings-container hourlies-listing-container" id="hourlies-listing">
				<div class="bg-fill clearfix options-container">
					<header class="clear">
						<h1 id="hourlies-listing-heading">
                         <?php echo get_cat_name( $cat_ID ) ?>  
                         <aside id="hourlies-listing-count">
                            <div class="clearfix">
                                <span class="hidden-xs"><?php echo category_description(); ?></span>
                            </div>
                         </aside>
                         </h1>
					</header>
				</div>
				<div class="results list" id="hourlies-listing-results">
					<div id="hourlies-listing-listview" class="list-view">
						<div class="items clearfix items-results ">
                        
                            <?php  $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                                $args = array(
                                    'cat'                 =>$cat_ID,
                                	'posts_per_page'      => 20,
                                    'paged' => $paged,
                                );
                                $the_query = new WP_Query($args);
                                // The Loop
                                if ( $the_query->have_posts() ) {
                                	
                                	while ( $the_query->have_posts() ) {
                                		$the_query->the_post();
                                        $user_info = get_userdata(get_the_author_ID()); 
                                        $full_name = $user_info->first_name.' '.$user_info->last_name;
                                        $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                                        $avatar_url =  site_url( $user_info->cus_avatar );
                                        ?>
                                        
                                        
                                    <div class="clearfix listing-row hourlie-list-item ">
        								<div class="col-xs-5 col-sm-4  hourlie-image-container row-image-container">
        								    <span data-res-id="302636"  data-entity-id="302636" data-entity-type="WISHLIST" data-in-wtt="false" class="bookmark fpph-bookmark login-require" title="Lưu vào"></span>
                                            <a href="<?php esc_url(the_permalink())?>" title="<?php the_title() ?> " class="hourlie-image-frame ">  
                                               <img width="238" height="140" src="<?php echo c_crop_image_resize($url, 238, 140, true); ?> " class=" wp-post-image" alt="Capture"/>       
                                                <span class="circle">5,0</span>
                                            </a>
        								</div>
        								<div class="col-xs-7 col-sm-8 no-padding-left no-padding-right hourlie-info">
        									<div class="col-xs-8 col-sm-9 info no-padding-left no-padding-right">
        										<h3 class="title">
        											<a href="<?php esc_url(the_permalink())?>" class="js-paragraph-crop" data-height="60"> 
        												<?php the_title() ?>
        											</a>
        										</h3>
                                                <br class="clear"/>
        										<ul class="clearfix member-info horizontal left crop">
        											<li>
        												<div class="user-image pull-left">
        													<a class="member-name" title="<?php echo $full_name; ?>" rel="nofollow" href="<?php echo site_url( '/c/user/personal/'. $user_info->user_login);?>">
                                                                <img class="user-avatar user-avatar-sm user-avatar-square" src="<?php  echo c_crop_image_resize($avatar_url, 30, 30, true)?>" alt="" width="30" height="30"/>
                                                            </a>                    
                                                        </div>
        												<div class="pull-left">
        													<span class="member-first-name crop"><a class="member-name" title="<?php echo $full_name; ?>" rel="nofollow" href="<?php echo site_url( '/c/user/personal/'. $user_info->user_login);?>"><?php echo $full_name; ?></a></span>
        													<span class="user-country crop"><?php echo $user_info->cus_city; ?></span>
        												</div>
        											</li>
                                                    <li class="js-tooltip" title="Hourlie's Rating">
        												<i class="fpph-thumb-up color-gray"></i>
                                                        <span class="hourlie-info-value">99</span>
        												<span>Votes</span>
        												
        											</li>
        											<li class="js-tooltip hidden-xs" title="Delivered in 1 day">
        												<i class="fpph-clock-wall color-gray"></i>
        												<span class="hourlie-info-value">1,200 Views</span>
        											</li>
        											<li class="js-tooltip" title="Hourlies sold">
        												<i class="fpph-buyer-activity color-gray"></i>
                                                        <span class="hourlie-info-value">79</span>
        												<span>Bình luận</span>
        												
        											</li>
        											
        										</ul>
        									</div>
        									<br class="clear"/>
        								</div>
        							</div>
                                        
	                       <?php }} wp_reset_postdata(); ?>
                        
                        
						</div>
						<div class="pager">
							<div class="pagination clearfix">
								<?php if($the_query->max_num_pages > 1){ 
                                    if( $the_query->max_num_pages > 10 ){
                                                                
                                        $limit = $paged + 10;
                                        $limit = ( $limit > $the_query->max_num_pages)? $the_query->max_num_pages: $limit;
                                        $start = ( $paged >= 3)? ($paged - 2): $paged;
                                        
                                    } else{
                                    $limit = $the_query->max_num_pages;
                                    $start = 1;
                                }
                                ?>
								<ul data-responsive="1" role="navigation" id="hourlies-listing-pager" class="yiiPager">
                                    <?php
                                        if ($paged > 1) { ?>
                                        <li class=""><a href="<?php echo esc_url(get_category_link($cat_ID)).'?page=' . ($paged - 1);?>" data-page="<?php echo ($paged - 1);?>" class="previous" title="Trang trước" ><i class="fa fa-angle-left"></i></a></li>
                                    <?php }
                                    for( $i= $start; $i <= $limit; $i++){ ?>
									
									<li class="hidden-xs"><a href="<?php echo esc_url(get_category_link($cat_ID)).'?page=' . $i; ?>" data-page="<?php echo $i;?>" class="<?php echo ($paged == $i)? "selected": ""; ?>" title="Trang <?php echo $i;?>" ><?php echo $i;?></a></li>
									<?php }
                                    if($paged < $the_query->max_num_pages){ ?>
                                        <li class=""><a href="<?php echo esc_url(get_category_link($cat_ID)).'?page=' . ($paged + 1);?>" data-page="<?php echo ($paged + 1);?>" class="next" title="Trang tiếp theo" ><i class="fa fa-angle-right"></i></a></li>
								    <?php } ?>
                                </ul>
                                <?php } ?> 
							</div>
						</div>
						
					</div>    
				</div>
				</section>
			</div>
		
		
</div>
<?php get_footer();?>