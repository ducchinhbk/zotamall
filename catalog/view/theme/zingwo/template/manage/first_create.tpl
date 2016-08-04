<?php echo $header; ?>

<div id="event-create" class="full-100">
	<div class="ec-top full-100 boderbot1e pdb25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<h1 class="ec-title mgb05">Tạo sự kiện mới </h1>
					<span class="ec-date">21:21 Ngày 24/06/2016 </span>
				</div>
				<!--div class="col-md-4 col-sm-5 text-right pdt45">
					<button type="submit" name="save_event" class="btn post_event_button" form="form-post-event" onclick="functionButtonClicked(0)"><i class="fa fa-edit"></i> Lưu nháp</button>
					<button type="submit" name="publish_event" class="btn btn-purple mgl05 post_event_button" form="form-post-event" onclick="functionButtonClicked(1)"><i class="fa fa-check"></i> Xuất bản</button>
				</div-->
			</div>
		</div>
	</div>
	<!-- End Event Create TOP -->
	<div class="ec-bot full-100">
		<div class="container">
			<div class="col-md-3 col-sm-4 ec-left create-editor pdl0 pdt25">
				<ul class="ec-manager-menu full-100">
					<li>
						<a href="javascript:void(0)" class="active editor-tab" data-id="#content-place-info">1.Trang địa điểm</a>
					</li>
					<li>
						<a href="javascript:void(0)"  class="editor-tab" data-id="#content-promotion-info">2.Thông tin khuyến mãi</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 col-sm-8 ec-right pdt25">
                <div class="ajax-loading"><img src="image/ajax-loader.gif"/></div>
				<div class="ec-box-item full-100 mgb35" id="collapse-place" >
                    <h3 class="ec-box-title">
    				    Thông tin địa điểm/cửa hàng 
                        <a class="ec-box-tips">Chỉ dành cho lần đầu tạo khuyến mãi</a>
				    </h3>
                    <div class="ec-content" id="content-place-info">
                    
                    </div>
				</div>
				<div class="ec-box-item full-100 mgb35" id="collapse-promotion">
                    <h3 class="ec-box-title">
    				    Thông tin khuyến mãi 
				    </h3>
                    <div class="ec-content" id="content-promotion-info">
                    
                    </div>
				</div>	
					
			</div>


		</div>
	</div>
</div>
<link href="catalog/view/javascript/summernote/summernote.css" rel="stylesheet" type="text/css"/>
<script src="catalog/view/javascript/summernote/summernote.min.js" type="text/javascript"></script>



<script type="text/javascript"><!--

$(document).ready(function() {
    $.ajax({
        url: 'index.php?route=manage/create_place',
        dataType: 'html',
        beforeSend: function() {
			$('#collapse-place').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
		},
        complete: function() {
			$('.fa-spin').remove();
		},
        success: function(html) {
            $('#collapse-place .ec-content').html(html);
            $('.summernote').summernote({
              height: 300,                 // set editor height
              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor
              focus: true                  // set focus to editable area after initializing summernote
            });

        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});
$(document).delegate('.editor-tab', 'click', function() {
    var active_content_id = $(this).data('id');
    $('.editor-tab').removeClass('active');
    $('.ec-content').addClass('hidden');
    $(this).addClass('active');
    $(active_content_id).removeClass('hidden');
});

$(document).delegate('#save-place-btn', 'click', function() {
    
    $.ajax({
        url: 'index.php?route=manage/create_place/save',
        type: 'post',
        data: $('#collapse-place input[type=\'text\'], #collapse-place input[type=\'date\'], #collapse-place input[type=\'datetime-local\'], #collapse-place input[type=\'time\'], #collapse-place input[type=\'password\'], #collapse-place input[type=\'hidden\'], #collapse-place input[type=\'checkbox\']:checked, #collapse-place input[type=\'radio\']:checked, #collapse-place textarea, #collapse-place select'),
        dataType: 'json',
        beforeSend: function() {
			$('#save-place-btn').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
		},
        complete: function() {
			$('.fa-spin').remove();
		},
        success: function(json) {
            //$('#pla_title_error').html('fladfhladfhad');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                $('#collapse-promotion .ec-content').addClass('hidden');
                for (i in json['error']) {
                    
                   $('#pla_' + i + '_error').html(json['error'][i]);
				
				}
            } else {
                
                $('#collapse-place .ec-content').addClass('hidden');
                
                $.ajax({
                    url: 'index.php?route=manage/create_promotion',
                    dataType: 'html',
                    success: function(html) {
                        //alert(html);
                        $('#collapse-promotion .ec-content').html(html);
                        
                        $('.summernote').summernote({
                          height: 300,                 // set editor height
                          minHeight: null,             // set minimum height of editor
                          maxHeight: null,             // set maximum height of editor
                          focus: true                  // set focus to editable area after initializing summernote
                        });
                        
                        window.nowDate = new Date();
                		window.today = new Date( window.nowDate.getFullYear(), window.nowDate.getMonth(), window.nowDate.getDate(),0,0,0,0);
                		
                		$('#start_day_event').datetimepicker({
                			format: 'DD-MM-YYYY',
                			locale: 'vi',
                			focusOnShow : false
                		});
                
                		//Giờ bắt đầu
                		$('#start_hour_event').datetimepicker({
                			format: 'HH:mm',
                			focusOnShow : false
                		});
                
                		//Ngày kết thúc
                		$('#end_day_event').datetimepicker({
                			format: 'DD-MM-YYYY',
                			locale: 'vi',
                			minDate: today,
                			focusOnShow : false
                		});
                
                		//Giờ kết thúc
                		$('#end_hour_event').datetimepicker({
                			format: 'HH:mm',
                			focusOnShow : false
                		});
                
                
                    	// Thay đổi ngày kết thúc
                    	$(document).on('dp.change', '#start_day_event', function(e){
                    		var startday = $('#start_day_event').data("DateTimePicker").date();
                    		var start_day = $(this).data('date');
                    
                    		if(startday._d >= window.today){
                    			$('#end_day_event').val($(this).val()).datetimepicker('destroy').datetimepicker({
                    				useCurrent : true,
                    				defaultDate : startday._d,
                    				minDate : startday._d,
                    				focusOnShow: true
                    			});
                    		}else{
                    			var d = new Date();
                    			var enddate = d.getDate() + '-' + d.getMonth() + '-' + d.getFullYear();
                    			$('#end_day_event').val(enddate);
                    		}
                    	});
                    	// Thay đổi giờ bắt đầu
                    	$(document).on('dp.change', '#start_hour_event', function(e){
                    		var starttime = $('#start_hour_event').data("DateTimePicker").date();
                    		starttime['_d'].setHours(starttime['_d'].getHours()+3);
                    		var endtime = starttime.format('HH:mm');
                    		$('#end_hour_event').val(endtime);
                    	});

					},
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                });
                
                $('#collapse-promotion .ec-content').removeClass('hidden');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
        
    });
    
    
    
});

//--></script>

<?php echo $footer; ?>