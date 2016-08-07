<?php echo $header; ?>

<div id="pf-detail" class="full-100">
    <div class="container">
        <div class="row">
            <div class="about-cover-o about-box full-100" style="background: rgba(0, 0, 0, 0) url(http://media.sukienhay.com/cache/images/event/2088927129.png) no-repeat scroll center center / cover; height: 300px;">
        		<div class="pf-top full-100">
                    <div class="pf-place">
                        <div>
                            <img class="img-responsive img-avatar" src="image/catalog/qr_code12329.jpg" alt="QRCODE"/>
                         </div>
                    </div>
                    
                </div>
        	</div>
         </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="pf-main col-md-12">
                <div class="pf-bot full-100 mgt15 pdb45">
                    <div class="pf-left col-md-3 pdl0">
                        <div class="pf-box pf-box-profile">
                            <div class="pf-box-title">
                                <h3><?php echo $shop_info['name'];?></h3>
                            </div>
                            <div class="pf-box-content">
                                <ul>
                                    <li><i class="fa fa-suitcase"></i> Địa chỉ: <br/>
                                        <?php echo $shop_info['address'].', '. $shop_info['district'] .', '. $shop_info['city'];?>                                     
                                    </li>
                                    <li><i class="fa fa-calculator"></i> Điện thoại: 
                                        <?php echo $shop_info['telephone'];?>
                                    </li>
                                    <li>
                                        <i class="fa fa-building"></i> Giờ mở cửa: <br/>
                                        <?php echo $shop_info['working_time'];?>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- End box -->
                        <div class="pf-box pf-box-activity">
                            <div class="pf-box-title">
                                <h3>Bản đồ</h3>
                            </div>
                            <div class="pf-box-content">
                                <ul>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- End box -->
                    </div>
                    <div class="pf-right col-md-9 pdl0 pdr0">
                        <div class="pf-box pf-box-event-create">
                            <div class="pf-box-title full-100">
                                <h3 class="col-md-8">Sự kiện đã đăng</h3>
                                <div class="col-md-4 text-right pdt05">
                                    <div role="group" class="btn-group">

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <span style="color:#ea6153;" class="text-danger" id="shop_error"></span>
                            </div>
                            <div class="pf-box-content">
                                <ul class="es-resuit-item">
                                    <?php foreach($promotions as $promotion){ ?>
                                    <li class="col-md-6 pdl0 mgb15">                           
                                        <div class="bi-img">
                                            <a href="<?php echo $promotion['link']; ?>" class="nameevent">
                                                <img class="img-responsive avatar" src="<?php echo $promotion['image']; ?>" alt="<?php echo $promotion['name']; ?>"/>
                                            </a>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <strong>
                                                    <a href="<?php echo $promotion['link']; ?>" class="nameevent"><?php echo $promotion['name']; ?></a>
                                                </strong>
                                            </h3>
                                            <div class="pull-left">
                                                <p class="date">
                							     <?php echo $shop_info['name'];?>             
                    							</p>
                    							<p class="local">
                    								<i class="fa fa-small fa-map-marker"></i>
                                                    <?php echo $promotion['city']; ?>
                    							</p>
                                            </div>
                                            <div class="pull-right loged-action">
                                                 <?php echo $promotion['action']; ?>
                                                 <div class="event-date">
                                                    <?php echo $promotion['dateOuput']; ?>
                                                </div>
                                            </div>   
                                        </div>
                                    </li>
                                    <?php } ?>
                                    <li class="col-md-12 mgb25"></li>                                                                 </ul>

                            </div>
                            <div class="text-center mgb05">
                                <a href="#"><strong>Xem thêm</strong></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
<div class="popup" data-popup="popup-confirm">
    <div class="popup-inner modal-content">
        <div class="modal-header">
            <a class="popup-close" data-popup-close="popup-confirm" href="#">x</a>
            <h4 class="modal-title" id="gridSystemModalLabel">Xác nhận</h4>
        </div>
        <div class="modal-body">
			<p>Bạn có muốn xóa khuyến mãi này không?</p>
            <span style="color:#ea6153;" class="text-success" id="shop_success"></span>	
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default closepopup" data-popup-close="popup-confirm">Hủy</button>
            <button type="button" class="btn btn-default delete-confirm-btn">Xác nhận</button>
        </div>
    </div>
</div>

<script type="text/javascript"><!--

$(document).ready(function() {
    $('[data-popup-open]').on('click', function(e)  {
        var promotion_id = $(this).attr('data-id');
        console.log(promotion_id);
        var selected = $(this).attr('data-popup-open');
        $('[data-popup="' + selected + '"]').fadeIn(350);
 
        $('[data-popup-close]').on('click', function(e)  {
            var selected = $(this).attr('data-popup-close');
            $('[data-popup="' + selected + '"]').fadeOut(350);
     
            e.preventDefault();
        });
        
        $('.delete-confirm-btn').on('click', function(e)  {
            
            $.ajax({
                url: 'index.php?route=promotion/promotion/delete',
                type: 'post',
                data: {'promotion_id':promotion_id},
                dataType: 'json',
                beforeSend: function() {
        			$('.popup .modal-body').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
        		},
                complete: function() {
        			$('[data-popup="' + selected + '"]').fadeOut(350);
        		},
                success: function(json) {
                     if (json['redirect']) {
                        location = json['redirect'];
                    } else if (json['error']) {
                        $('#shop_error').html(json['error']);
        				
                    } else {
                        $('#shop_success').html(json['success']);
                        location.reload(true)
                    }   
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
                    
            });
        });
        
    });
   

});


//--></script>
<?php echo $footer; ?>