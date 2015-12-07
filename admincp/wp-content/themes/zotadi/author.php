<?php
/**
 * The template for displaying author page.
 *
 * @file      author.php
 * @package   VnEconomist news
 * @author    Chinh Tran
 * 
 **/
?>
<?php get_header(); ?>

<?php 

    $cur_user = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
    $full_name = get_user_meta( $cur_user->ID, 'first_name', true ).' '.get_user_meta( $cur_user->ID, 'last_name', true );
  
?>
<div class="main-content full-width controller-member action-profile no-padding">
        
    <div class="clearfix profile-header profile-header-cover">
        <div class="profile-background col-xs-12 hidden-xs no-padding">
            <div class="background-wrapper">
                <div style="background-image: url(<?php echo esc_url(site_url($cur_user->cus_cover)); ?>);" class="memberImage"></div>
            </div>
        </div>
    <div class="profile-header-fav">
        <div class="fav-triangle">

        </div>
        <div class="fav-icon">
            <div class="widget-star-item " style="display: inline-block; margin-top: 0;">
            <a href="#"><span></span></a>
            </div>        
        </div>
    </div>
    <div class="profile-header-xs visible-xs-block hidden-sm">
        <div class="profile-availability">
            <i class="js-tooltip status-icon fa fa-circle green"></i>        
        </div>

        <div class="profile-pic">
            <img src="<?php echo esc_url(site_url($cur_user->cus_avatar)); ?>" alt="<?php echo $full_name;?>"/>            
            <span class="hidden-xs available  js-tooltip" title="Savitri D. is available to start working for you immediately">
                <i class="icon fa fa-check"></i>
            </span>
        </div>
        
        <div class="profile-cert">
            <span class="cert cert-level5-medium " data-level="5" data-tooltip-content="CERT is PPH's  proprietary ranking algorithm  which factors in all the things our buyers care about a Seller, in one synthetic score. Sellers are ranked from CERT1 up to CERT5 with the Top 0.5% getting a special badge." data-tooltip-pos="left" title="CERT is PPH's  proprietary ranking algorithm  which factors in all the things our buyers care about a Seller, in one synthetic score. Sellers are ranked from CERT1 up to CERT5 with the Top 0.5% getting a special badge.">
            </span>        
        </div>
        <div class="clearfix member-info">
            <span class="member-name">
                <?php echo $full_name;?>           
            </span>
            <span class="member-description">
                <?php echo $cur_user->cus_career.', '.$cur_user->cus_company;?>            
            </span>

        </div>
        <div class="member-location-rate">
            <ul>
                <li>
                    <i class="fpph fpph-location"></i>
                    <?php echo $cur_user->cus_city; ?>                
                </li>
                <li>
                    <i class="fpph fpph-seller-activity"></i>
                    $44 /hr               
                </li>
            </ul>
            <div class="member-available">
                <ul>
                    <li>
                        <i class="status-icon fa fa-check-circle green js-tooltip" title="Savitri D. is available to start working for you immediately"></i>
                        <span class="status-label-text">Available now</span>                    
                    </li>
                </ul>
            </div>
        </div>
        <div class="member-about clearfix">
            <div class="member-status text-center">
                <q class="crop full-width-q" title="<?php echo $cur_user->cus_quote;?>" ><?php echo $cur_user->cus_quote;?></q>            
            </div>
            <hr class="clearfix"/>
            <div class="about-container js-about-container">
                <p>
                <?php echo get_sub_string($cur_user->cus_description, 25); ?>
                <a class="call-to-action about-read-more about-dialog-trigger" >xem thêm...</a>
               </p>
            </div>        
        </div>
                                
        <div class="member-hire">
            <span><a class="btn contact-member call-to-action btn-inverted " rel="nofollow" href="#">Contact</a></span>        
        </div>
    </div>
    <div class="profile-header-member hidden-xs">
        <div class="profile-pic">
            <img src="<?php echo esc_url(site_url($cur_user->cus_avatar)); ?>" alt="<?php echo $full_name;?>"/>            
            <span class="hidden-xs available  js-tooltip" title="" data-original-title="Savitri D. is available to start working for you immediately">
                <i class="icon fa fa-check"></i>
            </span>
        </div>
        <div class="seller-name light">
            <h1>
                <?php echo $full_name;?>               
                <aside>
                    <?php echo $cur_user->cus_career.', '.$cur_user->cus_company;?>                
                </aside>
            </h1>
        </div>
    </div>
    <div class="cover-edit-action hidden-xs">
        <a class="btn cover-edit-button" href="<?php echo site_url('c/user/user/edit');?>">
            <i class="fa fa-camera"></i> Change Cover
        </a>    
    </div>
    <div class="profile-header-right-col align-center hidden-xs">
        <div class="cert-container">
            <span class="cert cert-level5-xlarge " data-level="5" data-tooltip-content="CERT is PPH's  proprietary ranking algorithm  which factors in all the things our buyers care about a Seller, in one synthetic score. Sellers are ranked from CERT1 up to CERT5 with the Top 0.5% getting a special badge." data-tooltip-pos="left" title="CERT is PPH's  proprietary ranking algorithm  which factors in all the things our buyers care about a Seller, in one synthetic score. Sellers are ranked from CERT1 up to CERT5 with the Top 0.5% getting a special badge.">
            </span>        
        </div>
        <!--span><a class="btn contact-member call-to-action btn-inverted " rel="nofollow" href="#">Contact</a></span-->    
        <a class="btn contact-member call-to-action  " rel="nofollow" href="<?php echo site_url('c/user/user/edit');?>">Edit</a>
    </div>
