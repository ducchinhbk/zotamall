<?php echo $header; ?>
<div class="container ">

	<div class="box product-title-box">
		<div class="box-content">
			<h1><?php echo $heading_title; ?></h1>
		</div>
	</div>
  
	<div class="row">
	
		<div id="content" class="col-sm-12">
			<h1><?php echo $heading_title; ?></h1>
      
      
		  <?php if ($products) { ?>
			<h2><?php echo $text_refine; ?></h2>
			<div class="row category_filter">
				<div class="col-md-2 btn-list-grid">
					<div class="btn-group">
						<button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="<?php echo $button_list; ?>"><i class="fa fa-bars"></i></button>
						<button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="<?php echo $button_grid; ?>"><i class="fa fa-th-large"></i></button>
					</div>
				</div>
				<div class="col-md-3 product-compare">
				  <a href="<?php echo $compare; ?>" id="compare-total"><?php echo $text_compare; ?></a>
				</div>
				<div class="selection">
					<div class="col-md-2 text-right sort_name">
					  <label class="control-label" for="input-sort"><?php echo $text_sort; ?></label>
					</div>
		
					<div class="col-md-2 text-right sort">
					  <select id="input-sort" class="form-control" onchange="location = this.value;">
						<?php foreach ($sorts as $sorts) { ?>
						<?php if ($sorts['value'] == $sort . '-' . $order) { ?>
						<option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
						<?php } else { ?>
						<option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
						<?php } ?>
						<?php } ?>
					  </select>
					</div>
					<div class="col-md-1 text-right limit_name">
					  <label class="control-label" for="input-limit"><?php echo $text_limit; ?></label>
					</div>
					<div class="col-md-2 text-right limit">
					  <select id="input-limit" class="form-control" onchange="location = this.value;">
						<?php foreach ($limits as $limits) { ?>
						<?php if ($limits['value'] == $limit) { ?>
						<option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
						<?php } else { ?>
						<option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
						<?php } ?>
						<?php } ?>
					  </select>
					</div>
				</div>
			</div>
			<br />
			<div class="row grid_product">
	 
			<?php foreach ($products as $product) { ?>
			<div class="product-layout product-list col-xs-12">
				<div class="product-thumb">
					<div class="image">
						<a href="<?php echo $product['href']; ?>">
							<img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" />
						</a>
						<?php if (!$product['special']) { ?>       
						 <?php } else { ?>
						<span class="saleicon sale">Sale</span>         
						<?php } ?>	
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
							<div class="discoveryCard-progressComplete" style="width: 70%;"></div> 
						</div>
							
					</div>
					<div class="discoveryCard-progressLabels"> 
						<div class="discoveryCard-percent">70%</div>
						<div class="discoveryCard-timeleft">6 days left</div> 
					</div>
            
				</div>
			</div>
        <?php } ?>

		</div>
     
		<div class="row">
			<div class="col-sm-6 text-left"><?php echo $results; ?></div>
			<div class="col-sm-6 text-right"><?php echo $pagination; ?></div>
		</div>
	 
       
    
      <?php } ?>
      <?php if (!$categories && !$products) { ?>
      <p><?php echo $text_empty; ?></p>
      <div class="buttons">
        <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
      </div>
      <?php } ?>
      </div>
    </div>
</div>
<?php echo $footer; ?>