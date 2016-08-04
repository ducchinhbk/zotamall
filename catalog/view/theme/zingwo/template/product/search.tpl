<?php echo $header; ?>

<?php if($products){ ?>
<div class="layout-2cols">
        <div class="content grid_9">
            <div class="search-result-page">
                <div class="top-lbl-val">
                    <h3 class="common-title">Discover / <span class="fc-orange">Search</span></h3>
                    <div class="count-result">
                        <span class="fw-b fc-black">560</span> projects found for “<span class="fw-b fc-black">craft</span>”
                    </div>
                    <!--div class="confirm-search">Were you looking for projects in <a href="#" class="fw-b be-fc-orange">Crafts</a>?</div-->
                </div>
                <div id="list-search-ajax" class="list-project-result">
                
                    <?php foreach ($products as $product) { ?>
                            <div class="project-short larger">
                                <div class="top-project-info">
                                    <div class="content-info-short clearfix">
                                        <a href="<?php echo $product['href']; ?>" class="thumb-img">
                                            <img src="<?php echo $product['thumb']; ?>" alt="<?php echo ($product['name']); ?>">
                                        </a>
                                        <div class="wrap-short-detail">
                                            <h3 class="rs acticle-title"><a class="be-fc-orange" href="<?php echo $product['href']; ?>"><?php echo ($product['name']); ?></a></h3>
                                            <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">Ray Sumser</a> in <span class="fw-b fc-gray">New York, NY</span></p>
                                            <p class="rs title-description"><?php echo $product['meta_description']; ?></p>
        
                                        </div>
                                        <p class="rs clearfix comment-view">
                                            <a href="#" class="fc-gray be-fc-orange">75 comments</a>
                                            <span class="sep">|</span>
                                            <a href="#" class="fc-gray be-fc-orange">378 views</a>
                                        </p>
                                    </div>
                                </div><!--end: .top-project-info -->
                                <div class="bottom-project-info clearfix">
                                    <div class="project-progress sys_circle_progress" data-percent="53">
                                        <div class="sys_holder_sector"></div>
                                    </div>
                                    <div class="group-fee clearfix">
                                        <div class="fee-item">
                                            <p class="rs lbl">Bankers</p>
                                            <span class="val">270</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Pledged</p>
                                            <span class="val">$38,000</span>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="fee-item">
                                            <p class="rs lbl">Days Left</p>
                                            <span class="val">25</span>
                                        </div>
                                    </div>
                                    <a class="btn btn-red btn-buck-project" href="<?php echo $product['href']; ?>">Buck this project</a>
                                    <div class="clear"></div>
                                </div>
                            </div><!--end: project-short item -->
                    <?php } ?>
                </div>
                <div class="grid_12">
                    <div class="grid_6">
                        <p class="rs ta-c">
                            <a id="showmoreproject" class="btn btn-black btn-load-more" href="#">Show more projects</a>
                        </p>
                    </div>
                    <div class="grid_6">
                        <div class="col-sm-6 text-left"><?php echo $results; ?></div>
                		 <div class="col-sm-6 text-right"><?php echo $pagination; ?></div>
                    </div>
                </div>
            
            </div><!--end: .search-result-page -->
        </div><!--end: .content -->
        <div class="sidebar grid_3">
            <div class="left-list-category">
                <h4 class="rs title-nav">Featured</h4>
                <ul class="rs nav nav-category">
                    <li>
                        <a href="#">
                            Staff Picks
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            Popular
                            <span class="count-val">(2)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Now Launched
                            <span class="count-val">(212)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ending Soon
                            <span class="count-val">(35)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Small Project
                            <span class="count-val">(67)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Most Funded
                            <span class="count-val">(23)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Curated Pages
                            <span class="count-val">(52)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                </ul>
            </div><!--end: .left-list-category -->
            <div class="left-list-category">
                <h4 class="rs title-nav">Category</h4>
                <ul class="rs nav nav-category">
                    <li class="active">
                        <a href="#">
                            All
                            <span class="count-val">(12)</span>
                            <i class="icon iPlugGray"></i>
                        </a>
                    </li>
                    <?php foreach ($categories as $category) { ?>
                        <li>
                            <a href="<?php echo $category['href']; ?>">
                                <?php echo $category['name']; ?>
                                <span class="count-val"><?php echo $category['product_count']; ?></span>
                                <i class="icon iPlugGray"></i>
                            </a>
                        </li>
                    <?php } ?>
                    
                </ul>
            </div><!--end: .left-list-category -->
        </div><!--end: .sidebar -->
        
        <div class="clear"></div>
        
    </div>
<?php } else { ?>
    <div class="layout-2cols">
        <div class="search-result-page">
            <div class="top-lbl-val">
                <h3 class="common-title">Discover / <span class="fc-orange">Search</span></h3>
                <div class="count-result">
                    <span class="fw-b fc-black">0</span> projects found for “<span class="fw-b fc-black">craft</span>”
                </div>
            </div>
        </div>
    </div>
              
<?php } ?>
<div class="home-popular-project">
        <div class="container_12">
            <div class="grid_12 wrap-title">
                <h2 class="common-title">Có thể bạn quan tâm</h2>
            </div>
            <div class="clear"></div>
            <div class="lst-popular-project clearfix">
                <?php foreach ($feature_products as $product) { ?>
                    <div class="grid_3">
                        <div class="project-short sml-thumb">
                            <div class="top-project-info">
                                <div class="content-info-short clearfix">
                                    <a href="<?php echo $product['href']; ?>" class="thumb-img">
                                        <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>">
                                    </a>
                                    <div class="wrap-short-detail">
                                        <h3 class="rs acticle-title"><a class="be-fc-orange" href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h3>
                                        <p class="rs tiny-desc">by <a href="profile.html" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
                                        <p class="rs title-description"><?php echo $product['meta_description']; ?></p>
                                        <p class="rs project-location">
                                            <i class="icon iLocation"></i>
                                            New York, NY
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-project-info clearfix">
                                <div class="line-progress">
                                    <div class="bg-progress">
                                        <span  style="width: 50%"></span>
                                    </div>
                                </div>
                                <div class="group-fee clearfix">
                                    <div class="fee-item">
                                        <p class="rs lbl">Funded</p>
                                        <span class="val">50%</span>
                                    </div>
                                    <div class="sep"></div>
                                    <div class="fee-item">
                                        <p class="rs lbl">Pledged</p>
                                        <span class="val">$38,000</span>
                                    </div>
                                    <div class="sep"></div>
                                    <div class="fee-item">
                                        <p class="rs lbl">Days Left</p>
                                        <span class="val">25</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end: .grid_3 > .project-short-->
                <?php } ?>
                
            </div>
        </div>
    </div><!--end: .home-popular-project -->
    
<?php echo $footer; ?> 
<script type="text/javascript"><!--
$('#button-search').bind('click', function() {
	url = 'index.php?route=product/search';
	
	var search = $('#content input[name=\'search\']').prop('value');
	
	if (search) {
		url += '&search=' + encodeURIComponent(search);
	}

	var category_id = $('#content select[name=\'category_id\']').prop('value');
	
	if (category_id > 0) {
		url += '&category_id=' + encodeURIComponent(category_id);
	}
	
	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');
	
	if (sub_category) {
		url += '&sub_category=true';
	}
		
	var filter_description = $('#content input[name=\'description\']:checked').prop('value');
	
	if (filter_description) {
		url += '&description=true';
	}

	location = url;
});

$('#content input[name=\'search\']').bind('keydown', function(e) {
	if (e.keyCode == 13) {
		$('#button-search').trigger('click');
	}
});

$('select[name=\'category_id\']').on('change', function() {
	if (this.value == '0') {
		$('input[name=\'sub_category\']').prop('disabled', true);
	} else {
		$('input[name=\'sub_category\']').prop('disabled', false);
	}
});

$('select[name=\'category_id\']').trigger('change');
--></script>