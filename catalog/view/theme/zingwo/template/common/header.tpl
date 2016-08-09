<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content= "<?php echo $keywords; ?>" />
<?php } ?>
<script src="catalog/view/javascript/js/jquery.js" type="text/javascript"></script>
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/javascript/md_slider/md-slider.css" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/zingwo/stylesheet/default.css" rel="stylesheet"/>
<link href="catalog/view/theme/zingwo/stylesheet/stylesheet.css" rel="stylesheet"/>

<!--[if lt IE 9]>
    <script type="text/javascript" src="catalog/view/javascript/html5.js"></script>
<![endif]-->


<script src="catalog/view/javascript/common.js" type="text/javascript"></script>

<?php foreach ($styles as $style) { ?>
<link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<?php foreach ($scripts as $script) { ?>
<script src="<?php echo $script; ?>" type="text/javascript"></script>
<?php } ?>

<script src="catalog/view/javascript/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/md_slider/md_slider.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/js/app.js" type="text/javascript"></script>
</head>


<body class="">
<style>
    @media (max-width: 768px) { 
        #navbar-search-input { width: 316px !important; }
        #filltermenu { margin-top: 20px; }
        .logo .avt-mobile { margin-left: 15px }
        .logo .avt-mobile img { border: 1px solid grey; border-radius: 3px; margin-top: 1px; }
        .logo .btn-group .dropdown-menu.dropdown-menu-right { min-width:100px; }
        .logo .btn-group .dropdown-menu.dropdown-menu-right li a { text-align: right; }
    }
    .navbar-an {
        padding: 6px 10px;
        float: right;
    }

</style>

<div id="header">
    <div class="container">
        <div class="row tool">
            <div class="logo col-md-2 col-sm-3">
                <a href="#"><img src="image/catalog/logo.png" alt="Mạng sự kiện số 1 Việt Nam" /></a>
                <button aria-controls="navbar" aria-expanded="false" data-target=".navbar-search" data-toggle="collapse" class="navbar-toggle collapsed navbar-an" type="button">
                    <span class="sr-only">Tìm kiếm sự kiện</span>
                    <span class="fa fa-search"></span>
                </button>
                <a href="#" class="btn navbar-an hidden-sm hidden-md hidden-lg">
                    <span class="sr-only">Đăng nhập</span>
                    <span class="fa fa-user"></span>
                </a>
            </div>
            <div class="menutop search col-md-4 col-sm-4 navbar-search navbar-collapse collapse" id="navbar-search-input">
                <div class="input-group input-group-search full-100">
                    <form class="home-search" action="promotion/explore" method="get">
                        <span class="fa fa-search"></span>
                        <input type="text" class="form-control search-form-input" placeholder="Nhập từ khóa tìm kiếm" value=""  minlength="3" maxlength="200" />
                        <input type="hidden" name="keyword"  value="" />
                    </form>
                </div><!-- /input-group -->
            </div>
            <div class="menutop col-md-4 hidden-sm pdr0 hidden-xs">
                
				<div class="widget-header-user"  id="widget-header-user">
					<ul id="user" class="nav navbar-nav navbar-right navbar-top">
						<li class="out children active">
                            <a href="<?php echo $explore;?>" class="explore">Mua ở đâu</a>
						</li>
                        <li>
                            <a href="#" class="explore">Mua gì</a>
						</li>
                        <li>
                            <a href="#" class="explore">Video</a>
						</li>
                        <?php if ($logged) { ?>
                            <ul class="header-user-function nav navbar-nav navbar-right navbar-top">
                                <li class="user-page">
                                    <a class="prfavatar pdr0" href="<?php echo $account;?>">
                                        <span id="avatar_header" style="overflow:hidden">
                                        <img class="prfimg img-circle" src="http://media.sukienhay.com/cache/images/user/173444/3033339175.png" width="24px" height="24px">
                                        </span>
                                        <span class="prfname">
                                        Micheal</span>
                                    </a>
                                 </li>
                                 <li class="out children">
                                    <a class="dropdown-toggle user-setting" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                     &nbsp;&nbsp;<span class="fa fa-cog"></span>&nbsp;&nbsp;
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo $account;?>">Thông tin tài khoản</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?php echo $promotion;?>">Khuyến mãi đã đăng</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?php echo $edit_profile;?>">Chỉnh sửa tài khoản</a></li>
                                        <li><a href="<?php echo $logout;?>">Đăng xuất</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        <?php } else { ?>
    						<li class="out">
    							<a href="<?php echo $login;?>" >Đăng nhập</a>
    						</li>
						
						<?php } ?>
					</ul>
				</div>

            </div>
            <div class="crtevet hidden-sm hidden-xs">
                <a type="button" class="btn create-btn pull-right"  href="<?php echo $create;?>" >Đăng khuyến mãi</a>
            </div>
        </div>
    </div>
</div>