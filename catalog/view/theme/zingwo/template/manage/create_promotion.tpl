 
    <form class="form" method="post" id="form-post-promotion" enctype="multipart/form-data">
        <div class="alert alert-danger hidden alert-error-event"> </div>
 
        <div class="row mgb15">
            <div class="col-md-9 form-group">
				<label for="name">Tên khuyến mãi <span>*</span></label>
				<input type="text" name="name" id="name" value="<?php echo $promotion_info['name']; ?>" placeholder="Tên chương trình khuyến mãi" class="form-control"/>
                <span style="color:#ea6153;" class="text-danger" id="pro_name_error"></span>
            </div>

        </div>
        <div class="row mgb15">
            <div class="col-md-3 form-group">
                <label for="category_id">Danh mục <span>*</span></label>
                <select id="category_id" name="category_id" class="form-control" >
                    <option value="0">Chọn doanh mục</option>
                    <?php foreach($categories as $category){?>
                        <option value="<?php echo $category['category_id']; ?>" <?php echo ($category['category_id']==$promotion_info['category_id'])? "selected": ""; ?>><?php echo $category['name']; ?></option>
                    
                    <?php } ?>
                </select>
                <span style="color:#ea6153;" class="text-danger" id="pro_category_id_error"></span>
            </div>
        </div>


        <div class="row mgb15">
            <div class="col-md-3 form-group">
                <label for="start_date">Thời gian bắt đầu <span>*</span></label>

                <input type="text" id="start_day_event" name="start_date" value="<?php echo $promotion_info['start_date']; ?>" placeholder="Ngày bắt đầu" class="form-control" />
                <span style="color:#ea6153;" class="text-danger" id="pro_start_date_error"></span>
            </div>
            <div class="col-md-2 form-group">
                <label for="start_hour">Giờ <span>*</span></label>
                <input type="text" id='start_hour_event' name='start_hour' value="<?php echo $promotion_info['start_hour']; ?>" placeholder="Giờ bắt đầu" class='form-control'/>
                <span style="color:#ea6153;" class="text-danger" id="pro_start_hour_error"></span>
            </div>
            <div class="col-md-3 col-md-offset-1 form-group">
                <label for="end_date">Thời gian kết thúc <span>*</span></label>
                <input type="text" id="end_day_event" name="end_date" value="<?php echo $promotion_info['end_date']; ?>" placeholder="Ngày kết thúc" class="form-control"/>
                <span style="color:#ea6153;" class="text-danger" id="pro_end_date_error"></span>
            </div>
            <div class="col-md-2 form-group">
                <label for="end_hour">Giờ <span>*</span></label>
                <input type="text" id='end_hour_event' name='end_hour' value="<?php echo $promotion_info['end_hour']; ?>" placeholder="Giờ kết thúc" class='form-control'/>
                <span style="color:#ea6153;" class="text-danger" id="pro_end_hour_error"></span>
            </div>
        </div>
							
        <div class="row ec-avatar mgb15">
            <div class="col-md-4">
                <label for="pro_image">Ảnh bìa khuyến mãi <span>*</span></label>
                <div class="col-md-12 panel panel-default pdl0 pdr0">
                    <div class="panel-body">
				        <div class="col-md-5 pdl0 text-center pdt25">
							<i class="fa fa-camera"></i>
                        </div>
                        <div class="col-md-7 pdr0">
							<div role="group" class="btn-group-vertical">
    							 <br/>
    						    <input id="pro_upload_image"  name="pro_upload_image"  class="btn btn-default" type="file" accept="image/*" title="Tải ảnh lên"/>
    							<button type="button" id="pro_remove_image" class="btn btn-danger hidden">Xóa ảnh</button>
    						    <br/>
    													
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pdl0 pdr0">
                    <small class="noti">Kích thước ảnh tối thiểu: 755x290px</small><br />
                    <small class="noti">Dung lượng ảnh tối đa cho phép: 1mb</small>
                    <span style="color:#ea6153;" class="text-danger" id="pro_image_error"></span>
                </div>
            </div>
            <div class="col-md-8">
                <label for="pro_image">Preview <span>*</span> <small>(Kích thước ảnh chuẩn 815x315px)</small></label>
                <div class="col-md-12 panel panel-default pdl0 pdr0">
                    <div class="panel-heading" id="previewImage" style="height:208px;padding:0;">
                        <img style="width: 100%;height:100%;" class="img-resposive" id="pro_image_preview" src="<?php echo $promotion_info['preview_image']; ?>"/>
                        <input type="hidden" name="pro_image" id="pro_image_src" value="<?php echo $promotion_info['image']; ?>"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        
        <div class="row mgt35 mgb25">
            <div class="col-md-12">
            <label for="pro_short_description">Đoạn mô tả ngắn</label>
            <textarea name="short_description" id="pro_short_description" placeholder="Viết đoạn giới thiệu ngắn gọn và thu hút về chương trình khuyến mãi của bạn" class="form-control noresize"><?php echo $promotion_info['short_description']; ?></textarea>
            <span style="color:#ea6153;" class="text-danger" id="pro_short_description_error"></span>

        </div>
        </div>
        <div class="row mgb25">
            <div class="col-md-12 form-group">
                <label for="description">Nội dung khuyến mãi <span>*</span></label>
                <textarea name="description" rows="15" id="description" placeholder="Nội dung chương trình khuyến mãi" class="form-control vresize summernote"><?php echo $promotion_info['description']; ?></textarea>
                <span style="color:#ea6153;" class="text-danger" id="pro_description_error"></span>
            </div>
        </div>

        <div class="row mgb25">
            <div class="col-md-6 form-group">
                <label for="pro_tag"><i class="fa fa-tags"></i> Từ khóa khuyến mãi <span class="title-description mgl05">Tối ưu hiệu quả tìm kiếm google</span></label>
                <select multiple="true" name="pro_tag[]" class="tag-input form-control"></select>
                <span style="color:#ea6153;" class="hidden" id="pro_tag_error"></span>
            </div>
        </div>

        <div class="row mgb15 mgr15">
            <input type="hidden" name="promotion_id" value="<?php echo $promotion_info['promotion_id']; ?>"/>
            <p class="text-danger alert-error-event"></p>
            <span class="btn btn-danger mgl05 pull-right" id="save-promotion-btn">Lưu khuyến mãi</span>
        </div>
