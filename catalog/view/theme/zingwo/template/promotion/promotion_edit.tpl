<?php echo $header; ?>

<div id="event-create" class="full-100">
	<div class="ec-top full-100 boderbot1e pdb25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<h1 class="ec-title mgb05">Chỉnh sửa khuyến mãi</h1>
					<span class="ec-date">21:21 Ngày 24/06/2016 </span>
				</div>
			</div>
		</div>
	</div>
	<!-- End Event Create TOP -->
	<div class="ec-bot full-100">
		<div class="container">
			<div class="col-md-3 col-sm-4 ec-left create-editor pdl0 pdt25">
				<ul class="ec-manager-menu full-100">
				    <li>
  						<a href="javascript:void(0)"  class="active editor-tab" data-id="#content-promotion-info">Thông tin khuyến mãi</a>
   					</li>
                    <li>
  						<a href="javascript:void(0)"  class="editor-tab" data-id="#content-promotion-info">Về trang địa điểm</a>
   					</li>
				</ul>
			</div>
			<div class="col-md-9 col-sm-8 ec-right pdt25">
                
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
        url: 'index.php?route=manage/create_promotion&promotion_id='+<?php echo $promotion_id;?>,
        dataType: 'html',
        beforeSend: function() {
			$('#collapse-promotion').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
		},
        complete: function() {
			$('.fa-spin').remove();
		},
        success: function(html) {
            $('#collapse-promotion .ec-content').html(html);
            $('.summernote').summernote({
              height: 300,                 // set editor height
              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor
              focus: true                  // set focus to editable area after initializing summernote
            });
            
            window.nowDate = new Date();
    		window.today = new Date( window.nowDate.getFullYear(), window.nowDate.getMonth(), window.nowDate.getDate(),0,0,0,0);
    		//Ngày bắt đầu
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
});



//--></script>

<?php echo $footer; ?>