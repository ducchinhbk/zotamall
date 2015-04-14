<header>
    <div class="container">
        <a href="" class="logo "><img alt="Logo" src="image/logo.png"></a>
        <div class="nav-foodpanda">
            <ul>
                <li>
                    <a href="/<?php echo DIR_ROOT_NAME; ?>">Trang chủ</a>
                </li>
                <li>
                    <a href="<?php echo $shock?>">Deal sốc</a>
                </li>
                <li>
                    <a href="<?php echo $daily?>">Daily deal</a>
                </li>
                <li>
                    <a href="http://www.zotadi.com/" target="_blank">Du lịch</a>
                </li>
            </ul>
        </div><!--End-nav-foodpanda-->
        <ul class="header-links">
            <?php if(!empty($name) && !empty($email) && !empty($image)){ ?>
                <img src="<?php echo $image?>" />&nbsp; <?php echo $name; ?>
            <?php }else{ ?>
                <li class="customer-account"><a href="#" class="btn btn-default customer-login js-auth-login">Đăng nhập</a></li>
            <?php } ?>
        </ul>
    </div>
</header>
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb_pages">
            <li itemscope="" itemtype=""><a href="" itemprop="url"><span itemprop="title" style="width: 400px;display: block;">Trang chủ</span></a></li>
        </ol>
        <div class="breadcrumb_extras">
            <ul class="service-links">
            </ul>
            <ul class="switch-language">
                <li><a class="languageSwitch" href="">English</a></li>
            </ul>
        </div>
    </div>
</div>