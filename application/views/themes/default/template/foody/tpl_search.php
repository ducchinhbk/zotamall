<?php
/**
 * The template for displaying searh page.
 *
 * @file      search.php
 * @package   VnUp news
 * @author    Chinh Tran
 * 
 **/
?>
<?php //get_header();?>
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
    </aside>
    <div class="main-content controller-hourlie action-list" style="width: 90%;">
        <section class="listings-container hourlies-listing-container" id="hourlies-listing">
             <?php //if ( have_posts() ) { 
                     //   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; global $wp_query;
                ?>
            <div class="bg-fill clearfix options-container">
                <header class="clear">
                    <h1 id="hourlies-listing-heading">
                        Kết quả tìm kiếm cho: <span class="keyword"> "appoinment"</span>
                    </h1>
                </header>
                        
            </div>
            <div class="results grid" id="hourlies-listing-results">
                <div id="hourlies-listing-listview" class="list-view">
                    <div class="items clearfix items-results ">
                        <div class="col-xs-12 col-sm-4 col-md-4 hourlie-tile-container">
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
                        <div class="col-xs-12 col-sm-4 col-md-4 hourlie-tile-container">
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
                        <div class="col-xs-12 col-sm-4 col-md-4 hourlie-tile-container">
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
                        <div class="col-xs-12 col-sm-4 col-md-4 hourlie-tile-container">
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
                        <div class="col-xs-12 col-sm-4 col-md-4 hourlie-tile-container">
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
                        <div class="col-xs-12 col-sm-4 col-md-4 hourlie-tile-container">
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
                        <div class="col-xs-12 col-sm-4 col-md-4 hourlie-tile-container">
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
                        <div class="col-xs-12 col-sm-4 col-md-4 hourlie-tile-container">
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
                        <div class="col-xs-12 col-sm-4 col-md-4 hourlie-tile-container">
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
                    
                    <div class="pager">
				        <div class="pagination clearfix">
				            <ul data-responsive="1" role="navigation" id="hourlies-listing-pager" class="yiiPager">
                                <li class=""><a href="#" data-page="1" class="previous" title="Trang trước" ><i class="fa fa-angle-left"></i></a></li>
                                <li class="hidden-xs"><a href="#" data-page="1" class="selected" title="Trang 1" >1</a></li>
                                <li class="hidden-xs"><a href="#" data-page="1" class="" title="Trang 2" >2</a></li>
							    <li class="hidden-xs"><a href="#" data-page="1" class="" title="Trang 3" >3</a></li>
                                <li class="hidden-xs"><a href="#" data-page="1" class="" title="Trang 4" >4</a></li>
                                <li class="hidden-xs"><a href="#" data-page="1" class="" title="Trang 5" >5</a></li>
                                <li class=""><a href="#" data-page="1" class="next" title="Trang tiếp theo" ><i class="fa fa-angle-right"></i></a></li>
								   
                            </ul>
				        </div>
				    </div>
   
                </div>    
            </div>
        </section>
    </div>
</div>
<?php //get_footer();?>