<div class="main-slider">
    <div id="spinner"></div>
    <div id="slideshow" class="owl-carousel" style="opacity: 1;">
      <?php foreach ($banners as $banner) { ?>
      <div class="item">
        <?php if ($banner['link']) { ?>
        <a href="<?php echo $banner['link']; ?>"><img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" /></a>
          <div class="carousel-caption">
            <div class="caption-header"><?php echo $banner['title']; ?></div>
            <div class="caption-text"><a class="btn" href="<?php echo $banner['link']; ?>" role="button">See campaign</a></div>           
          </div>  
        
        <?php } else { ?>
        <img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
        <?php } ?>
      </div>
      <?php } ?>
    </div>
</div>

<section class="section-home section-steps clearfix">
    <div class="container">
        <ul class="benefits">
            <li class="benefit">
                <strong class="heading"> Cuộc Sống Sinh Viên </strong>
                <span class="summary">
                    Bạn sẽ sống với bạn bè quốc tế bên trong một tòa nhà tuyệt vời dành cho sinh viên
                </span>
            </li>
            <li class="benefit">
                <strong class="heading">Hướng Dẫn Chi Tiết</strong>
                <span class="summary">
                    Bạn có thể xem thư viện ảnh và thông tin hướng dẫn chi tiết để giúp bạn thuê nhà
                </span>
            </li>
            <li class="benefit">
                <strong class="heading"> Yên Tâm Đặt Thuê </strong>
                <span class="summary">
                    Bạn sẽ hoàn toàn yên tâm khi nhân viên của chúng tôi sẽ giúp đỡ bạn tất cả mọi thứ
                </span>
            </li>
        </ul>
    </div>
    <div class="section-steps-1"></div>      
        
</section>
    
<script type="text/javascript"><!--
$('#slideshow').owlCarousel({
	items: 6,
	autoPlay: 3000,
	singleItem: true,
	navigation: true,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
	pagination: true
});
--></script>
<script type="text/javascript">
// Can also be used with $(document).ready()
$(window).load(function() {	
  $("#spinner").fadeOut("slow");
});	
</script>