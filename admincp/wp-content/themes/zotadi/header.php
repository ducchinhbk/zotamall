<?php session_start(); ?>

<!DOCTYPE html>
<!--[if lt IE 8]> <html class="lt-ie10 lt-ie9 lt-ie8 unsupported-browser"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie10 lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>    <html class="lt-ie10 ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="modern-browser" style="margin-top: 0 !important;"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300,700,800' rel='stylesheet' type='text/css'>
    <meta name="robots" content="noindex" />
    <title><?php wp_title(''); ?></title>
    <?php if( is_single() ){?>
        <meta name="description" content="<?php echo get_the_excerpt(); ?>"/>
        <meta name="keywords" content="<?php echo get_tag_keyword(); ?>"/>
        <meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
        <meta property="og:title" content="<?php echo get_the_title(); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo get_the_permalink(); ?>" />
        <meta property="og:image" content="<?php echo get_bg_image( get_the_ID() ); ?>" />
    <?php } else{?>
        <meta name="description" content="<?php bloginfo('description'); ?>"/>
        <meta name="keywords" content="<?php bloginfo('keyword'); ?>"/>
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/autocomplete.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
</head>

<?php
function isSessionUserDataAvailable(){
    if(isset($_SESSION['wp_user_data'])){
        $sessionObject = $_SESSION['wp_user_data'];
        if(isset($sessionObject) && isset($sessionObject['user_id']) && $sessionObject['user_id'] > 0){
            return true;
        }
    }
    return false;
}
?>
<body class="responsive">
<?php
    if(!isset($_COOKIE['vnup_user']) && isSessionUserDataAvailable()){
        unset($_SESSION['wp_user_data']);
    }else if(isSessionUserDataAvailable() && isset($_COOKIE['vnup_user'])){
        // TODO : show profile HTML menu
    }else if(isset($_COOKIE['vnup_user'])){
        $cookieVnupUser = $_COOKIE['vnup_user'];
        $index1 = strrpos($cookieVnupUser, 'user_token') + strlen('user_token') + 5;
        $index2 = strrpos($cookieVnupUser, 'remember_me') - 5;
        $index3 = strrpos($cookieVnupUser, 'remember_me') + strlen('remember_me') + 3;

        $user_token = substr($cookieVnupUser, $index1, $index2 - $index1);
        $remember_me = substr($cookieVnupUser, $index3, 1);

        if($remember_me == '1' ||
            (isset($_COOKIE['vnup_log_social']) && $_COOKIE['vnup_log_social'] == '1')){
            $dbUserToken = $wpdb->get_row("SELECT * FROM $wpdb->user_cookie uc LEFT JOIN $wpdb->users u ON uc.ID = u.ID
                                                                        WHERE user_token= '". $user_token . "'");
            if(isset($dbUserToken)){
                // INIT USER SESSION DATA
                $dataUserData = array(
                    'user_login' => $dbUserToken->user_login,
                    'user_nicename' => $dbUserToken->user_nicename,
                    'user_email' => $dbUserToken->user_email,
                    'user_fname' => $dbUserToken->first_name,
                    'user_lname' => $dbUserToken->last_name,
                    'user_id' => $dbUserToken->ID,
                    'cus_avatar' => $dbUserToken->cus_avatar
                );
                $_SESSION['wp_user_data'] = $dataUserData;
                // TODO : show profile HTML menu
            }
        }
    }

?>
<div id="site-wrapper" class="site-wrapper">
    <header id="widget-TopNav" class="top-navigation for-guest <?php echo (is_home())? 'home-version with-transparency': ''; ?>">
        <nav role="navigation" class="container">
            <div class="navbar-header">
                <a id="logo" class="pph-logo" href="<?php echo site_url('/'); ?>">VnEconomist</a>
            </div>
            <?php if(!is_home()){
                get_search_form(true); 
            } ?>
            <div class="nav collapse navbar-collapse visible-md visible-lg">
                <?php if(isSessionUserDataAvailable() && isset($_COOKIE['vnup_user'])) { ?>
                    <div class="pull-right menu-block user-menu">
                        <ul>
                            <!-- FAVORITES -->
                            <li class="dropdown mini-menu-item" data-hook="miniMenu">
                                <a href="#" title="Favourites" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fpph fpph-star"></i>
                                </a>
                                <ul class="dropdown-menu favourites-menu simple pull-right mini-view-list">
                                    <li class="header">My Favourites</li>
                                    <li class="fav-hourlies-count">
                                        <a href="#"><span class="pull-right">0</span> Hourlies</a>
                                    </li>
                                    <li class="fav-people-count">
                                        <a href="#"><span class="pull-right">0</span> People</a>
                                    </li>
                                    <li class="fav-jobs-count">
                                        <a href="#"><span class="pull-right">0</span> Jobs</a>
                                    </li>
                                </ul>
                            </li>

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
                                    $userName = ''; $userImage = site_url('/upload/avatar/user_default.png');
                                    $sesObject = $_SESSION['wp_user_data'];
                                    if(!empty($sesObject['user_fname']) && !empty($sesObject['user_lname'])){
                                        $userName = $sesObject['user_fname'] . ' '. $sesObject['user_lname'];
                                    }else{
                                        $userName = (!empty($sesObject['user_nicename']))? $sesObject['user_nicename'] : $sesObject['user_login'];
                                    }

                                    // user image
                                    if(isset($sesObject['cus_avatar']) && !empty($sesObject['cus_avatar'])){
                                        $userImage = $sesObject['cus_avatar'];
                                        if(strpos($userImage, 'http') === false){
                                            $userImage = site_url('/'. $userImage);
                                        }
                                    }
                                ?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <div class="top-nav-image">
                                        <img src="<?= $userImage; ?>" alt="<?= $userName; ?>" class="img-rounded user-avatar">
                                    </div>
					                            <span class="user-greeting crop">Hi <?= $userName; ?>
                                                </span>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu user-account-menu simple pull-right">
                                    <li><a href="<?php echo site_url('/c/user/personal/') . $sesObject['user_login'];?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                                    <li>
                                        <a class="inline-option" title="Micheal T." rel="nofollow" href="<?php echo site_url( '/c/user/user/edit'); ?>"><i class="fpph fpph-user"></i>Profile</a>
                                    </li>
                                    <li><a href="#"><i class="fpph fpph-gear"></i>Settings</a></li>
                                    <li><a href="<?php echo site_url( '/c/user/user/logout?redirect_to='. urlencode('http://'. $_SERVER[HTTP_HOST]. $_SERVER[REQUEST_URI]));?>"><i class="fa fa-power-off"></i>Log out</a></li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                <?php }else{ ?>
                    <div class="pull-right menu-block user-menu">
                        <div class="auth-menu">
                            <a href="<?php echo site_url( '/c/user/user?redirect_to='. urlencode(site_url($wp->request)) );?>" title="Đăng nhập" class="text-uppercase login">Đăng nhập</a>
                        </div>
                    </div>
                <?php } ?>
                <div class="pull-right menu-block navigation-menu">
                    <ul>

                        <!--li class="dropdown">
                            <a class="dropdown-toggle  text-uppercase with-border-on-hover " data-toggle="dropdown" rel="nofollow"  ><i class="fpph-categories color-pph" style="margin-right: 6px;"></i>Có gì hay</a>
                            <ul class="dropdown-menu simple pull-right">
                                <li><a href="http://news.vneconomist.com/" target="_blank">eNews</a></li>
                                <li><a href="http://tv.vneconomist.com/" target="_blank">eTV</a></li>
                                <li><a href="http://www.zotadi.com/" target="_blank">Zotadi</a></li>
                            </ul>
                        </li-->
                        <li class="dropdown separator"><a class="job btn bold" rel="nofollow" data-trigger="post-btn" href="<?php echo site_url( '/c/user/article/create' );?>">Tạo địa điểm</a></li>
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
                                    <li><a href="<?php echo site_url( '/c/user/article/create' );?>">Tạo địa điểm</a></li>
                                </ul>
                            </section>
                            <!-- Sell Section-->
                            <!--section>
                                <header class="row text-uppercase">Có gì hay</header>
                               <ul class="dropdown-menu simple pull-right">
                                    <li><a href="http://news.vneconomist.com/" target="_blank">eNews</a></li>
                                    <li><a href="http://tv.vneconomist.com/" target="_blank">eTV</a></li>
                                    <li><a href="http://www.zotadi.com/" target="_blank">Zotadi</a></li>
                                </ul>
                            </section-->
                            <!-- Help Section -->
                            <section>
                                <ul class="simple">
                                    <li>
                                        <a href="<?php echo site_url( '/c/user/user/signup?redirect_to='. urlencode(site_url($wp->request)));?>">Sign up</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url( '/c/user/user?redirect_to='. urlencode(site_url($wp->request)) );?>">Log in</a>
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