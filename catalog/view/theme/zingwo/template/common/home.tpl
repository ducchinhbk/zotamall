<?php echo $header; ?>
<div class="hero hero_image" style="background: url('image/catalog/nb_mainbg.png')!important;">
    <div class="container">
        <div class="hero__content txt-center txt-white">
            <div class="row">
                <div class="col-md-10 small-centered">
                    <h1 class="h2">Khám phá khuyến mãi quanh bạn</h1>
                    <div class="hero__search homepage-center-search">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 pd0">
                                <div class="search-location">
                                    <button class="location-name dropdown-toggle" data-toggle="dropdown">
                                        <span>Địa điểm</span>
                                    </button>
                                    <ul id="home-location" class="dropdown-menu dropdown-menu-address">
        								<?php foreach($cities as $city) {?>
        								<li class="lv2" ><a data-city="<?php echo $city['link']; ?>" id="city-<?php echo $city['link']; ?>"><?php echo $city['name']; ?></a></li>
                                        <?php } ?>
         							</ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9 pd0">
                                <form id="searchForm" action="promotion/explore"method="get">
                                    <div class="hero-search-group">
                                        <div class="hero-search-input" id="hero-search-input">
                                            <div class="loader hide-loader"></div>
                                            <input type="search" placeholder="Search restaurants, spa, events, things to do..." class="ui-autocomplete-input search-form-input" autocomplete="off"/>
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
            <div class="homepage-center-cat hero__categories">
                <div class="row">
                    <ul>
                        <li class="js-ga-icon-item">
                            <a href="#">
                                <img height="60px" width="60px" alt="Food &amp; Drink" src="//dynamic.nearbuy.com/c1fe2c98-57c3-4568-b2aa-503027b01c6b"/>
                                <p>Food &amp; Drink</p>
                            </a>
                        </li>
                        <li class="js-ga-icon-item">
                            <a href="#">
                                <img height="60px" width="60px" alt="Spa &amp; Massage" src="//dynamic.nearbuy.com/cf370019-bc71-40d0-ad21-1da05a69306b"/>
                                <p>Spa &amp; Massage</p>
                            </a>
                        </li>
                        <li class="js-ga-icon-item">
                            <a href="#">
                                <img height="60px" width="60px" alt="Beauty &amp; Salon" src="//dynamic.nearbuy.com/bce6a031-2e5e-4bd3-88cb-c9ec55842ecc"/>
                                <p>Beauty &amp; Salon</p>
                            </a>
                        </li>
                        <li class="js-ga-icon-item">
                            <a href="#">
                                <img height="60px" width="60px" alt="Health &amp; Wellness" src="//dynamic.nearbuy.com/37dff27c-cfc1-4c44-8322-b4121c50f297"/>
                                <p>Health &amp; Wellness</p>
                            </a>
                        </li>
                        <li class="js-ga-icon-item">
                            <a href="#">
                                <img height="60px" width="60px" alt="Activities" src="//dynamic.nearbuy.com/463bcae3-36f1-4ec4-ba40-551319dcbfa5"/>
                                <p>Activities</p>
                            </a>
                        </li>
                        <li class="js-ga-icon-item">
                            <a href="#">
                                <img height="60px" width="60px" alt="Personal, Home &amp; Auto" src="//dynamic.nearbuy.com/d074c224-456c-419e-a1f2-f729c71e118e"/>
                                <p>Personal, Home &amp; Auto</p>
                            </a>
                        </li>
                        <li class="js-ga-icon-item">
                            <a href="#">
                                <img alt="Travel" src="//d2xy0t4o47vcev.cloudfront.net/resources/local/images/nearbuy/travel_new.png" height="60px" width="60px"/>
                                <p>Hotels</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="home">
    <div class="container" style="position: relative">
        <div class="row nb-promise-wraper">
            <div class="col-md-3 nb-promise-logo">
                <img src="//d2xy0t4o47vcev.cloudfront.net/resources/local/images/nb-promise1.png" data-src="//d2xy0t4o47vcev.cloudfront.net/resources/local/images/nb-promise1.png" alt="nearbuy-promise" data-lzled="true"/>
            </div>
            <div class="col-md-3 columns nb-promise-table">
                <img src="//d2xy0t4o47vcev.cloudfront.net/resources/local/images/nb-cancel-before1.png" data-src="//d2xy0t4o47vcev.cloudfront.net/resources/local/images/nb-cancel-before1.png" alt="nearbuy-promise" data-lzled="true"/>
                <div class="nb-promises-content">
                    <h3>cancel before using your voucher?</h3>
                    <p>No problem</p>
                </div>
            </div>
            <div class="col-md-3 nb-promise-table">
                <img src="//d2xy0t4o47vcev.cloudfront.net/resources/local/images/nb-voucher-expired1.png" data-src="//d2xy0t4o47vcev.cloudfront.net/resources/local/images/nb-voucher-expired1.png" alt="nearbuy-promise" data-lzled="true"/>
                <div class="nb-promises-content">
                    <h3>voucher expired before you could use it?</h3>
                    <p>No problem</p>
                </div>
            </div>
            <div class="col-md-3 nb-promise-table left">
                <img src="//d2xy0t4o47vcev.cloudfront.net/resources/local/images/nb-promised-icon1.png" data-src="//d2xy0t4o47vcev.cloudfront.net/resources/local/images/nb-promised-icon1.png" alt="nearbuy-promise" data-lzled="true"/>
                <div class="nb-promises-content">
                    <h3>didn't get what we promised?</h3>
                    <p>No problem</p>
                </div>
            </div>
        </div>
		<div class="row">
			<div id="adsvip" class="full-100">
                <div class="headbox full-100">
                    <h2 class="childrenr fleft mgb20">
                        Top khuyến mãi
                    </h2>
                </div>
				<div id="adsvip-item" class="full-1001">
                    <?php foreach($featured_promotions as $promotion ){ ?>
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
		</div>
        
	</div>
</div>
<div id="hone-category">
    <div class="container">
        <div class="row">
            <div class="headbox full-100">
                <h2 class="childrenr fleft mgb20">
                    Top danh mục
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-8 mgb15">
                <a href="<?php echo $categories[5]['link']; ?>" class="category-card category-music" >
                    <div class="category-card__wrapper">
                        <div class="category-card__tint">
                            <div class="category-card__image" style="background-image: url(http://localhost/saleoff/image/catalog/img_category_music.jpg);"></div>
                        </div>
                        <div class="category-card__text-wrapper">
                            <h4 class="category-card__label">
                                <?php echo $categories[5]['name']; ?>
                            </h4>
                            <p class="category-card__desc">
                                Intimate house concerts, major music festivals, and the occasional dance party
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 mgb15">
                <a href="<?php echo $categories[2]['link']; ?>" class="category-card category-food" >
                    <div class="category-card__wrapper">
                        <div class="category-card__tint">
                            <div class="category-card__image" style="background-image: url(http://localhost/saleoff/image/catalog/img_category_food.jpg);"></div>
                        </div>
                        <div class="category-card__text-wrapper">
                            <h4 class="category-card__label">
                                <?php echo $categories[2]['name']; ?>
                            </h4>
                            <p class="category-card__desc">
                                Dinner parties, tastings, and big-time festivals
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 mgb15">
                <a href="<?php echo $categories[0]['link']; ?>" class="category-card category-classes">
                    <div class="category-card__wrapper">
                        <div class="category-card__tint">
                            <div class="category-card__image" style="background-image: url(http://localhost/saleoff/image/catalog/img_category_classes.jpg);"></div>
                        </div>
                        <div class="category-card__text-wrapper">
                            <h4 class="category-card__label">
                                <?php echo $categories[0]['name']; ?>
                            </h4>
                            <p class="category-card__desc">
                                Enlightening seminars, technical workshops, and fitness classes
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 mgb15">
                <a href="<?php echo $categories[1]['link']; ?>" class="category-card category-arts">
                    <div class="category-card__wrapper">
                        <div class="category-card__tint">
                            <div class="category-card__image" style="background-image: url(http://localhost/saleoff/image/catalog/img_category_arts.jpg);"></div>
                        </div>
                        <div class="category-card__text-wrapper">
                            <h4 class="category-card__label">
                                <?php echo $categories[1]['name']; ?>
                            </h4>
                            <p class="category-card__desc">
                                Plays, comedy nights, art exhibitions and film festivals
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 mgb15">
                <a href="<?php echo $categories[6]['link']; ?>" class="category-card category-parties">
                    <div class="category-card__wrapper">
                        <div class="category-card__tint">
                            <div class="category-card__image" style="background-image: url(http://localhost/saleoff/image/catalog/img_category_parties.jpg);"></div>
                        </div>
                        <div class="category-card__text-wrapper">
                            <h4 class="category-card__label">
                                <?php echo $categories[6]['name']; ?>
                            </h4>
                            <p class="category-card__desc">
                                Casual happy hours, singles nights, and all-night celebrations
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4 mgb15">
                <a href="<?php echo $categories[4]['link']; ?>" class="category-card category-sports">
                    <div class="category-card__wrapper">
                        <div class="category-card__tint">
                            <div class="category-card__image" style="background-image: url(http://localhost/saleoff/image/catalog/img_category_sports.jpg);"></div>
                        </div>
                        <div class="category-card__text-wrapper">
                            <h4 class="category-card__label">
                                <?php echo $categories[4]['name']; ?>
                            </h4>
                            <p class="category-card__desc">
                                Obstacle races, drop-in yoga classes, and the big game
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-8 mgb15">
                <a href="<?php echo $categories[3]['link']; ?>" class="category-card category-networking" >
                    <div class="category-card__wrapper">
                        <div class="category-card__tint">
                            <div class="category-card__image" style="background-image: url(http://localhost/saleoff/image/catalog/img_category_networking.jpg);"></div>
                        </div>
                        <div class="category-card__text-wrapper">
                            <h4 class="category-card__label">
                                <?php echo $categories[3]['name']; ?>
                            </h4>
                            <p class="category-card__desc">
                                Business mixers, hobby meetups, and panel discussions
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"><!--
$('#home-location li a').on('click', function() {
    var city_name = $(this).text();
    var link = $(this).data('city');
    var city_input = '<input type="hidden" name="city" value="' + link + '" />';
    $('.search-location button span').text(city_name);
    $('#hero-search-input').find('input[name="city"]').remove();
    
    $('#hero-search-input').append(city_input);
});

//--></script>
<?php echo $footer; ?>