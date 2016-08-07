<?php echo $header; ?>

<div id="registered" class="full-100 pdb75 pdt35">
    <div class="container">
        <div class="row">
            
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 pdl35">
                <div class="row">
                    <div class="col-md-10 reg-form clearfix">
                        <h1><?php echo $heading_title; ?></h1>
                        <p>Trở về trang <a href="<?php echo $back; ?>" class="fc-orange"> Đăng nhập</a></p>
                        <div class="box">
							<div class="col-md-7 reg-form pdl35 pdr75">
								<form class="form" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="input-email">Email</label>
										<input type="text" name="email" value="<?php echo $email; ?>" placeholder="Nhập email.." id="input-email" class="form-control" />
									    <?php if ($error_warning) { ?>
                                        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
                                        <?php } ?>
                                    </div>
									<div class="form-group button">
										<input type="submit" class="btn btn-primary full-100 text-center pdt10 pdb10" name="button" value="Tiếp tục"/>
									
									</div>
								</form>
							</div>
						</div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo $footer; ?>