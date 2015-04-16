<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>FoodPanda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link href="<?php echo DIR_APP_NAME ?>/view/stylesheet/detail.css" rel="stylesheet">
    <link href="<?php echo DIR_APP_NAME ?>/view/stylesheet/style.css" rel="stylesheet" media="screen">
    <link href="<?php echo DIR_APP_NAME ?>/view/stylesheet/dailydeal.css" rel="stylesheet">
    <link href="<?php echo DIR_APP_NAME ?>/view/stylesheet/dkdn.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <script src="<?php echo DIR_APP_NAME ?>/view/javascript/jquery-1.9.1.min.js"></script>
    <script src="<?php echo DIR_APP_NAME ?>/view/javascript/bootstrap.min.js"></script>
    <script src="<?php echo DIR_APP_NAME ?>/view/javascript/template.js"></script>
    <!-- LOGIC SCRIPT ---->
    <script src="<?php echo DIR_APP_NAME ?>/view/javascript/my.js"></script>
</head>
<body>

<div class="mobile-smart-banner"></div>
<div class="page-wrapper js-sticky-height-calculate-container">
<div class="content-wrapper">
<div class="overlays"></div>

<!-- ============================== -->
<!-- From Dang Ki -->
<!-- ============================== -->
<?php echo $login; ?>
<!-- ============= End from dang ki ============ -->

<?php echo $header; ?>

<div class="flash-messages">
    <div class="container"></div>
</div>
<main class="js-sticky-height-calculate-container">
<div class="homepage-area-selection-container" style="background-image: url(image/detail-feature.png);">
    <div class="container">
        <div class="homepage-tagline">
            <div class="homepage-headline ">
                <h1>YÊU CẦU DEAL</h1>
            </div>
        </div>
        <div class="js-location-search location-search location-search-main-page  location_city_area">
            <div class="location-search-inner">
                <div class="city">
                    <label for="cityId" class="required" style="width: 400px; font-size: 16px;">Nhập link sản phẩm</label>
                    <div class="dropdown-typeahead-wrapper" id="wrapper-element-1">
                                    <span class="twitter-typeahead" style="position: relative; display: inline-block; direction: ltr;">
                                        <input class="form-control twitter-typeahead tt-hint" type="text" readonly autocomplete="off" spellcheck="false" tabindex="-1" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255); width: 665px;"/>
                                        <input id="linkSPDN" class="form-control twitter-typeahead tt-input" type="text" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent; width: 665px;" placeholder="Enter link here .."/>
                                    </span>
                    </div>
                    <span id="city-not-selected-error" class="help-inline"></span>
                </div>
                <div class="find-foods">
                    <button id="btnDN" onclick="javascript:btnDNClick($('#linkSPDN').val().trim(), []);" name="button" class="btn btn-primary btn-lg btn-block btn-arrow">ĐỀ NGHỊ!</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="order-steps-container">
    <div class="order-steps-expander">
        <div class="container">
            <div class="title">Đặt món nhanh chóng qua 4 bước đơn giản.<span class="trigger">Tìm hiểu thêm</span></div>
        </div>
    </div>
    <div class="order-steps" style="display: none;">
        <div class="container">
            <ul>
                <li class="step one">
                    <div>
                        <div class="title">1. Tìm</div>
                        <div class="description">Nhập địa chỉ để tìm nhà hàng có thể giao đến bạn</div>
                    </div>
                </li>
                <li class="step two">
                    <div>
                        <div class="title">2. Chọn</div>
                        <div class="description">Tìm món ăn bạn thích trong hàng trăm thực đơn</div>
                    </div>
                </li>
                <li class="step three">
                    <div>
                        <div class="title">3. Trả</div>
                        <div class="description">Thanh toán nhanh và an toàn, bằng phương thức trực tuyến hay trả khi giao hàng</div>
                    </div>
                </li>
                <li class="step four">
                    <div>
                        <div class="title">4. Thưởng thức</div>
                        <div class="description">Nhà hàng chuẩn bị món ăn và giao đến tận cửa nhà bạn</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="banner-qc">
    <div class="container">
        <img src="image/banner.jpg">
    </div>
