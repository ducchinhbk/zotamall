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
        </div>
        <ul class="header-links">
            <?php if(isset($name) && isset($email) && isset($image)){ ?>
                <li class="profile_li">
                    <a href="javascript:void(0)" id="userContainer">
                        <img src="<?php echo $image?>" />&nbsp; <?php echo $customer_name; ?>&nbsp;&nbsp;
                    </a>
                    <a href="<?php echo $logout?>">
                        <img style="width:30px" src="https://cdn0.iconfinder.com/data/icons/large-glossy-icons/512/Logout.png">
                    </a>
                    <ul id="toggleProfileUserUL">
                        <li>
                            <a href="<?php echo $userSetting; ?>">Tài khoản của tôi <i class="fa fa-user"></i></a>
                        </li>
                        <li><a href="<?php echo $userCart; ?>">Giỏ hàng của tôi <i class="fa fa-shopping-cart"></i></a>
                        </li>
                    </ul>
                </li>
            <?php }else{ ?>
                <li class="customer-account"><a href="javascript:void(0);" class="btn btn-default customer-login js-auth-login">Đăng nhập</a></li>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('html').click(function() {
            $('#toggleProfileUserUL').hide();
        });

        $('#userContainer').click(function(event){
            event.stopPropagation();
            $('#toggleProfileUserUL').toggle();
        });
    });
</script>