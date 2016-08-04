<div class="box home-featured-box">
  <div class="box-heading "><?php echo $heading_title; ?></div>
  <div class="box-content">
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
	
	<div class="box-product <?php if ($productCount >= $sliderFor){?>product-carousel<?php }else{?>productbox-grid<?php }?>" id="<?php if ($productCount >= $sliderFor){?>featured-carousel<?php }else{?>featured-grid<?php }?>">
        <?php foreach ($products as $product) { ?>
          <div class="<?php if ($productCount >= $sliderFor){?>slider-item<?php }else{?>product-items<?php }?>">
            <div class="product-block product-thumb transition">
        	  <div class="product-block-inner ">
    	  	
        		<div class="image">
        			<a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a>
                    <?php if (!$product['special']) { ?>       
        			 <?php } else { ?>
        			 <span class="saleicon sale">Sale</span>         
        			 <?php } ?>	
        		</div>
      	
        		<div class="caption">
         	      <h4>
                    <a href="<?php echo $product['href']; ?>" title="<?php echo ($product['name']); ?>">
                        <?php echo ($product['name']); ?>
                    </a>
                    
        		  </h4>
        		  <p>Combine the freedom of pen and paper with the utility of the cloud. Microwave. Repeat.</p>
        			
                </div>
 	    
        		<div class="button-group">
                    <p class="price">
                        <?php echo $product['price']; ?>
        			</p>
                    <div class="discoveryCard-progress"> 
                        <div class="discoveryCard-progressComplete" style="width: 70%;"></div> 
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
  </div>
</div>
<span class="featured_default_width" style="display:none; visibility:hidden"></span>