</div>
<div class="member-info-container">
    <div class="col-xs-12 col-sm-4 col-lg-3 profile-sidebar hidden-xs">
        <div class="sidebar-box clearfix hidden-xs">
            <div class="member-status">
                <q class="crop full-width-q" title="<?php echo $cur_user->cus_quote;?>"><?php echo $cur_user->cus_quote;?></q>    
            </div>
            <hr/>
            <p>
            </p>
            <div class="about-container js-about-container">
                <p>
                    <?php echo get_sub_string($cur_user->cus_description, 25); ?>
                    <a class="call-to-action about-read-more about-dialog-trigger" >xem thêm...</a>
                    
                </p>
            </div>    
            <div class="clearfix">
                <ul class="clearfix details-list">
                     <li>
                        <i class="fpph fpph-location"></i>
                        <?php echo $cur_user->cus_city; ?>           
                    </li>
                    <li class="">
                        <i class="status-icon fa fa-check-circle green js-tooltip" title="Savitri D. is available to start working for you immediately"></i>
                        <span class="status-label-text">Available now</span>            
                    </li>
                    <li>
                        <i class="js-tooltip status-icon fa fa-circle green"></i>
                        <span class="status-label-text">Online now</span>            
                    </li>
                   
                </ul>
            </div>
        </div>
        <div class="sidebar-box gutter-top append-bottom hidden-xs">
            <div class="memStats-container">
                <h3 class="bubble dark">Ghi nhận</h3>
                    <section class="widget-memberStats" data-hook="widget-memberStats">
                        <div class="row memberStats-rating">
                            <div class="col-sm-8"> Rating
                                <span class="icon help-active gray" data-tooltip-style="info" data-tooltip-pos="right" data-tooltip-content="Average feedback Tracy has received as a Seller."></span>
                            </div>
                            <div class="col-sm-4 value text-right">
                                <strong> <span>99</span><sup>%</sup> </strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                Bài viết
                            </div>
                            <div class="col-sm-3 value text-right">
                                <strong> 27 </strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                Tổng số votes
                            </div>
                            <div class="col-sm-3 value text-right">
                                <strong> 259 </strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                Last project
                            </div>
                            <div class="col-sm-6 value text-right">
                                <strong> 12 Sep 2015 </strong>
                            </div>
                        </div>
                        <div class="row">
                            <div id="response-time" class="col-sm-7">
                                Response time
                            <span class="icon help-active gray" data-tooltip-style="info" data-tooltip-pos="right" data-tooltip-content=" The average time to reply when contacted by a Buyer"></span>
                            </div>
                            <div class="col-sm-5 value text-right">
                                <strong> within a few hours </strong>
                            </div>
                        </div>
                        <div id="memStats-toggle" class="clearfix row memStats-toggle">
                            <a class="statistics col-xs-12 call-to-action">
                                <i class="fa fa-bar-chart-o"></i>
                                View my Buyer Stats                
                            </a>
                        </div>
                    </section>
                </div>
        </div>
        <div class="member-summary">
            <div class="clearfix gutter-top">
                <div class="lifted-corners with-handles">
                    <div class="handles"></div>
                    <div class="all-badges-container">
                        <div class="cert-badge">
                            <span class="cert cert-level5-medium " data-level="5"></span>
                        </div>
                        <div class="widget-member-prizes">
                            <img class="prize" title="Top Endorsed" src="https://d3v9w2rcr4yc0o.cloudfront.net/uploads/prizes/badges/ffdd1b856a16c89191f1150e4430076b.png" alt="Top Endorsed"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix sidebar-box gutter-top hidden-xs">
            <h3 class="bubble">Quan tâm</h3>
            <div class="clearfix widget-tag-list">
                <a class="tag-item small" href="#">Academic writing</a>
                <a class="tag-item small" href="#">Dissertation writing</a>
                <a class="tag-item small" href="#">Research writing</a>
                <a class="tag-item small" href="#">Article</a>
                <a class="tag-item small" href="#">Reviews writing</a>
                <a class="tag-item small" href="#">Fitness writing</a>
                <a class="tag-item small" href="#">Health writing</a>
                <a class="tag-item small" href="#">Medical writing</a>
                <a class="tag-item small" href="#">EBook writing</a>
                <a class="tag-item small" href="#">Biostatistics</a>        
                <a href="#" class="tag-item js-show-more-tags">
                    <span class="call-to-action">+2</span>
                </a>
                <div class="js-more-tags" style="display: none;">
                    <a class="tag-item small" href="#">Quantitative analysis</a>
                    <a class="tag-item small" href="#">Statistics</a>        
                </div>
            </div>
        </div>
        
        
        <div class="member-certificates"></div>
    </div>
    <div class="col-xs-12 col-sm-8 col-lg-9 profile-main">
        <div id="members-widget-hourlies-portfolio" class="member-tabs pph-default stretch gutter-bottom hidden-xs">
            <ul role="tablist" class="nav nav-tabs">
                <li class="active">
                    <a role="tab" data-toggle="tab" href="#my-post">Bài viết (<?php echo count_user_posts($cur_user->ID);?>)</a>
                </li>
                <li >
                    <a role="tab" data-toggle="tab" href="#my-colection">Bộ sưu tập</a>
                </li>
                <li >
                    <a role="tab" data-toggle="tab" href="#my-bookmark">Đã lưu</a>
                </li>
                <li >
                    <a role="tab" data-toggle="tab" href="#my-friend">Bạn bè</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="my-post" class="tab-pane fade in active">
                    <div id="" class="clearfix">
                        <div class="col-xs-12">
                            <a class="my-hourlies-viewall call-to-action right" style="margin-bottom: 20px;"></a>
                        </div>
                        <!-- The Loop -->
    
                        <?php   $paged = (get_query_var('page')) ? get_query_var('page') : 1; 
                                $args = array(
                                    'author'        =>  $cur_user->ID,
                                    'paged' => $paged,
                                    'posts_per_page' => 12
                                );
                                $the_query = new WP_Query($args);
                                if ( $the_query->have_posts() ) {
                                    	
                                    	while ( $the_query->have_posts() ) {
                                    		$the_query->the_post();
                                            ?>
                           
                                    <div class="col-xs-12 col-sm-6 col-md-4 hourlie-tile-container">
                                        <div class="clearfix hourlie-tile js-listing-tile  with-member-info">
                                            <div class="image-container">
                                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="">
                                                    <?php the_post_thumbnail(array(260, 195)); ?>         
                                                </a>
                                                <div class="stats-container clearfix">
                                                    <div class="pull-left rating">
                                                        <i class="fpph fpph-thumb-up"></i>
                                                        <span>Vote:</span>
                                                        <span class="rating-value">99</span>
                                                    </div>
                                                    <div class="pull-right sales">
                                                        <i class="fpph fpph-buyer-activity"></i>
                                                        <span>View:</span>
                                                        <span class="sales-value">1999</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="title-container">
                                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="color-hourlie js-paragraph-crop" style="word-wrap: break-word;">
                                                    <?php the_title(); ?>           
                                                </a>
                                            </div>
                                            <div class="profile-container stretch clearfix">
                                                <div class="col-xs-8 no-padding-right">
                                                    <div class="user-image-container pull-left">
                                                        <a title="<?php echo $full_name; ?>">
                                                            <?php echo c_get_avatar($cur_user->ID, 30, 30, "user-avatar user-avatar-xs");?>
                                                        </a>
                                                    </div>
                                                    <div class="user-info pull-left">
                                                        <a  title="<?php echo $full_name; ?>" class="clearfix user-name crop"><?php echo $full_name; ?></a>
                                                        <span class="user-country clearfix crop"><?php echo $cur_user->cus_city; ?></span>
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
                        
                        
                        <div class="clearfix"></div>
                        <div class="pager" style="margin-top: 20px;">
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
    								<ul id="hourlies-listing-pager" class="yiiPager">
                                        <?php
                                            if ($paged > 1) { ?>
                                            <li class=""><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )).'?page=' . ($paged - 1);?>" data-page="<?php echo ($paged - 1);?>" class="previous" title="Trang trước" ><i class="fa fa-angle-left"></i></a></li>
                                        <?php }
                                        for( $i= $start; $i <= $limit; $i++){ ?>
    									
    									<li class="hidden-xs"><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )).'?page=' . $i; ?>" data-page="<?php echo $i;?>" class="<?php echo ($paged == $i)? "selected": ""; ?>" title="Trang <?php echo $i;?>" ><?php echo $i;?></a></li>
    									<?php }
                                        if($paged < $the_query->max_num_pages){ ?>
                                            <li class=""><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )).'?page=' . ($paged + 1);?>" data-page="<?php echo ($paged + 1);?>" class="next" title="Trang tiếp theo" ><i class="fa fa-angle-right"></i></a></li>
    								    <?php } ?>
                                    </ul>
                                <?php } ?> 
                            </div>
                        </div>
                    </div>
                </div>
                <div id="my-colection" class="tab-pane fade">
                    <div id="" class="clearfix">
                        <div class="col-xs-12">
                            <a class="my-hourlies-viewall call-to-action right" style="margin-bottom: 20px;"></a>
                        </div>
                        <p>Tính năng bộ sưu tập đang được đang xây dựng..</p>
                    
                    </div>
                </div>
                <div id="my-bookmark" class="tab-pane fade">
                    <div id="" class="clearfix">
                        <div class="col-xs-12">
                            <a class="my-hourlies-viewall call-to-action right" style="margin-bottom: 20px;"></a>
                        </div>
                        <p>Tính năng lưu bài viết đang xây dựng..</p>
                    
                    </div>
                </div>
                <div id="my-bookmark" class="tab-pane fade">
                    <div id="" class="clearfix">
                        <div class="col-xs-12">
                            <a class="my-hourlies-viewall call-to-action right" style="margin-bottom: 20px;"></a>
                        </div>
                        <p>Tính năng bạn bè đang được phát triển..</p>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group visible-xs tab-collapsed" id="members-widget-hourlies-portfolio-accordion"></div>	        	    </div>
	    
    </div>
   
</div>



<div class="bootbox modal fade in"  style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="bootbox-close-button close">×</button>
                    <h4 class="modal-title">Về <?php echo $full_name; ?></h4>
            </div>
            <div class="modal-body">
                <div class="bootbox-body">
                    <?php echo $cur_user->cus_description; ?>
                </div>
            </div>
        </div>
    </div>
</div>
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