</div>
<div class="container">
    <div class="homepage-3"></div>
    <?php echo $product_dn; ?>

    <!-- ========================-->
    <!-- Pop up de nghi -->
    <!-- ====================== -->
    <div id="dn" style="display:none">
        <div id="zmask" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 3146px; z-index: 1999; opacity: 0.7; background-color: rgb(0, 0, 0);"></div>

        <div id="popupview" class="popup" style="top: 133px; left: 50%; z-index: 2000; margin-left: -325px; overflow: hidden; position: fixed; overflow: hidden;"> <a class="btn-close" href="javascript:void(0);" style="z-index: 2001;"></a>
            <div class="popup-inner">
                <h2 id="popUpName"><span>Bạn đang đề nghị DEAL sản phẩm</span>Nokia X – WVGA 4”   3.0MP   4GB   2 SIM (Đen)</h2>
                <p style="text-align: center;" id="popUpvote">Đã có 8/50 đề nghị</p>
                <div style="overflow-x:hidden; overflow-y:auto; max-height: 500px;" class="popup-inner">
                    <form class="frm-info" name="form" method="post" action="">
                        <input type="hidden" id="dailyid" name="daulyid" value="3"/>
                        <fieldset>
                            <p>
                                <label>Họ Tên</label>
                                <input type="text" value="" id="dailyfullname" name="fulname" class="inputbox"/>
                            </p>
                            <p class="email">
                                <label>Phone</label>
                                <input type="text" value="" id="phone" name="phone" class="inputbox"/>
                            <p class="email">
                                <label>Email</label>
                                <input type="text" value="" id="email" name="email" class="inputbox"/>
                                <span>Vui lòng cung cấp email chính xác, Lazada sẽ thông báo cho bạn khi sản phẩm này được bán DEAL</span> </p>
                            <p class="email">
                                <label>Số lượng</label>
                                <input type="text" value="1" id="soluong" name="soluong" class="inputbox"/>
                            <p>
                                <label>Nhập mã bảo mật</label>
                                <input type="text" value="" id="dailycode" name="code" class="inputbox txt-code"/>
                                <span class="code" id="divCaptcha"><img src="http://campaign.lazada.vn/_itool/gt/captcha?date=1425434350675" height="30"/></span> </p>
                            <div class="group-btn">
                                <p class="txt-error"></p>
                                <p class="btn-request"><a title="Gửi đề nghị" href="javascript:void(0);" onClick="javascript:sendDN();">Gửi đề nghị</a></p>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================-->
    <!-- End Pop up de nghi -->
    <!-- ====================== -->

    <div class="homepage-2">
        <style type="text/css">
            .topvendors {
                height: 100%;
                text-align: center;
                padding: 0px;
                margin-top: 20px;
                margin-bottom: 35px;
            }

            .topvendors h2 {
                margin-bottom: 5px;
                padding-bottom: 0;
            }

            .topvendors a:hover {
                opacity: 0.8;
            }

            header .header-links .contact-us a:before  {
                display: none !important;
            }

            header .header-links .contact-us a:before, header .header-links .contact-us a:after {
                display:none !important;
            }
        </style>
    </div>
</div>
<div class="container gg-ladaza">
    <h4>
        Giảm Giá trên Ladaza
    </h4>
    <ul>
        <li>
            <img src="image/gg1.png"/>
            <a>Điện thoại & Tablet</a>
        </li>
        <li>
            <img src="image/gg2.png"/>
            <a>Đồ gia dụng</a>
        </li>
        <li>
            <img src="image/gg3.png"/>
            <a>Tivi & Màn hình</a>
        </li>
        <li>
            <img src="image/gg4.png"/>
            <a>Laptop</a>
        </li>
        <li>
            <img src="image/gg5.png"/>
            <a>Máy ảnh</a>
        </li>
        <li class="row-6">
            <img src="image/gg6.png"/>
            <a>Mẹ và bé</a>
        </li>
        <li class="line-gg">
            <img src="image/gg7.png"/>
            <a>Nội thất</a>
        </li>
        <li class="line-gg">
            <img src="image/gg8.png"/>
            <a>Sách</a>
        </li>
        <li class="line-gg">
            <img src="image/gg9.png"/>
            <a>Mỹ phẩm & Làm đẹp</a>
        </li>
        <li class="line-gg">
            <img src="image/gg10.png"/>
            <a>Đồng hồ & Mắt kính</a>
        </li>
        <li class="line-gg">
            <img src="image/gg11.png"/>
            <a>Đồ thể thao</a>
        </li>
        <li class="line-gg">
            <img src="image/gg12.png"/>
            <a>Túi sách & Phụ kiện </a>
        </li>
    </ul>
</div>
</main>
</div>

<!-- ========== Footer ==============-->
<?php echo $footer; ?>
</div>
</div>
</body>
</html>
