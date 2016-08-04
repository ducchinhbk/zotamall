<?php echo $header; ?>

<div id="registered" class="full-100 pdb75 pdt35">
    <div class="container">
        <div class="row">
            
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 pdl35">
                <div class="row">
                    <div class="col-md-10 reg-form clearfix">
                        <h1>Đăng ký</h1>
                        <h4 class="mgt25 hidden-xs">Chưa có tài khoản?</h4>
						<p>Vui lòng click <a href="<?php echo $register; ?>" class="fc-orange"> Đăng ký</a> để tiếp tục.</p>
                        <div class="box">
							<div class="col-md-7 reg-form pdl35 pdr75">
								<form class="form" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="input-email">Email</label>
										<input type="text" name="email" value="<?php echo $email; ?>"  id="input-email" class="form-control" />
									</div>
									<div class="form-group">
										<label for="password">Mật khẩu</label>
										<input id="password" name="password" value="<?php echo $password; ?>" class="form-control" type="password"/>
									</div>
									<div class="form-group remember">
										<?php if ($error_warning) { ?>
                                          <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
                                          <?php } ?>
                                        <?php if ($redirect) { ?>
                                          <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
                                        <?php } ?>
									</div>
									<div class="form-group button">
										<input type="submit" class="btn btn-primary full-100 text-center pdt10 pdb10" name="button" value="Đăng nhập"/>
										<p class="pdt05"><a class="clmain" href="<?php echo $forgotten; ?>">Quên mật khẩu?</a></p>
									</div>
								</form>
							</div>
							<div class="col-md-5 reg-social pdl0">
								<h2>Đăng nhập nhanh không cần đăng ký</h2>
								<a href="<?php echo $fbLogin ?>" class="btn btn-facebook"><i class="fa fa-facebook-square"></i> Đăng nhập với Facebook</a>
								<a href="user/login/google" class="btn btn-google"><i class="fa fa-google-plus-square"></i> Đăng nhập với Google+</a>
							</div>
						</div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $footer; ?>