</form> <!-- End Form -->

<script type="text/javascript"><!--

$('#pro_upload_image').on('change', function() {
    var data = new FormData();
    data.append('pro_upload_image', $('#pro_upload_image').prop('files')[0]);
    
	$.ajax({
	    type: 'POST',
	    processData: false, // important
        contentType: false, // important
        data: data,
		url: 'manage/create_promotion/image_upload',
        dataType: 'json',
		beforeSend: function() {
			$('#pro_upload_image').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
            $('#pro_image_error').html('');
		},
		complete: function() {
			$('.fa-spin').remove();
		},
		success: function(json) {
		    if (json['error']) {
                $('#pro_image_error').html(json['error']);
            }
            else{
                var image = 'image/'+ json['image'];
                $('#pro_image_preview').attr("src",image);
                $('#pro_image_src').val(json['image']);
            }
			
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});


$(document).delegate('#save-promotion-btn', 'click', function() {
    
    $.ajax({
        url: 'manage/create_promotion/save',
        type: 'post',
        data: $('#form-post-promotion input[type=\'text\'], #form-post-promotion input[type=\'date\'], #form-post-promotion input[type=\'datetime-local\'], #form-post-promotion input[type=\'time\'], #form-post-promotion input[type=\'password\'], #form-post-promotion input[type=\'hidden\'], #form-post-promotion input[type=\'checkbox\']:checked, #form-post-promotion input[type=\'radio\']:checked, #form-post-promotion textarea, #form-post-promotion select'),
        dataType: 'json',
        beforeSend: function() {
			$('#save-promotion-btn').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
           
		},
        complete: function() {
			$('.fa-spin').remove();
		},
        success: function(json) {
            console.log(json);
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                for (i in json['error']) {
                   $('#pro_' + i + '_error').html(json['error'][i]);
				
				}
            } else if (json['fail']) {
                alert(json['fail']);
            } else if(json['debug'])
            {
                console.Log(json['debgug']);
            }
            else{
                var redirect = json['success'];
                location = redirect;
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
        
    });
    
    
    
});
//--></script>