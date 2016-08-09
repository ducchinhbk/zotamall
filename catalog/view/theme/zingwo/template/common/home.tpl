<?php echo $header; ?>
<div id="home-slider">
    <div class="container">
        <div class="md-slide-items md-slider" id="md-slider-1" data-thumb-width="105" data-thumb-height="70">
			<div class="md-slide-item slide-0" data-timeout="6000">
				<div class="md-mainimg"><img src="image/catalog/th-slide0.jpg" alt=""/></div>
				<div class="md-objects">
					<div class="md-object rs slide-title" data-x="20" data-y="38" data-width="480" data-height="30" data-start="700" data-stop="5500" data-easein="random" data-easeout="keep">
						<p>Search Money for Your Creative Ideas?</p>
					</div>
					<div class="md-object rs slide-description" data-x="20" data-y="160" data-width="480" data-height="90" data-start="1400" data-stop="7500" data-easein="random" data-easeout="keep">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient monte.</p>
					</div>
					<div class="md-object rs" data-x="20" data-y="260" data-width="120" data-height="23" data-padding-top="9" data-padding-bottom="7" data-padding-left="10" data-padding-right="10" data-start="1800" data-stop="7500" data-easein="random" data-easeout="keep">
						<a href="#" class="btn btn-gray">Learn more</a>
					</div>
					
				</div>
			</div>
			<div class="md-slide-item slide-1" data-timeout="6000">
				<div class="md-mainimg"><img src="image/catalog/th-slide1.jpg" alt=""/></div>
				<div class="md-objects">
					<div class="md-object rs slide-title" data-x="20" data-y="118" data-width="390" data-height="30" data-start="700" data-stop="5500" data-easein="random" data-easeout="random">
						<p>A creative engine</p>
					</div>
					<div class="md-object rs slide-description2" data-x="20" data-y="160" data-width="390" data-height="100" data-start="1400" data-stop="4500" data-easein="random" data-easeout="random">
						<p>Mauris volutpat, lectus vitae pretium sagittis, turpis augue euismod libero</p>
					</div>
					
				</div>
			</div>
			<div class="md-slide-item slide-2" data-timeout="4000">
				<div class="md-mainimg"><img src="image/catalog/th-slide2.jpg" alt=""/></div>
				<div class="md-objects">
					<div class="md-object slide-with-background" data-x="20" data-y="30" data-width="500" data-height="170" data-padding-top="30" data-padding-bottom="30" data-padding-left="35" data-padding-right="35" data-start="300" data-stop="3600" data-easein="random" data-easeout="keep">
						<h2 class="rs slide-title">Start your project today</h2>
						<p class="rs slide-description2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient monte.</p>
					</div>
				</div>
			</div>
		</div>
    </div>
</div><!--end: #home-slider -->
<div id="home">
    <div class="container" style="position: relative">
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
<?php echo $footer; ?>