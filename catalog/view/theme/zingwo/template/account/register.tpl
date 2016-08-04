<?php echo $header; ?>

<div id="registered" class="full-100 pdb75 pdt35">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 pdl35">
                <div class="row">
                    <div class="col-md-10 reg-form clearfix">
                        <h1>Đăng ký</h1>
                        <h4 class="mgt25 hidden-xs">Đã có tài khoản?</h4>
						<p>Vui lòng click <a href="index.php?route=account/login" class="fc-orange"> Đăng nhập </a> để tiếp tục.</p>
                        <form class="form" action="<?php echo $action; ?>" id="frm_register" method="post" enctype="multipart/form-data" >
                            <div class="form-group mgt20">
                                <div class="col-xs-6 pdl0 pdr05">
                                    <input class="form-control" id="lastname" type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="Họ và đệm"/>
                                    <?php if ($error_lastname) { ?>
                                        <div class="text-danger"><?php echo $error_lastname; ?></div>
                                    <?php } ?>
                                </div>
                                <div class="col-xs-6 pdl05 pdr0">
                                    <input class="form-control" id="firstname" type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="Tên"/>
                                    <?php if ($error_firstname) { ?>
                                        <div class="text-danger"><?php echo $error_firstname; ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <input class="form-control" type="email" name="email" value="<?php echo $email; ?>" id="email" placeholder="Email"/>
                                <?php if ($error_email) { ?>
                                    <div class="text-danger"><?php echo $error_email; ?></div>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="password" type="password" name="password" value="" placeholder="Mật khẩu"/>
                                <?php if ($error_password) { ?>
                                    <div class="text-danger"><?php echo $error_password; ?></div>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="confirm" value="" placeholder="Xác nhận mật khẩu"/>
                                <?php if ($error_confirm) { ?>
                                    <div class="text-danger"><?php echo $error_confirm; ?></div>
                                <?php } ?>
                            </div>

                            <!--Captcha Error-->
                                
                            
                            <div class="form-group">
                                <small>Bằng cách nhấp vào Đăng ký, bạn đồng ý với Các điều khoản của chúng tôi và rằng bạn đã đọc Chính sách dữ liệu của chúng tôi, bao gồm Sử dụng cookie.</small>
                            </div>
                            <div class="form-group agree-checkbox">
                                <input type="checkbox" name="agree" id="agree" checked=""/> Tôi đồng ý 
                                <a href="#" target="_blank"><strong>Điều khoản</strong></a>
                            </div>
                            <div class="form-group button mgt10">
                                <input type="submit" class="col-xs-12 col-md-5 col-lg-5 btn btn-primary text-center pdt10 pdb10" name="button" value="Đăng ký" id="register_submit"/>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>



<?php echo $footer; ?>
