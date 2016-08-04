<?php echo $header; ?>
<div class="container">

  <div class="box product-title-box">
    <div class="box-content">
        <h1><?php echo $heading_title; ?></h1>
        <div class="campaignHeader-byline"> 
            <div class="campaignHeader-bylineComponent"> 
                <div class="campaignHeader-city">
                    <a href="javascript:void(0);"><i class="fa fa-map-marker"></i>  Los Angeles</a> 
                </div>
            </div>
            <div class="campaignHeader-bylineComponent"> 
                <div class="campaignHeader-category">
                    <a class="ng-binding" href="#"><i class="fa fa-music"></i>  Music</a> 
                </div> 
            </div>
        </div>       
    </div>
  </div>
  <div class="row">
    
    <div id="content" class="productpage col-sm-9"> 
        <div class="row">
			<div class="col-sm-5">
			  <div class="product-info">
				<?php if ($thumb || $images) { ?>
            
                <ul class="left product-image thumbnails">
                  <?php if ($thumb) { ?>      
            	  <!-- Megnor Cloud-Zoom Image Effect Start -->
            	  	<li class="image"><a class="thumbnail" href="<?php echo $popup; ?>" title="<?php echo $heading_title; ?>"><img src="<?php echo $thumb; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li> 
                  <?php } ?>
                  <?php if ($images) { ?>	  
            	  	 <?php 
            			$sliderFor = 3;
            			$imageCount = sizeof($images); 
            		 ?>	
            		 <div class="additional-carousel">	
            		  <?php if ($imageCount >= $sliderFor): ?>
            		  	<div class="customNavigation">
            				<span class="fa prev fa-angle-left">&nbsp;</span>
            			<span class="fa next fa-angle-right">&nbsp;</span>
            			</div> 
            		  <?php endif; ?>	      
            		  <div id="additional-carousel" class="image-additional <?php if ($imageCount >= $sliderFor){?>product-carousel<?php }?>">
                	    
            			<div class="slider-item">
            				<div class="product-block">
                    			<a href="<?php echo $popup; ?>" title="<?php echo $heading_title; ?>" class="thumbnail" data-image="<?php echo $thumb; ?>"><img  src="<?php echo $thumb; ?>" width="74" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a>
            				</div>
            			</div>
            			  
            			<?php foreach ($images as $image) { ?>
            				<div class="slider-item">
                				<div class="product-block">		
                        			<a href="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>" class="thumbnail elevatezoom-gallery" data-image="<?php echo $image['thumb']; ?>" data-zoom-image="<?php echo $image['popup']; ?>"><img  src="<?php echo $image['thumb']; ?>" width="74" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a>
                				</div>
            				</div>		
            	        <?php } ?>				
                	  </div>
            		 
            		      <span class="additional_default_width" style="display:none; visibility:hidden"></span>
            		  </div>
            		<?php } ?>		  	  
            
            	<!-- Megnor Cloud-Zoom Image Effect End-->
                </ul>
                <?php } ?>
			   </div>
			</div>
			<div class="col-sm-7">
				<h3></h3>
				<?php if ($review_status) { ?>
				  <div class="rating">
					<p>
					  <?php for ($i = 1; $i <= 5; $i++) { ?>
					  <?php if ($rating < $i) { ?>
					  <span class="fa fa-stack"><i class="fa fa-star off fa-stack-1x"></i></span>
					  <?php } else { ?>
					  <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
					  <?php } ?>
					  <?php } ?>
					  <a href="" class="reviews" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $reviews; ?></a>   
					  <a href="" class="write" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $text_write; ?></a>
					</p>
				  
				  </div>
				<?php } ?>
		  
				<ul class="list-unstyled">
					<?php if ($manufacturer) { ?>
					<li><span><?php echo $text_manufacturer; ?></span> <a href="<?php echo $manufacturers; ?>"><?php echo $manufacturer; ?></a></li>
					<?php } ?>
					<li><span><?php echo $text_model; ?> </span><?php echo $model; ?></li>
					<?php if ($reward) { ?>
					<li><span><?php echo $text_reward; ?></span> <?php echo $reward; ?></li>
					<?php } ?>
					<li><span><?php echo $text_stock; ?> </span><?php echo $stock; ?></li>
				</ul>
		  
				<?php if ($price) { ?>
				<ul class="list-unstyled price1">
					<?php if (!$special) { ?>
					<li class="price">
					  Price: <?php echo $price; ?>
					</li>
					<?php } else { ?>
					<li class="price">
					   Price: <?php echo $special; ?>
					</li>
					<li class="price-old"><span style="text-decoration: line-through;"><?php echo $price; ?></span></li>
					<?php } ?>
				   
				</ul>
				<?php } ?>
          
				<div id="product">
					<div class="form-group">
					  <label class="control-label quantity" for="input-quantity"><?php echo $entry_qty; ?></label>
					  <input type="text" name="quantity" value="<?php echo $minimum; ?>" size="2" id="input-quantity" class="form-control" />
					  <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
				   
					  <button type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary btn-lg btn-block"><?php echo $button_cart; ?></button>
					</div>
					<?php if ($minimum > 1) { ?>
					<div class="alert alert-info"><?php /*?><i class="fa fa-info-circle"></i><?php */?> <?php echo $text_minimum; ?></div>
					<?php } ?>
				</div>
		  
				<div class="btn-group">
					<button type="button"  data-toggle="tooltip" class="btn btn-default wishlist_btn" title="<?php echo $button_wishlist; ?>" onclick="wishlist.add('<?php echo $product_id; ?>');"><i class="fa fa-heart-o "></i>
						<span><?php echo $button_wishlist; ?></span>
					</button>
					<button type="button" data-toggle="tooltip" class="btn btn-default compare_btn" title="<?php echo $button_compare; ?>" onclick="compare.add('<?php echo $product_id; ?>');"><i class="fa fa-columns "></i>
						<span><?php echo $button_compare; ?></span>
					</button>
				</div>
		  
         
      
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style" data-url="<?php echo $share; ?>"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> 
				<!-- AddThis Button END --> 
          
			</div>
			<div class="col-sm-12">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tab-description" data-toggle="tab"><?php echo $tab_description; ?></a>
					</li>
					<?php if ($review_status) { ?>
						<li><a href="#tab-review" data-toggle="tab"><?php echo $tab_review; ?></a></li>
					<?php } ?>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab-description"><?php echo $description; ?></div>
				   
					<?php if ($review_status) { ?>
					<div class="tab-pane" id="tab-review">
						<form class="form-horizontal" id="form-review">
							<div id="review"></div>
							<h2><?php echo $text_write; ?></h2>
							<div class="form-group required">
							  <div class="col-sm-12">
								<label class="control-label" for="input-name"><?php echo $entry_name; ?></label>
								<input type="text" name="name" value="<?php echo $customer_name; ?>" id="input-name" class="form-control" />
							  </div>
							</div>
							<div class="form-group required">
							  <div class="col-sm-12">
								<label class="control-label" for="input-review"><?php echo $entry_review; ?></label>
								<textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
								<div class="help-block"><?php echo $text_note; ?></div>
							  </div>
							</div>
							<div class="form-group required">
								<div class="col-sm-12">
									<label class="control-label"><?php echo $entry_rating; ?></label>
									&nbsp;&nbsp;&nbsp; <?php echo $entry_bad; ?>&nbsp;
									<input type="radio" name="rating" value="1" />
									&nbsp;
									<input type="radio" name="rating" value="2" />
									&nbsp;
									<input type="radio" name="rating" value="3" />
									&nbsp;
									<input type="radio" name="rating" value="4" />
									&nbsp;
									<input type="radio" name="rating" value="5" />
									&nbsp;<?php echo $entry_good; ?>
								</div>
							</div>
							<?php echo $captcha; ?>
							<div class="buttons clearfix">
							  <div class="pull-right">
								<button type="button" id="button-review" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary"><?php echo $button_continue; ?></button>
							  </div>
							</div>
						</form>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php if ($products) { ?>
      
		<div class="box">
		   <div class="box-content">
			   <div class="box-heading"><?php echo $text_related; ?></div>
				  <div id="products-related" class="related-products">
			
					<?php 
						$sliderFor = 5;
						$productCount = sizeof($products); 
					?>
				
					<?php if ($productCount >= $sliderFor): ?>
						<div class="customNavigation">
							<a class="fa prev fa-angle-left">&nbsp;</a>
							<a class="fa next fa-angle-right">&nbsp;</a>
						</div>	
					<?php endif; ?>	
					
					<div class="box-product <?php if ($productCount >= $sliderFor){?>product-carousel<?php }else{?>productbox-grid<?php }?>" id="<?php if ($productCount >= $sliderFor){?>related-carousel<?php }else{?>related-grid<?php }?>">
					
				  <?php foreach ($products as $product) { ?>
					<div class="<?php if ($productCount >= $sliderFor){?>slider-item<?php }else{?>product-items<?php }?>">
						<div class="product-block product-thumb transition">
							<div class="product-block-inner">
							   <div class="image">
									<a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a>
								</div>
								<div class="caption">
									 <h4>
										<a href="<?php echo $product['href']; ?>" title="<?php echo ($product['name']); ?>"><?php echo ($product['name']); ?></a>
									</h4>
									<p>Combine the freedom of pen and paper with the utility of the cloud. Microwave. Repeat.</p>   
								
							   </div>
							   <div class="button-group">
									<p class="price">
										<?php echo $product['price']; ?>
									</p>
									<div class="discoveryCard-progress"> 
										<div class="discoveryCard-progressComplete" style="width: 100%;"></div> 
									</div>
									
								</div>
								<div class="discoveryCard-progressLabels"> 
									<div class="discoveryCard-percent">101%</div>
									<div class="discoveryCard-timeleft">6 days left</div> 
								</div>	
						   </div>
						</div>
					</div>
					
				<?php } ?>
				  </div>
		
			  <span class="related_default_width" style="display:none; visibility:hidden"></span>
			
			   </div>
		  
			</div>
		</div>
		
		<?php } ?>
	</div>  
   
    <aside id="column-left" class="col-sm-3 hidden-xs">
      <div class="box campaignGoal-box">
            <div class="box-content">
                <div class="campaignGoal-standardContainer"> 
                    <div class="campaignGoal-funds"> 
                        <span class="campaignGoal-fundsAmount">
                            <span class="currency">
                                <span>$12,098</span><em>USD</em>
                            </span>
                        </span> 
                        <div class="campaignGoal-fundsRaisedDaysAndBackers"> raised 
                            <span class="campaignGoal-fundsRaisedDays">in <em>15</em> days</span> 
                        </div> 
                        <span class="campaignGoal-fundsRaisedGoal"> raised of <span class="numeral ng-binding">$40,000 USD</span> </span> 
                        <div class="campaignGoal-bar"> 
                            <div class="campaignGoal-barProgressFill" style="width: 30%;"></div> 
                        </div> 
                    </div> 
                    <div class="campaignGoal-barMeta"> 
                        <div class="campaignGoal-barMetaFunding" ><em>30%</em> funded</div> 
                        <div class="campaignGoal-barMetaRemaining"><em>2</em> months&nbsp;left</div> 
                    </div> 
                    <div class="campaignGoal-footer">
                        <div class="campaignGoal-verifiedNonProfit"> 
                            <i class="fa fa-flag-o" aria-hidden="true"></i>
                            <div class="campaignGoal-verifiedNonProfitText">Verified Nonprofit</div> 
                        </div>
                        <div class="campaignGoal-goal"> 
                            <div class="campaignGoal-goalMeta"> 
                                <div class="campaignGoal-goalAmountContainer"> 
                                    <span class="campaignGoal-goalAmount">
                                        <span class="currency"><span>$40,000</span><em>USD</em></span>
                                    </span> 
                                    goal 
                                </div> 
                                <div class="campaignGoal-goalFundingType"> 
                                    <span class="i-status ng-binding">Flexible Funding</span> 
                                </div> 
                            </div> 
                        </div>
                    </div> 
                </div>
                
                <div class="desktop-cta-section"> 
                    <div class="ng-pristine"> 
                        <span class="earlyContribute-title ng-binding">Your contribution</span> 
                        <input type="number" class="earlyContribute-input" name="userAmountInput" min="1" max="1000000"  placeholder="$5, $10, $100"/> 
                        <a href="#" class="btn btn-primary btn-lg btn-block">Contribute Now</a> 
                    </div>
                </div>
            </div>
        </div> 
        <div class="box">
          <div class="box-heading">Mới nhất</div>
            <div class="box-content">
				<div class="customNavigation">
        			<a class="fa prev fa-angle-left">&nbsp;</a>
        			<a class="fa next fa-angle-right">&nbsp;</a>
        		</div>	
	            <div class="box-product product-carousel" id="latest-carousel">
                  <div class="slider-item">
                    <div class="product-block product-thumb transition">
                	  <div class="product-block-inner">
                		<div class="image">
                			<a href="http://localhost/zingwo/samsung-galaxy-tab-10-1"><img src="http://localhost/zingwo/image/cache/catalog/demo/samsung_tab_1-236x250.jpg" alt="Samsung Galaxy Tab 10.1" title="Samsung Galaxy Tab 10.1" class="img-responsive"></a>
                            
                		</div>
                		<div class="caption">
                 	      <h4>
                            <a href="http://localhost/zingwo/samsung-galaxy-tab-10-1" title="Samsung Galaxy Tab 10.1">
                                Samsung Galaxy Tab 10.1                    
                            </a>
                		  </h4>
                		  <p>Combine the freedom of pen and paper with the utility of the cloud. Microwave. Repeat.</p>
                			
                        </div>
 	    
                		<div class="button-group">
                            <p class="price">
                                242 VND        			</p>
                            <div class="discoveryCard-progress"> 
                                <div class="discoveryCard-progressComplete" style="width: 100%;"></div> 
                            </div>
                            
                        </div>
                        <div class="discoveryCard-progressLabels"> 
                            <div class="discoveryCard-percent">101%</div>
                            <div class="discoveryCard-timeleft">6 days left</div> 
                        </div>  
                   </div>
             	</div>
              </div>
  
              <div class="slider-item">
                <div class="product-block product-thumb transition">
        	       <div class="product-block-inner ">
    	  	
            		<div class="image">
            			<a href="http://localhost/zingwo/ipod-classic"><img src="http://localhost/zingwo/image/cache/catalog/demo/ipod_classic_1-236x250.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"></a>
                    </div>
      	
            		<div class="caption">
             	      <h4>
                        <a href="http://localhost/zingwo/ipod-classic" title="iPod Classic">
                            iPod Classic
                        </a> 
            		  </h4>
            		  <p>Combine the freedom of pen and paper with the utility of the cloud. Microwave. Repeat.</p>
            			
                    </div>
 	    
            		<div class="button-group">
                        <p class="price"> 122 VND </p>
                        <div class="discoveryCard-progress"> 
                            <div class="discoveryCard-progressComplete" style="width: 100%;"></div> 
                        </div>
                        
                    </div>
                    <div class="discoveryCard-progressLabels"> 
                        <div class="discoveryCard-percent">101%</div>
                        <div class="discoveryCard-timeleft">6 days left</div> 
                    </div>  
                </div>
     	      </div>
            </div>    
          </div>
        </div>
      </div>
    <span class="latest_default_width" style="display:none; visibility:hidden"></span>
  </aside>
    
 </div>
	
</div>
<script type="text/javascript"><!--
$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
	$.ajax({
		url: 'index.php?route=product/product/getRecurringDescription',
		type: 'post',
		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
		dataType: 'json',
		beforeSend: function() {
			$('#recurring-description').html('');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();
			
			if (json['success']) {
				$('#recurring-description').html(json['success']);
			}
		}
	});
});
//--></script> 
<script type="text/javascript"><!--
$('#button-cart').on('click', function() {
	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-cart').button('loading');
		},
		complete: function() {
			$('#button-cart').button('reset');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();
			$('.form-group').removeClass('has-error');

			if (json['error']) {
				if (json['error']['option']) {
					for (i in json['error']['option']) {
						var element = $('#input-option' + i.replace('_', '-'));
						
						if (element.parent().hasClass('input-group')) {
							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						} else {
							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						}
					}
				}
				
				if (json['error']['recurring']) {
					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
				}
				
				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
			}
			
			if (json['success']) {
				$('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				
				$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '<i class=" fa fa-angle-down"></i></span>');
				
				$('html, body').animate({ scrollTop: 0 }, 'slow');
				
				$('#cart > ul').load('index.php?route=common/cart/info ul li');
			}
		},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);		
		}
	});
});
//--></script> 

<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
  e.preventDefault();

    $('#review').fadeOut('slow');

    $('#review').load(this.href);

    $('#review').fadeIn('slow');
});

$('#review').load('index.php?route=product/product/review&product_id=<?php echo $product_id; ?>');

$('#button-review').on('click', function() {
	$.ajax({
		url: 'index.php?route=product/product/write&product_id=<?php echo $product_id; ?>',
		type: 'post',
		dataType: 'json',
		data: $("#form-review").serialize(),
		beforeSend: function() {
			$('#button-review').button('loading');
		},
		complete: function() {
			$('#button-review').button('reset');
		},
		success: function(json) {
			$('.alert-success, .alert-danger').remove();

			if (json['error']) {
				$('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			}

			if (json['success']) {
				$('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				$('input[name=\'name\']').val('');
				$('textarea[name=\'text\']').val('');
				$('input[name=\'rating\']:checked').prop('checked', false);
			}
		}
	});
});

$(document).ready(function() {
	$('.thumbnails').magnificPopup({
		type:'image',
		delegate: 'a',
		gallery: {
			enabled:true
		}
	});
});
//--></script>


<?php echo $footer; ?>