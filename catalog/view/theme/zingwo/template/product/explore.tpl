<?php echo $header; ?>

<div class="layout-2cols">
        <div class="content grid_9">
            <div class="search-result-page">
                <div class="top-lbl-val">
                    <h3 class="common-title">Discover / <span class="fc-orange">Comics</span></h3>
                    <div class="count-result">
                        <span class="fw-b fc-black">560</span> projects found in this category
                    </div>
                </div>
                <div class="list-project-in-category">
                    <div class="lbl-type clearfix">
                        <h4 class="rs title-lbl"><a href="#" class="be-fc-orange">Staff picks</a></h4>
                        <a href="#" class="view-all be-fc-orange">View all</a>
                    </div>
                    <div class="list-project">
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
                                                <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
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
                                                <span  style="width: 21%"></span>
                                            </div>
                                        </div>
                                        <div class="group-fee clearfix">
                                            <div class="fee-item">
                                                <p class="rs lbl">Funded</p>
                                                <span class="val">21%</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Pledged</p>
                                                <span class="val">$850K</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Days Left</p>
                                                <span class="val">2</span>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div><!--end: .grid_3 > .project-short-->
                        <?php } ?>
                       
                        <div class="clear"></div>
                    </div>
                </div><!--end: .list-project-in-category -->
                <div class="list-project-in-category">
                    <div class="lbl-type clearfix">
                        <h4 class="rs title-lbl"><a href="#" class="be-fc-orange">Popular this week</a></h4>
                        <a href="#" class="view-all be-fc-orange">View all</a>
                    </div>
                    <div id="list-project-ajax" class="list-project">
                       
                        <?php foreach ($products as $product) { ?>
                            <div class="grid_3">
                                <div class="project-short sml-thumb">
                                    <div class="top-project-info">
                                        <div class="content-info-short clearfix">
                                            <a href="<?php echo $product['href']; ?>" class="thumb-img">
                                                <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>">
                                            </a>
                                            <div class="wrap-short-detail">
                                                <h3 class="rs acticle-title"><a class="be-fc-orange" href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h3>
                                                <p class="rs tiny-desc">by <a href="#" class="fw-b fc-gray be-fc-orange">John Doe</a></p>
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
                                                <span  style="width: 21%"></span>
                                            </div>
                                        </div>
                                        <div class="group-fee clearfix">
                                            <div class="fee-item">
                                                <p class="rs lbl">Funded</p>
                                                <span class="val">21%</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Pledged</p>
                                                <span class="val">$850K</span>
                                            </div>
                                            <div class="sep"></div>
                                            <div class="fee-item">
                                                <p class="rs lbl">Days Left</p>
                                                <span class="val">2</span>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div><!--end: .grid_3 > .project-short-->
                        <?php } ?>
                        
                        <div class="clear"></div>
                    </div>
                </div><!--end: .list-project-in-category -->
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



<?php echo $footer; ?>