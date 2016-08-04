<?php echo $header; ?>

<div class="login-regis-page">
    <div class="layout-2cols">
        <div class="container_12 pop-content">
            <div class="grid_12 wrap-btn-close ta-r">
                    
            </div>
            <div class="grid_5 prefix_3">
					<div class="form login-form">
                        
						<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
							<h3 class="rs title-form"></h3>
							<div class="box-white">
								<h4 class="rs title-box"><?php echo $heading_title; ?></h4>
								<p class="rs"><?php echo $text_email; ?></p>
								<div class="form-action">
									<label for="txt_email_login">
                                        <?php if ($error_warning) { ?>
                                        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
                                        <?php } ?>
										<input type="text" name="email" value="<?php echo $email; ?>" placeholder="Email.." id="input-email" class="txt fill-width" />
									</label>

									 <p class="rs ta-c" style="margin: 10px 0 20px 0;">
										<a href="<?php echo $login; ?>" class="fc-orange">Back to login page</a>
									</p>
									<p class="rs ta-c pb10">
										<button class="btn btn-red btn-submit" type="submit">Continue</button>
									</p>
								   
								</div>
							</div>
						</form>
					</div>
            </div>
                
            <div class="clear"></div>
        </div>
			
    </div>
</div>







<div class="container">
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
  <?php } ?>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
      <h1><?php echo $heading_title; ?></h1>
      <p><?php echo $text_email; ?></p>
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend><?php echo $text_your_email; ?></legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email"><?php echo $entry_email; ?></label>
            <div class="col-sm-10">
              <input type="text" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $entry_email; ?>" id="input-email" class="form-control" />
            </div>
          </div>
        </fieldset>
        <div class="buttons clearfix">
          <div class="pull-left"><a href="<?php echo $back; ?>" class="btn btn-default"><?php echo $button_back; ?></a></div>
          <div class="pull-right">
            <input type="submit" value="<?php echo $button_continue; ?>" class="btn btn-primary" />
          </div>
        </div>
      </form>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>