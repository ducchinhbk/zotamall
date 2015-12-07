<!DOCTYPE html>
<!--[if lt IE 8]> <html class="lt-ie10 lt-ie9 lt-ie8 unsupported-browser"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie10 lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>    <html class="lt-ie10 ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="modern-browser" style="margin-top: 0 !important;"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,700,800' rel='stylesheet' type='text/css'>
    <meta name="robots" content="noindex" />
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>"/>
    <meta name="keywords" content="<?php echo $meta_keyword; ?>"/>
    <meta property="og:description" content="<?php echo $og_description; ?>" />
    <meta property="og:title" content="<?php echo $og_title; ?>" />
    <meta property="og:type" content="<?php echo $og_type; ?>" />
    <meta property="og:url" content="<?php echo $og_url; ?>" />
    <meta property="og:image" content="<?php echo $og_image; ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="<?php echo config_item('asset_url'); ?>default/css/css-white-lion.css"/>
    <link rel="stylesheet" href="<?php echo config_item('asset_url'); ?>default/css/addmore.css"/>
    <!--[if lt IE 9]>
        <script src="<?php echo config_item('asset_url'); ?>default/js/html5.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo config_item('asset_url'); ?>default/js/jquery-1.11.3.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>


    <link rel="stylesheet" href="<?php echo config_item('asset_url'); ?>default/css/cropper.min.css"/>
    <script src="<?php echo config_item('asset_url'); ?>default/js/custom-autocomplete.js"></script>
    <script src="<?php echo config_item('asset_url'); ?>default/js/cropper/cropper.min.js"></script>
    <script src="<?php echo config_item('asset_url'); ?>default/js/main.js"></script>
    <script src="<?php echo config_item('asset_url'); ?>default/js/script.js"></script>

    
</head>
<?php
    function isSessionUserDataAvailable(){
        if(isset($_SESSION['user_data']) || isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){
            return true;
        }
        return false;
    }
?>
<body class="responsive">
<div id="site-wrapper" class="site-wrapper">
    <header id="widget-TopNav" class="top-navigation for-guest <?php echo ($page_active == 'Home')? 'home-version with-transparency': ''; ?>">
        <nav role="navigation" class="container">
            <div class="navbar-header">
                <a id="logo" class="pph-logo" href="<?php echo config_item('wp_home_url'); ?>">VnEconomist</a>
            </div>
            <?php if($page_active != 'Home') { ?>
                <form id="hd-search-form" class="hd-search-form" action="foody/search" method="get" role="search">
                    <div class="clearfix search-container" id="job-listing-search">
                        <div class="col-sm-6 no-padding-left no-padding-right what">
                            <span class="ico"></span>
                            <input placeholder="Tìm kiếm bài viết, bộ sưu tập.." value="" name="s" id="search-input" type="text" maxlength="85"/>
                        </div>
                        <div class="col-sm-4 no-padding-left no-padding-right where">
                            <span class="ico"></span>
                            <input placeholder="Ho Chi Minh" data-hook="destination" name="destination" id="destination" type="text"/>
                        </div>
                        <div class="col-sm-2 no-padding-left no-padding-right">
                            <input class="btn call-to-action btn-inverted" type="submit" value="Tìm kiếm ›"/>
                        </div>
                    </div>
                </form>
            <?php } ?>
            <div class="nav collapse navbar-collapse visible-md visible-lg">
                <?php if(isSessionUserDataAvailable() && isset($_COOKIE['vnup_user'])) { ?>
                    <div class="pull-right menu-block user-menu">
                        <ul>

                            <li class="dropdown mini-menu-item navNotifications notifications-bell" data-hook="miniMenu">
                                <a title="Notifications" class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="notification-bubble" style="display:none;">0</span>
                                    <i class="fpph fpph-bell"></i>
                                </a>
                                <div class="dropdown-menu notification-menu pull-right">
                                    <h3 class="header">My Notifications</h3>
                                    <div class="notification-list"></div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <?php
                                    $userName = ''; $userImage = $_SESSION['cus_avatar'];
                                    if(!empty($sesObject['user_fname']) && !empty($sesObject['user_lname'])){
                                        $userName = $_SESSION['user_fname'] . ' '. $_SESSION['user_lname'];
                                    }else{
                                        $userName = $_SESSION['user_login'];
                                    }

                                    if(strpos($userImage, 'http') === false){
                                        $userImage = config_item('wp_home_url') . '/' . $_SESSION['cus_avatar'];
                                    }

                                ?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <div class="top-nav-image">
                                        <img src="<?= $userImage; ?>" alt="<?= $userName; ?>" class="img-rounded user-avatar"/>
                                    </div>
                                    <span class="user-greeting crop">Hi <?= $userName; ?></span>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu user-account-menu simple pull-right">
                                    <li><a href="<?php echo base_url('user/personal/'. $_SESSION['user_login'] ); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                                    <li>
                                        <a class="inline-option" title="Micheal T." rel="nofollow" href="<?php echo base_url( 'user/user/edit'); ?>"><i class="fpph fpph-user"></i>Profile</a>
                                    </li>
                                    <li><a href="#"><i class="fpph fpph-gear"></i>Settings</a></li>
                                    <li><a href="<?php echo base_url( 'user/user/logout?redirect_to='. urlencode('http://'. $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI']));?>"><i class="fa fa-power-off"></i>Log out</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                <?php }else{ ?>
                    <div class="pull-right menu-block user-menu">
                        <div class="auth-menu">
                            <a href="<?php echo base_url( 'user/user?redirect_to='. urlencode('http://'. $_SERVER['HTTP_HOST']. $_SERVER["REQUEST_URI"]) );?>" title="Đăng nhập" class="text-uppercase login">Đăng nhập</a>
                        </div>
                    </div>
                <?php } ?>
                <div class="pull-right menu-block navigation-menu">
                    <ul>
                        <li class="dropdown separator"><a class="job btn bold" rel="nofollow" data-trigger="post-btn" href="<?php echo base_url('user/article/create'); ?>">Tạo địa điểm</a></li>
                    </ul>
                </div>
            </div>
            <button class="offcanvas-toggle topnav-toggle button visible-xs visible-sm">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="fa fa-times topnav-close"></span>
            </button>

            <div class="nav navbar-collapse">
                <div class="navbar-mobile visible-xs visible-sm">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active">
                            <a href="#home" role="tab" data-toggle="tab"><i class="fa fa-home"></i></a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- BEGIN: Home tab -->
                        <div class="tab-pane active" id="home">
                            <!-- Buy Section-->
                            <section>
                                <header class="row text-uppercase"></header>
                                <ul class="simple">
                                    <li><a href="<?php echo base_url('user/article/create'); ?>">Tạo địa điểm</a></li>
                                </ul>
                            </section>
                            <section>
                                <header class="row text-uppercase">Help</header>
                                <ul class="simple">
                                    <li>
                                        <a href="<?php echo  base_url('user/user?redirect_to='. urlencode('http://'. $_SERVER['HTTP_HOST']. $_SERVER["REQUEST_URI"]) );?>">Đăng nhập</a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <!-- END: Home Tab-->
                    </div>
                </div>
            </div>
        </nav>
    </header>