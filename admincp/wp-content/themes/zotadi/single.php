<?php
/**
 * The template for displaying Home page.
 *
 * @file      index.php
 * @package   VnEconomist news
 * @author    Chinh Tran
 * 
 **/
?>
<?php get_header();?>
<?php 
    $category = get_the_category(); $cat_ID = ($category[0]->category_parent > 0)? $category[0]->category_parent : $category[0]->term_id; 
    
?>
<style>
    .controller-job.action-view header h1{
        border-bottom: none;
    }
    .user-voted{background-color: #999 !important;border: none !important; text-shadow: none !important;}
    .user-voted:hover{color: #fff !important;}
</style>
<div class="container container-top"></div>

<div id="main-container" class="wrap-container place">
    
    <div class="progressive_img_loaded" style="opacity: 1; background-image: url(https://b.zmtcdn.com/data/res_imagery/311147_RESTAURANT_868a302ff195f4c8655ebfc21b0e9fc8_c.jpg);"></div>
    <div class="hero--overlay">
        <div class="container hero_restaurant_wrapper">
            <div class="col-lg-8 resbox-intro resbox-intro--obp">
                <div class="header-border clearfix">
                    
                        <div class="clearfix">
                            <div class="resbox__header">
                                <div class="res-info-estabs">
                                    <a title="View all Ăn tối" href="#">Ăn tối</a> 
                                </div>
                                <div class="clear"></div>
                                <div class="resbox__header--left">
                                    <div class="res-name-wrapper clearfix">
                                        <h1 class="res-name left">
                                            <a href="#" title="Q Bistro New Delhi">
                                                <span itemprop="name" style="font-size: 90%">Q Bistro</span>
                                            </a>
                                        </h1>
                                        <a role="button" href="#" class="rest-sms-btn btn--outline btn--grey btn--small res-btn">SMS</a>
                                    </div>
                                </div>
                                <div class="resbox__header--right">
                                    <div class="res-rating mt5 pos-relative clearfix">
                                        <div tabindex="0" aria-label="Đã đánh giá" itemprop="ratingValue" data-res-id="311147" class="rating-for-311147 rating-div small-rating rrw-aggregate level-7">
                                            3.9                                                
                                        </div>
                                        <div class="clear"></div>                                                
                                        <div class="res-rating-rhs">
                                            <div class="rating-votes-div rrw-votes" tabindex="0" aria-label="188  votes">
                                                <span class="tooltip_formatted fbold"><strong itemprop="ratingCount">188</strong>  votes</span>                                                    
                                            </div>                                     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="left res-action-box hom hot">
                            <div class="clearfix">
                                <div class="res-act-button mr10 mb5 left">
                                    <a role="button" aria-label="Thêm vào bộ sưu tập" href="#" data-entity-id="311147" data-res-id="311147" id="resinfo-wtt" data-icon="Ń" data-za-events="click" data-za-intent="wishlist.post" data-entity-type="RESTAURANT-WISHLIST" data-in-wtt="false" class="fpph fpph-portfolio" style="padding: 3px 15px;"></a>
                                </div>
                                <div class="res-act-button mr10 mb5 left">
                                    <a role="button" aria-label="Thêm vào mục đánh dấu" href="#" data-entity-id="311147" data-res-id="311147" id="resinfo-wtt" data-icon="Ń" data-za-events="click" data-za-intent="wishlist.post" data-entity-type="RESTAURANT-WISHLIST" data-in-wtt="false" class="fpph-bookmark"></a>
                                </div>

                                <div class="res-act-button mr10 mb5 left">
                                    <a role="button" aria-label="Đánh dấu Đã đến đó" href="#" id="resinfo-bt" data-entity-id="311147" data-entity-type="RESTAURANT-BEENTHERE" data-icon="Ć" data-za-events="click" data-za-intent="beenthere.post" data-in-bt="false" class="fpph-location "></a>
                                </div>
                                <div class="res-act-button mr10 mb5 left">
                                    <a role="button" aria-label="Viết nhận xét cho Q Bistro" data-icon="Ĉ" id="resinfo-wr" class="fpph fpph-invite-earn" href="#">Viết nhận xét</a>
                                </div> 
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main-container" class="wrap-container container clearfix offcanvas offcanvas-right" style="margin-top: -30px;">
    <div class="main-content controller-hourlie controller-job action-view controller-member action-contact">
       <?php if (have_posts()) { ?>		
             <?php while (have_posts()) : the_post();
                     $author_id = get_the_author_ID();
                     
                     $user_info = get_userdata($author_id); 
                     $full_name = get_user_meta( $author_id, 'first_name', true ).' '.get_user_meta( $author_id, 'last_name', true );
                    
             ?>
    			<header class="clearfix featured featured-right">
    				<h1 class="clearfix"><i class="fpph-location"></i><?php the_title()?> </h1>
    			</header>
                <div id="members-widget-hourlies-portfolio" class="member-tabs pph-default stretch gutter-bottom hidden-xs">
                    <ul role="tablist" class="nav nav-tabs">
                        <li class="active">
                            <a role="tab" data-toggle="tab" href="#content">Giới thiệu (<?php echo count_user_posts($cur_user->ID);?>)</a>
                        </li>
                        <li >
                            <a role="tab" data-toggle="tab" href="#images">Hình ảnh</a>
                        </li>
                        <li >
                            <a role="tab" data-toggle="tab" href="#service">Book lịch hẹn</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="content" class="tab-pane fade in active">
                            <?php the_content(); ?>	
                                
                        </div>
                        
                        <div id="images" class="tab-pane fade in">
                            <div class="clearfix js-auto-pause-hidden">
                                <div class="widget-media-viewer horizontal" data-hook="widget-content">
                                    <div class="stage-container" data-hook="stage-container" data-widget-id="hourlie-attachments" style="padding-bottom: 69.5%;">
                                        <div id="central-stage" class="central-stage" data-hook="stage">
                                            <img src="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/79bff8cf775374f40996202159b5f361.jpg" alt=""/>
                                        </div>
                                        <div class="thumbnails boxmodelfix horizontal" data-hook="thumbnails">
                                            <a href="#" class="thumb-navigation-previous disabled" data-previous="1" style="">
                                                <i class="light fa fa-chevron-right"></i>
                                            </a>
                                            <div class="thumbnails-list-container">
                                                <ul class="thumbnails-list clearfix" data-hook="thumbnails-list" style="width: 1120px;">
                                                    <li class="selected">
                                                        <a data-id="538023" data-icon="file-icon fpph-file-jpg" data-extension="jpg" data-thumb="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/79bff8cf775374f40996202159b5f361.jpg" data-type="image" data-source="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/79bff8cf775374f40996202159b5f361.jpg" data-download="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/79bff8cf775374f40996202159b5f361.jpg" data-description="" data-width="1280" data-height="890" href="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/79bff8cf775374f40996202159b5f361.jpg"><img class="preview-image" onerror="this.src='https://d3ambpg2zf25sl.cloudfront.net/css/images/file-icon-picture.png'; this.setAttribute('data-apply-min', '1');" src="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/79bff8cf775374f40996202159b5f361.jpg" alt=""></a>    </li>
                                                    <li>
                                                        <a data-id="538033" data-icon="file-icon fpph-file-jpg" data-extension="jpg" data-thumb="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/143b178a62c1c44e3f54a87e57cd23a2.jpg" data-type="image" data-source="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/143b178a62c1c44e3f54a87e57cd23a2.jpg" data-download="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/143b178a62c1c44e3f54a87e57cd23a2.jpg" data-description="" data-width="1280" data-height="890" href="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/143b178a62c1c44e3f54a87e57cd23a2.jpg"><img class="preview-image" onerror="this.src='https://d3ambpg2zf25sl.cloudfront.net/css/images/file-icon-picture.png'; this.setAttribute('data-apply-min', '1');" src="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/143b178a62c1c44e3f54a87e57cd23a2.jpg" alt=""></a>    </li>
                                                    <li>
                                                        <a data-id="538034" data-icon="file-icon fpph-file-jpg" data-extension="jpg" data-thumb="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/3415a7d22d8ddca371aad01fca3c05fb.jpg" data-type="image" data-source="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/3415a7d22d8ddca371aad01fca3c05fb.jpg" data-download="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/3415a7d22d8ddca371aad01fca3c05fb.jpg" data-description="" data-width="1280" data-height="890" href="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/3415a7d22d8ddca371aad01fca3c05fb.jpg"><img class="preview-image" onerror="this.src='https://d3ambpg2zf25sl.cloudfront.net/css/images/file-icon-picture.png'; this.setAttribute('data-apply-min', '1');" src="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/3415a7d22d8ddca371aad01fca3c05fb.jpg" alt=""></a>    </li>
                                                    <li>
                                                        <a data-id="538035" data-icon="file-icon fpph-file-jpg" data-extension="jpg" data-thumb="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/bc389b1d518dac64fdb33122fa654fc0.jpg" data-type="image" data-source="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/bc389b1d518dac64fdb33122fa654fc0.jpg" data-download="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/bc389b1d518dac64fdb33122fa654fc0.jpg" data-description="" data-width="1280" data-height="890" href="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/bc389b1d518dac64fdb33122fa654fc0.jpg"><img class="preview-image" onerror="this.src='https://d3ambpg2zf25sl.cloudfront.net/css/images/file-icon-picture.png'; this.setAttribute('data-apply-min', '1');" src="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/bc389b1d518dac64fdb33122fa654fc0.jpg" alt=""></a>    </li>
                                                    <li>
                                                        <a data-id="538036" data-icon="file-icon fpph-file-jpg" data-extension="jpg" data-thumb="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/644346e3693eaed54be7dfd7ffbe4e9e.jpg" data-type="image" data-source="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/644346e3693eaed54be7dfd7ffbe4e9e.jpg" data-download="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/644346e3693eaed54be7dfd7ffbe4e9e.jpg" data-description="" data-width="1280" data-height="890" href="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/644346e3693eaed54be7dfd7ffbe4e9e.jpg"><img class="preview-image" onerror="this.src='https://d3ambpg2zf25sl.cloudfront.net/css/images/file-icon-picture.png'; this.setAttribute('data-apply-min', '1');" src="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/644346e3693eaed54be7dfd7ffbe4e9e.jpg" alt=""></a>    </li>
                                                    <li>
                                                        <a data-id="538037" data-icon="file-icon fpph-file-jpg" data-extension="jpg" data-thumb="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/17ba74728722a88f6e30682da709eae7.jpg" data-type="image" data-source="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/17ba74728722a88f6e30682da709eae7.jpg" data-download="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/17ba74728722a88f6e30682da709eae7.jpg" data-description="" data-width="1280" data-height="890" href="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/17ba74728722a88f6e30682da709eae7.jpg"><img class="preview-image" onerror="this.src='https://d3ambpg2zf25sl.cloudfront.net/css/images/file-icon-picture.png'; this.setAttribute('data-apply-min', '1');" src="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/17ba74728722a88f6e30682da709eae7.jpg" alt=""></a>    </li>
                                                    <li>
                                                        <a data-id="538038" data-icon="file-icon fpph-file-jpg" data-extension="jpg" data-thumb="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/ae6040ec1be50f2c9166e349ba4505f2.jpg" data-type="image" data-source="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/ae6040ec1be50f2c9166e349ba4505f2.jpg" data-download="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/ae6040ec1be50f2c9166e349ba4505f2.jpg" data-description="" data-width="1280" data-height="890" href="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/ae6040ec1be50f2c9166e349ba4505f2.jpg"><img class="preview-image" onerror="this.src='https://d3ambpg2zf25sl.cloudfront.net/css/images/file-icon-picture.png'; this.setAttribute('data-apply-min', '1');" src="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/ae6040ec1be50f2c9166e349ba4505f2.jpg" alt=""></a>    </li>
                                                    <li>
                                                        <a data-id="538039" data-icon="file-icon fpph-file-jpg" data-extension="jpg" data-thumb="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/36ea6fbfd7a1237eb7470a6505358207.jpg" data-type="image" data-source="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/36ea6fbfd7a1237eb7470a6505358207.jpg" data-download="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/36ea6fbfd7a1237eb7470a6505358207.jpg" data-description="" data-width="1280" data-height="890" href="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/36ea6fbfd7a1237eb7470a6505358207.jpg"><img class="preview-image" onerror="this.src='https://d3ambpg2zf25sl.cloudfront.net/css/images/file-icon-picture.png'; this.setAttribute('data-apply-min', '1');" src="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/36ea6fbfd7a1237eb7470a6505358207.jpg" alt=""></a>    </li>
                                                    <li>
                                                        <a data-id="538040" data-icon="file-icon fpph-file-jpg" data-extension="jpg" data-thumb="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/91131d1fe1f25f74f9b73a9102dceee4.jpg" data-type="image" data-source="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/91131d1fe1f25f74f9b73a9102dceee4.jpg" data-download="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/91131d1fe1f25f74f9b73a9102dceee4.jpg" data-description="" data-width="1280" data-height="890" href="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/91131d1fe1f25f74f9b73a9102dceee4.jpg"><img class="preview-image" onerror="this.src='https://d3ambpg2zf25sl.cloudfront.net/css/images/file-icon-picture.png'; this.setAttribute('data-apply-min', '1');" src="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/91131d1fe1f25f74f9b73a9102dceee4.jpg" alt=""></a>    </li>
                                                    <li>
                                                        <a data-id="538041" data-icon="file-icon fpph-file-jpg" data-extension="jpg" data-thumb="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/cdb95f85e55e06870b47ca0a658653d2.jpg" data-type="image" data-source="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/cdb95f85e55e06870b47ca0a658653d2.jpg" data-download="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/cdb95f85e55e06870b47ca0a658653d2.jpg" data-description="" data-width="1280" data-height="890" href="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/2015/05/cdb95f85e55e06870b47ca0a658653d2.jpg"><img class="preview-image" onerror="this.src='https://d3ambpg2zf25sl.cloudfront.net/css/images/file-icon-picture.png'; this.setAttribute('data-apply-min', '1');" src="http://d3v9w2rcr4yc0o.cloudfront.net/uploads/hourliesAttachments/thumbs/110x83/2015/05/cdb95f85e55e06870b47ca0a658653d2.jpg" alt=""></a>    </li>
                                                </ul>            
                                            </div>
                                            <a href="#" class="thumb-navigation-next" data-next="1" style="">
                                                <i class="light fa fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-hook="ajax-nav-arrows" style="display: none;">
                                    <a href="#" class="mediaviewer-nav nav-previous" data-pos="previous" data-hook="mediaviewer-nav">&nbsp;</a>
                                    <a href="#" class="mediaviewer-nav nav-next" data-pos="next" data-hook="mediaviewer-nav">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div id="service" class="tab-pane fade in">
                            Nothing to display
                        </div>
                    </div>
                </div>
			<?php addPostMetaValue(get_the_ID(), 'post_views_count', 1);  endwhile; ?> 
            <?php } else { ?>
            	<h1 class="single-title" >Không có thông tin hiên thị..</h1>	   			
            <?php } ?>
			 
            <?php if(isset($_SESSION['wp_user_data'])){?>
            
            <div>
                <div class="col-xs-12 col-sm-6 col-md-2 col-lg-1 member"></div>
                <div class="col-xs-12 col-sm-6 col-md-10 col-lg-10 col-lg-pull-1 contact">
                    <div class="hire-form-container clearfix">
                        <div>
        					<form enctype="multipart/form-data" id="member-contact-form" action="#" method="post">
        						<div class="row">
        							<div class="col-xs-12 form-group">
        								<div class="instant-hire clearfix">
        									<div class="fields clearfix">
        										
        										<div class="clearfix payment-contracts">
                                                    <h2>Đánh giá của bạn</h2>
        											<div class="row">
        												<ul id="rating">
        													<li><a href="javascript:void(0)">1.0</a></li>
        													<li><a href="javascript:void(0)">1.5</a></li>
        													<li><a href="javascript:void(0)">2.0</a></li>
        													<li><a href="javascript:void(0)">2.5</a></li>
        													<li><a href="javascript:void(0)">3.0</a></li>
        													<li><a href="javascript:void(0)">3.5</a></li>
        													<li><a href="javascript:void(0)">4.0</a></li>
        													<li><a href="javascript:void(0)">4.5</a></li>
        													<li><a href="javascript:void(0)">5.0</a></li>
        												</ul>
        												<input type="hidden" id="rating-index" name="rating_index" value=""/>
        											</div>
        
        										</div>
        									</div>
        								</div>
        								<div class="textbox new-job hourlie clearfix">
        									<textarea id="commnent-content" placeholder="Chia sẽ nhận xét của bạn." class="col-xs-12" name="comment_content" ></textarea>            
        									
        								</div> 
        								<input type="hidden" name="user_id" id="user-id" value="<?php echo (!empty($_SESSION["wp_user_data"]))? $_SESSION["wp_user_data"]['user_id']: '1'?>"/>
                                        <input type="hidden" name="post_id" id="post-id" value="<?php echo get_the_ID();?>"/>
        							</div>
        						</div>
        
        
        						<div class="form-group submit-btn clearfix gutter-top new-job hourlie">
        							<input id="review-form" class="tall btn btn-inverted call-to-action col-xs-12 col-sm-6 col-md-4 col-lg-2" type="button" name="yt0" value="Gửi bình luận"  style="padding: 7px 0;font-size: 12px;"/>
        						</div>
        						<div class="js-invite-more-sellers"></div>
        
        					</form>
        				</div>
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <section class="proposal-form prepend-top" data-hook="proposal-form" id="login-box">
                <!--h2 class="bubble">Votes </h2-->
                <div class="inactive-proposal gutter-top text-center">
                    <p>Đăng nhâp để vote cho địa điểm này.</p>
                    <a  class="extra-tall call-to-action btn btn-inverted" href="<?php echo site_url( '/c/user/user?redirect_to='. urlencode(site_url($wp->request)) );?>">Đăng nhập </a>
                </div>    
            </section>
            <?php } ?>
			<div class="col-xs-12 js-auto-pause-hidden hourlie-description-text">
		          
				<div class="feedbacks-container clear prepend-top">
					<div class="feedbacks-list-container">
						<h2 class="prepend-top reviews clearfix">
							Bình luận (<?php echo count_comment( get_the_ID() ); ?>) </h2>
						<section id="feedack-230890" class="timeline clear review-list" data-hook="feedack-container">
							<div id="reviews-list" class="list-view">
                            
								<ul class="items row" id="comments-list">
    								<?php (count_comment( get_the_ID() ) > 0 )? cus_get_comments(get_the_ID()): ''; ?>
                                    
    							</ul>
						</div>            
					</section>
				</div>
                <?php if(count_comment( get_the_ID() ) > 0 ) {?>
                <div class="feedback-toggle-container clearfix" style="margin-top: 30px;">
				    <button class="btn tall call-to-action col-xs-12 col-md-6 col-md-offset-3" id="load-reviews">
							Xem bình luận
                    </button>
				</div>
                <?php } ?>
			</div>
		</div>
    </div>
    <aside class="right-column sidebar-hourlie-view offcanvas-sidebar">
        <div class="js-keep-in-view-marker"></div>
		<div class="clearfix js-keep-in-view hidden-xs hidden-sm cta-container">
			<div class="clearfix">
				<div class="price-container text-center gutter-top">
					<span class="js-hourlie-discounted-price discounted-price" > <span id="sum-voted" class="sum-voted" style="font-weight: 600; color: #ff6a26;"><?php echo get_sum_voted($author_id);  ?></span> votes  </span>
				</div>
			</div>
			<div class="clear append-bottom hidden-sm hidden-xs"></div>
			<div class="clearfix actions-container">
				<div class="btn-container">
					<div class="clearfix">
					
						<div class="col-xs-8 no-padding-right">
                            <?php if(isset($_SESSION['wp_user_data'])){ 
                                     if(check_voted($user_info->ID, $_SESSION['wp_user_data']["user_id"], get_the_ID())){?>
                                    <span class="hourlie tall btn btn-inverted js-payment-button user-voted" > Đã vote</span>
                                <?php } else { ?>
                                    <span class="hourlie tall btn btn-inverted js-payment-button" id="voting"> Vote</span>
                                <?php }
                                 } else {?>
                            
                                <a href="#login-box" class="hourlie tall btn btn-inverted js-payment-button"> Vote</a>
                            <?php } ?>    
                            <input type="hidden" name="author_id" id="author-id" value="<?php echo $author_id;?>"/>       
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix main-information">
				<div class="no-padding-left col-xs-6">
					<span class="icon-container">
						<i class="fpph fpph-clock-wall"></i>
					</span>
					<span>
						<span>Bình luận</span><br/>
						<span class="value js-delivery-days">25</span>
					</span>
				</div>
				<div class="col-xs-6 no-padding-left no-padding-right">
					<span class="icon-container">
						<i class="fpph fpph-thumb-up"></i>
					</span>
					<span>
						<span class="value">98%</span> Rating<br/>
						<span>(25 reviews)</span>
					</span>
				</div>
			</div>
			
		</div>
		<div class="clearfix member-summary widget-memberSummary">
			<div class=" summary member-summary-section clearfix">
				<div class="member-image-container">
					<?php echo c_get_avatar(get_the_author_ID(), 150, 250, "img-border-round member-image");?>
				</div>
				<div class="member-information-container">
					<div class="member-name-container crop">
						<h2>
							<a class="crop member-short-name" title="<?php echo $full_name; ?>" rel="nofollow" href="<?php echo site_url( '/c/user/personal/'. $user_info->user_login);?>"><?php echo $full_name; ?></a>
							<span class="icon member-online offline"></span>
						</h2>
						<div class="member-job-title crop"><?php echo $user_info->cus_career.', '.$user_info->cus_company;?> </div>
					</div>
				</div>
				<div class="cert-container text-right">
					<span class="cert cert-level4-medium " data-level="4" data-tooltip-content="CERT is PPH&#039;s  proprietary ranking algorithm  which factors in all the things our buyers care about a Seller, in one synthetic score. Sellers are ranked from CERT1 up to CERT5 with the Top 0.5% getting a special badge." data-tooltip-pos="left" title="CERT is PPH&#039;s  proprietary ranking algorithm  which factors in all the things our buyers care about a Seller, in one synthetic score. Sellers are ranked from CERT1 up to CERT5 with the Top 0.5% getting a special badge.">
					</span>
				</div>
			</div>
			<div class=" about member-summary-section clearfix">
				<div class="about-container js-about-container">
					<p>
                        <?php echo get_sub_string($user_info->cus_description, 25); ?>
                        <a class="call-to-action about-read-more about-dialog-trigger" >xem thêm...</a>
                        
					</p>
				</div>
			</div>
			<div class=" location member-summary-section clearfix">
				<div class="location-container crop"><i class="fpph-location"></i><?php echo $user_info->cus_city; ?></div>
			</div>
			<div class=" contact member-summary-section clearfix">
				<a class="btn contact-button" rel="nofollow" href="#">Contact</a>
			</div>
		</div>
		<br class="clear"/>
		<div class="clearfix gutter-top">
			<div class="lifted-corners with-handles">
				<div class="handles"></div>
				<div class="center-block">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Money protection guarantee" class="money-protection-guarantee pull-left">
					<div class="pull-left">
						<h5>
							Good Restaurant <aside>Chứng nhận địa điểm </aside>
						</h5>
					</div>
				</div>
			</div>
		</div>
		
		<br class="clear"/>
		<div class="sidebar-box prepend-top clearfix js-auto-pause-hidden">
			<div class="clearfix widget-recommended-hourlies sidebar-box">
                <?php   
                    $args = array(
                        'posts_per_page' => 5
                    );
                    $the_query = new WP_Query($args);
                    if ( $the_query->have_posts() ) {
                                	
                ?>    	
            
				<h2 class="bubble">Xem thêm </h2>
				<hr/>
				<ul class="clearfix recommended-hourlie-items">
                    <?php while ( $the_query->have_posts() ) {
                  		    $the_query->the_post();
                            $full_name = get_user_meta( get_the_author_ID(), 'first_name', true ).' '.get_user_meta( get_the_author_ID(), 'last_name', true );
                        ?>
                       
                       <li class="clearfix">
						<div class="col-xs-4 no-padding-left no-padding-right image">
							<a href="<?php the_permalink() ?>" class="img-container" title="<?php the_title(); ?>" >
								<?php the_post_thumbnail('thumbnail', array( 'class' => 'hourlie-image' )); ?>
							</a>
						</div>
						<div class="col-xs-8 no-padding-right no-padding-left">
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="title clearfix">
								<?php the_title(); ?>
                            </a>
							<div class="details crop pull-left">
							 <a href="#"><?php echo $full_name; ?></a>    
                            </div>
						</div>
						<div class="clearfix horizontal-line stretch"></div>
					</li>
                       
                       
                <?php } ?>
                  
				</ul>
                <?php } ?>
			</div>
		</div>
		<br class="clear"/>    
		</aside>
	</div>
    <div class="bootbox modal fade in"  style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="bootbox-close-button close">Ã—</button>
                    <h4 class="modal-title">Vá» <?php echo $full_name; ?></h4>
            </div>
            <div class="modal-body">
                <div class="bootbox-body">
                    <?php echo $user_info->cus_description; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery1.4.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.color.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script>
    $(document).ready(function(){
       $('.about-dialog-trigger').click(function(){
            $('.bootbox').toggle();
            $('.bootbox-close-button').click(function(){
                $('.bootbox').fadeOut();
            });
       }) 
    });
</script>
<?php get_footer();?>