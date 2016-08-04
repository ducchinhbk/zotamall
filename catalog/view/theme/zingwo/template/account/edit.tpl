<?php echo $header; ?>

<div class="container">
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
  <?php } ?>
  <div class="row">
    <div id="content" class="col-sm-10 col-sm-offset-1 bg-white pdb30">
      <h1><?php echo $heading_title; ?></h1>
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" class="form-horizontal form">
        <fieldset>
          <legend><?php echo $text_your_details; ?></legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">Tên</label>
            <div class="col-sm-4">
              <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="Tên" id="input-firstname" class="form-control" />
              <?php if ($error_firstname) { ?>
              <div class="text-danger"><?php echo $error_firstname; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname">Họ</label>
            <div class="col-sm-4">
              <input type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="Họ" id="input-lastname" class="form-control" />
              <?php if ($error_lastname) { ?>
              <div class="text-danger"><?php echo $error_lastname; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone">Điện thoại</label>
            <div class="col-sm-4">
              <input type="tel" name="telephone" value="<?php echo $telephone; ?>" placeholder="Điện thoại" id="input-telephone" class="form-control" />
              <?php if ($error_telephone) { ?>
              <div class="text-danger"><?php echo $error_telephone; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-aboutme">Giới thiệu</label>
            <div class="col-sm-6">
              <textarea name="aboutme" placeholder="Giới thiệu về tôi" id="input-aboutme" class="form-control input-aboutme"><?php echo $aboutme; ?></textarea>
              <?php if ($error_aboutme) { ?>
              <div class="text-danger"><?php echo $error_aboutme; ?></div>
              <?php } ?>
            </div>
          </div>
         <div class="form-group required">
            <div class="col-md-4">
                <label for="image">Ảnh đại diện</label>
                <div class="col-md-12 panel panel-default pdl0 pdr0">
				    <div class="panel-body">
				        <div class="col-md-3 pdl0 text-center pdt25">
						  <i class="fa fa-camera"></i>
						</div>
				        <div class="col-md-7 pdr0">
						  <div role="group" class="btn-group-vertical">
						      <br/>
						       <input id="uploadImage" class="btn btn-default" type="file" accept="image/*" name="uploadImage" title="Tải ảnh lên"/>
						      					
						  </div>
						</div>
                    </div>
				</div>
				<div class="col-md-12 pdl0 pdr0">
				    <small class="noti">Dung lượng ảnh tối đa cho phép: 2mb</small>
                    <span style="color:#ea6153;" class="text-danger" id="pla_image_error"></span>
				</div>
            </div>
            <div class="col-md-6">
				<label for="categories">Preview ảnh</label>
                <div class="col-md-12 panel panel-default pdl0 pdr0">
                    <div class="panel-heading" id="previewImage" style="height:208px;padding:0;">
                        <img style="width: 100%;height:100%;" class="img-resposive" src="<?php echo $thumb; ?>"/>
                        <input type="hidden" name="image" id="image-src" value="<?php echo $image; ?>"/>
                    </div>
                </div>
                
            </div>
        </div>
        </fieldset>
        <fieldset>
          <legend>Thay đổi mật khẩu</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-old-password">Mật khẩu hiện tại</label>
            <div class="col-sm-4">
              <input type="password" name="old_password" value="" placeholder="********" id="input-old-password" class="form-control" />
              <?php if ($error_firstname) { ?>
              <div class="text-danger"><?php echo $error_firstname; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-new-password">Mật khẩu mới</label>
            <div class="col-sm-4">
              <input type="password" name="new_password" value="" placeholder="Nhập mẫu khẩu mới" id="input-new-password" class="form-control" />
              <?php if ($error_new_password) { ?>
              <div class="text-danger"><?php echo $error_new_password; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-confirm-password">Xác nhận</label>
            <div class="col-sm-4">
              <input type="password" name="confirm_password" value="" placeholder="Xác nhận mật khẩu mới" id="input-confirm-password" class="form-control" />
              <?php if ($error_confirm_password) { ?>
              <div class="text-danger"><?php echo $error_confirm_password; ?></div>
              <?php } ?>
            </div>
          </div>
        </fieldset>
        <div class="buttons clearfix">
          <div class="pull-right">
            <input type="submit" value="Lưu" class="btn btn-lg btn-danger" />
          </div>
        </div>
      </form>
      </div>
    </div>
</div>

<script type="text/javascript"><!--
$('#uploadImage').on('change', function() {
    var data = new FormData();
    data.append('uploadImage', $('#uploadImage').prop('files')[0]);
    
	$.ajax({
	    type: 'POST',
	    processData: false, // important
        contentType: false, // important
        data: data,
		url: 'account/edit/image_upload',
        dataType: 'json',
		beforeSend: function() {
			$('#uploadImage').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
            $('#pla_image_error').html('');
		},
		complete: function() {
			$('.fa-spin').remove();
		},
		success: function(json) {
		    if (json['error']) {
                $('#pla_image_error').html(json['error']);
            }
            else{
                var image = 'image/'+ json['image'];
                $('.img-resposive').attr("src",image);
                $('#image-src').val(json['image']);
            }
			
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});
//--></script>
<?php echo $footer; ?>