<?php
require_once config_item('home_dir') . '/c/application/utils/CommonUtils.php';
?>

<div class="wrap-container container clearfix offcanvas offcanvas-right" id="main-container">
<div class="main-content controller-hourlie action-view">

<header class="clearfix featured featured-right">
    <h1 class="clearfix"><?= $collection_title;?></h1><i class=""></i>
    <span></span>
</header>

<div class="col-xs-12 clearfix js-auto-pause-hidden">
    <div class="hp-collection hp-tour-in">
        <div class="row" id="appendSelectedPostDiv">
            <?php if(isset($_SESSION['user_id']) && $userOwnerCollection['ID'] == $_SESSION['user_id']){ ?>
                <div style="clear: both; padding: 10px 0px; margin-bottom: 5px; width: 100%; float: left; background: rgb(248, 248, 248) none repeat scroll 0% 0%; text-align: center; font-weight: bold; margin-top: 2px; border: 1px solid rgb(221, 221, 221); position: relative;" data-bind="visible:IsOwner()&amp;&amp;currentList().Enable">
                    <a style="display: block;" onclick="ShowFilter()" href="javascript:void(0)">+ Thêm nhanh bài viết</a>
                    <div style="z-index: 10; background: rgb(221, 221, 221) none repeat scroll 0% 0%; width: 100%; margin-top: 10px; border: 1px solid rgb(187, 187, 187); padding: 10px; position: absolute; left: -1px; display: none;" id="autoFilter">
                        <div style="float: left; text-align: left; padding-bottom: 3px; font-weight: normal;">
                            Lọc tìm theo tên bài viết
                        </div>
                        <div style="overflow: hidden; float: left;">
                            <input type="text" style="float: left; padding: 8px; border: 0; border: #aaa 1px solid; border-radius: 3px; width: 823px"
                                   id="txtResAutoFilter"
                                   class="ui-autocomplete-input ui-corner-all"
                                   autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                            <div id="filter-loader" style="float: left; position: absolute; right: 18px; top: 40px; display: none;">
                                <img src="http://static.foody.vn/beta/Style/images/icons/loading.gif">
                            </div>
                        </div>
                        <button style="border: #ccc 1px solid; border-radius: 2px; color: #aaa; background: #eee; padding: 2px; font-size: 10px; position: absolute; top: 8px; right: 10px; cursor: pointer; width: 16px; line-height: 11px;" class="button-cancel" onclick="hideFilter()">
                            X
                        </button>
                    </div>
                </div>
            <?php } ?>

            <?php
                if(sizeof($collectionList) > 0){
                    foreach($collectionList as $collection){ ?>
                        <div class="col-xs-12 col-sm-4 col-md-3 hourlie-tile-container">
                            <div class="clearfix hourlie-tile js-listing-tile  with-member-info">
                                <div class="image-container">
                                    <a class="" title="<?= $collection['post_title']?>" href="<?php echo config_item('wp_home_url') . '/'. CommonUtils::remove_vietnamese_accents($collection['post_title']) . '_post-'. $collection['post_id'] . '.html'; ?>">
                                        <img width="260" height="124" alt="Capture" class="attachment-260x195 wp-post-image" src="<?php echo config_item('wp_home_url') . '/wp-content/uploads/' . $collection['post_thumb_img']?>">
                                    </a>
                                    <div class="stats-container clearfix">
                                        <div class="pull-left rating">
                                            <i class="fpph fpph-thumb-up"></i>
                                            <span>Vote:</span>
                                            <span class="rating-value"><?= $collection['post_vote']?></span>
                                        </div>
                                        <div class="pull-right sales">
                                            <i class="fpph fpph-buyer-activity"></i>
                                            <span>View:</span>
                                            <span class="sales-value">1999</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-container">
                                    <a style="word-wrap: break-word;" class="color-hourlie js-paragraph-crop" title="<?= $collection['post_title']?>" href="<?php echo config_item('wp_home_url') . '/'. CommonUtils::remove_vietnamese_accents($collection['post_title']) . '_post-'. $collection['post_id'] . '.html'; ?>">
                                        <?= $collection['post_title']; ?>
                                    </a>
                                </div>
                                <div class="profile-container stretch clearfix">
                                    <div class="col-xs-8 no-padding-right">
                                        <div class="user-image-container pull-left">
                                            <a href="<?php echo config_item('wp_home_url') . '/c/user/personal/'. $collection['post_author_name'] ?>" title="<?= $collection['post_author_name']?>">
                                                <img width="30" height="30" alt="<?= $collection['post_author_name'];?>" src="<?php echo config_item('wp_home_url'). '/'. $collection['post_author_avatar'];?>" class="user-avatar user-avatar-sm user-avatar-square">                                                             </a>
                                        </div>
                                        <div class="user-info pull-left">
                                            <a title="<?= $collection['post_author_name'];?>" href="<?php echo config_item('wp_home_url') . '/c/user/personal/'. $collection['post_author_name'] ?>" class="clearfix user-name crop"><?= $collection['post_author_name'];?></a>
                                            <span class="user-country clearfix crop"></span>
                                        </div>

                                    </div>
                                    <div style="font-size: 12px;line-height: 2.5;" class="col-xs-4 price-container price-tag text-right">
                                        <span><?= $collection['post_vote']?></span><sup> votes</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                }else{ ?>
                    <div class="hideAfterSelectPost">
                        Chưa có bài viết nào trong bộ sưu tập này.
                    </div>
                <?php }
            ?>
        </div>
    </div>
</div>


<div class="js-auto-pause-hidden">
    <div class="widget-order-hourlie-addons clearfix">
        <div class="title-container">
            <h2 class="col-xs-12 clearfix prepend-top">Từ khóa liên quan</h2>
        </div>

        <div data-hook="addons-container" class="content-text clear addons-container">
            <ul class="addons clearfix boxmodelfix">

            </ul>
            <br class="clear">
        </div>
    </div>
</div>

    <!-- COMMENTS PATH -->
<!-- END Comments part -->

</div>
<aside class="right-column sidebar-hourlie-view offcanvas-sidebar">
    <div class="js-keep-in-view-marker"></div>
    <div class="clearfix js-keep-in-view hidden-xs hidden-sm cta-container">
        <div class="clearfix">
            <div class="price-container text-center gutter-top">
                <span data-price-amount="16" data-price-symbol="$" class="js-hourlie-discounted-price discounted-price"> 16 votes  </span>
            </div>
        </div>
        <div class="clear append-bottom hidden-sm hidden-xs"></div>
        <div class="clearfix actions-container">
            <div class="btn-container">
                <div class="clearfix">

                    <div class="col-xs-8 no-padding-right">
                        <form method="GET" action="#" id="pay-hourlie-230890-55efce6987b81-form" class="js-checkout-button">
                            <div style="display:none"><input type="hidden" name="ref" value="listings"></div>
                            <input type="hidden" value="1" id="Checkout_params_quantity" name="Checkout[params][quantity]">
                            <input type="hidden" value="listings" id="Checkout_params_ref" name="Checkout[params][ref]">
                            <input type="hidden" value="230890" id="Checkout_modelIds_0" name="Checkout[modelIds][0]">
                            <input type="submit" value="Vote" name="pay-hourlie-230890-55efce6987b81-button" id="pay-hourlie-230890-55efce6987b81-button" class="hourlie tall btn btn-inverted js-payment-button">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix main-information">
            <div class="no-padding-left col-xs-6">
					<span class="icon-container">
						<i class="fpph fpph-clock-wall"></i>
					</span>
					<span>
						<span>Bình luận</span><br>
						<span class="value js-delivery-days">25</span>
					</span>
            </div>
            <div class="col-xs-6 no-padding-left no-padding-right">
					<span class="icon-container">
						<i class="fpph fpph-thumb-up"></i>
					</span>
					<span>
						<span class="value">98%</span> Rating<br>
						<span>(25 reviews)</span>
					</span>
            </div>
        </div>
    </div>
    <div class="clearfix member-summary widget-memberSummary">
        <div class=" summary member-summary-section clearfix">
            <?php $userAvatar = $userOwnerCollection['cus_avatar'];
                if(strpos($userAvatar, 'http') === false){
                    $userAvatar = config_item('wp_home_url'). '/'. $userAvatar;
                }
            ?>
            <div class="member-image-container">
                <img width="150" height="250" alt="<?php echo $userOwnerCollection['user_nicename']; ?>"
                     src="<?= $userAvatar;?>" class="img-border-round member-image">
            </div>
            <div class="member-information-container">
                <div class="member-name-container crop">
                    <h2>
                        <a href="<?php echo config_item('base_url'). 'user/personal/'.$userOwnerCollection['user_login']; ?>" rel="nofollow" title="<?= $userOwnerCollection['user_nicename']; ?>" class="crop member-short-name"><?php echo $userOwnerCollection['first_name']. ' '. $userOwnerCollection['last_name']; ?></a>
                        <span class="icon member-online offline"></span>
                    </h2>
                    <div class="member-job-title crop"><?= $userOwnerCollection['cus_career'] . ', '. $userOwnerCollection['cus_company'] ?></div>
                </div>
            </div>
            <div class="cert-container text-right">
					<span title="CERT is PPH's  proprietary ranking algorithm  which factors in all the things our buyers care about a Seller, in one synthetic score. Sellers are ranked from CERT1 up to CERT5 with the Top 0.5% getting a special badge." data-tooltip-pos="left" data-tooltip-content="CERT is PPH's  proprietary ranking algorithm  which factors in all the things our buyers care about a Seller, in one synthetic score. Sellers are ranked from CERT1 up to CERT5 with the Top 0.5% getting a special badge." data-level="4" class="cert cert-level4-medium ">
					</span>
            </div>
        </div>
        <div class=" about member-summary-section clearfix">
            <div class="about-container js-about-container">
                <p>
                    <?= $userOwnerCollection['cus_description']; ?>
                </p>
            </div>
        </div>
        <div class=" location member-summary-section clearfix">
            <div class="location-container crop"><i class="fpph-location"></i><?= $userOwnerCollection['cus_city']?></div>
        </div>
        <div class=" contact member-summary-section clearfix">
            <a href="#" rel="nofollow" class="btn contact-button">Contact</a>
        </div>
    </div>
    <br class="clear">
    <div class="clearfix gutter-top">
        <div class="lifted-corners with-handles">
            <div class="handles"></div>
            <div class="center-block">
                <img class="money-protection-guarantee pull-left" alt="Money protection guarantee" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                <div class="pull-left">
                    <h5>
                        Money Protection<br>Guarantee <aside>Job done or your money back</aside>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <br class="clear">
    <div class="sidebar-box prepend-top clearfix js-auto-pause-hidden">
        <div class="clearfix widget-recommended-hourlies sidebar-box">
            <h2 class="bubble">Cùng tác giả</h2>
            <hr>
            <ul class="clearfix recommended-hourlie-items">
                <li class="clearfix">
                    <div class="col-xs-4 no-padding-left no-padding-right image">
                        <a title="Thưởng thức loạt clip full siêu hot tại “Music Bank in Hanoi”" class="img-container" href="http://localhost/vneconomist/thuong-thuc-loat-clip-full-sieu-hot-tai-music-bank-in-hanoi_post-260.html">
                            <img width="150" height="150" alt="Capture" class="hourlie-image wp-post-image" src="http://localhost/vneconomist/wp-content/uploads/2015/03/Capture-150x150.jpg">							</a>
                    </div>
                    <div class="col-xs-8 no-padding-right no-padding-left">
                        <a class="title clearfix" title="Thưởng thức loạt clip full siêu hot tại “Music Bank in Hanoi”" href="http://localhost/vneconomist/thuong-thuc-loat-clip-full-sieu-hot-tai-music-bank-in-hanoi_post-260.html">
                            Thưởng thức loạt clip full siêu hot tại “Music Bank in Hanoi”                            </a>
                        <div class="details crop pull-left">
                            <a href="#">Chinh Tran</a>
                        </div>
                    </div>
                    <div class="clearfix horizontal-line stretch"></div>
                </li>
                <li class="clearfix">
                    <div class="col-xs-4 no-padding-left no-padding-right image">
                        <a title="Mối tình sét đánh trên phà" class="img-container" href="http://localhost/vneconomist/moi-tinh-set-danh-tren-pha_post-188.html">
                            <img width="150" height="150" alt="27" class="hourlie-image wp-post-image" src="http://localhost/vneconomist/wp-content/uploads/2015/01/27-150x150.jpg">							</a>
                    </div>
                    <div class="col-xs-8 no-padding-right no-padding-left">
                        <a class="title clearfix" title="Mối tình sét đánh trên phà" href="http://localhost/vneconomist/moi-tinh-set-danh-tren-pha_post-188.html">
                            Mối tình sét đánh trên phà                            </a>
                        <div class="details crop pull-left">
                            <a href="#">Chinh Tran</a>
                        </div>
                    </div>
                    <div class="clearfix horizontal-line stretch"></div>
                </li>
                <li class="clearfix">
                    <div class="col-xs-4 no-padding-left no-padding-right image">
                        <a title="Những chiêu “móc túi” trắng trợn khách hàng tại cây xăng" class="img-container" href="http://localhost/vneconomist/nhung-chieu-moc-tui-trang-tron-khach-hang-tai-cay-xang_post-185.html">
                            <img width="150" height="150" alt="27" class="hourlie-image wp-post-image" src="http://localhost/vneconomist/wp-content/uploads/2015/01/27-150x150.jpg">							</a>
                    </div>
                    <div class="col-xs-8 no-padding-right no-padding-left">
                        <a class="title clearfix" title="Những chiêu “móc túi” trắng trợn khách hàng tại cây xăng" href="http://localhost/vneconomist/nhung-chieu-moc-tui-trang-tron-khach-hang-tai-cay-xang_post-185.html">
                            Những chiêu “móc túi” trắng trợn khách hàng tại cây xăng                            </a>
                        <div class="details crop pull-left">
                            <a href="#">Chinh Tran</a>
                        </div>
                    </div>
                    <div class="clearfix horizontal-line stretch"></div>
                </li>
                <li class="clearfix">
                    <div class="col-xs-4 no-padding-left no-padding-right image">
                        <a title="Minh bạch để giành “trận địa thông tin”" class="img-container" href="http://localhost/vneconomist/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html">
                            <img width="150" height="150" alt="mbutton_hi_2x" class="hourlie-image wp-post-image" src="http://localhost/vneconomist/wp-content/uploads/2015/01/mbutton_hi_2x-150x150.jpg">							</a>
                    </div>
                    <div class="col-xs-8 no-padding-right no-padding-left">
                        <a class="title clearfix" title="Minh bạch để giành “trận địa thông tin”" href="http://localhost/vneconomist/minh-bach-de-gianh-tran-dia-thong-tin_post-181.html">
                            Minh bạch để giành “trận địa thông tin”                            </a>
                        <div class="details crop pull-left">
                            <a href="#">Chinh Tran</a>
                        </div>
                    </div>
                    <div class="clearfix horizontal-line stretch"></div>
                </li>
                <li class="clearfix">
                    <div class="col-xs-4 no-padding-left no-padding-right image">
                        <a title="11 bí quyết giao tiếp để giữ gìn bất cứ mối quan hệ nào" class="img-container" href="http://localhost/vneconomist/11-bi-quyet-giao-tiep-de-giu-gin-bat-cu-moi-quan-he-nao_post-178.html">
                            <img width="150" height="150" alt="vdfd" class="hourlie-image wp-post-image" src="http://localhost/vneconomist/wp-content/uploads/2015/01/vdfd-150x150.jpg">							</a>
                    </div>
                    <div class="col-xs-8 no-padding-right no-padding-left">
                        <a class="title clearfix" title="11 bí quyết giao tiếp để giữ gìn bất cứ mối quan hệ nào" href="http://localhost/vneconomist/11-bi-quyet-giao-tiep-de-giu-gin-bat-cu-moi-quan-he-nao_post-178.html">
                            11 bí quyết giao tiếp để giữ gìn bất cứ mối quan hệ nào                            </a>
                        <div class="details crop pull-left">
                            <a href="#">Chinh Tran</a>
                        </div>
                    </div>
                    <div class="clearfix horizontal-line stretch"></div>
                </li>
            </ul>
        </div>
    </div>
    <br class="clear">
</aside>
</div>
<input type="hidden" id="collectionID" value="<?= $collectionId ; ?>" />
<script>
    $(document).ready(function(){
        $('.about-dialog-trigger').click(function(){
            $('.bootbox').toggle();
            $('.bootbox-close-button').click(function(){
                $('.bootbox').fadeOut();
            });
        })
    });

    var baseURL = '<?php echo config_item('wp_home_url'); ?>';

    function ShowFilter(){
        $('#autoFilter').show();
    }

    function hideFilter(){
        $('#autoFilter').hide();
    }

    $('#txtResAutoFilter').autocomplete({
        'selectPost' : true,
        'homePageURL' : baseURL,
        'source': function(request, response) {
            $.ajax({
                url: '<?php echo config_item('base_url'); ?>ajax/get_wp_posts_filter?filter_model=' +  encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response($.map(json, function(item) {
                        return {
                            title: item['title'],
                            date: item['date'],
                            author : item['author'],
                            author_id : item['author_id'],
                            author_email : item['author_email'],
                            post_id : item['post_id'],
                            thumb_img : item['thumb_img'],
                            author_nicename : item['author_nicename'],
                            author_avatar : item['author_avatar']
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            var html = '<div class="col-xs-12 col-sm-4 col-md-3 hourlie-tile-container">'+
                            '<div class="clearfix hourlie-tile js-listing-tile  with-member-info">'+
                                '<div class="image-container">'+
                                    '<a class="" title="'+ item.title +'" href="'+ baseURL + '/' + foldToAssci(item.title) + '_post-'+ item.post_id + '.html">'+
                                        '<img width="260" height="124" alt="Capture" class="attachment-260x195 wp-post-image" src="'+ baseURL +'/wp-content/uploads/' + item.thumb_img +'">'+
                                    '</a>'+
                                    '<div class="stats-container clearfix">'+
                                        '<div class="pull-left rating">'+
                                            '<i class="fpph fpph-thumb-up"></i>'+
                                                '<span>Vote:</span>'+
                                                '<span class="rating-value">99</span>'+
                                        '</div>'+
                                        '<div class="pull-right sales">'+
                                            '<i class="fpph fpph-buyer-activity"></i>'+
                                            '<span>View:</span>'+
                                            '<span class="sales-value">1999</span>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="title-container">'+
                                    '<a style="word-wrap: break-word;" class="color-hourlie js-paragraph-crop" title="'+ item.title +'" href="'+ baseURL +'/' + foldToAssci(item.title) + '_post-' + item.post_id +'.html">'+
                                        item.title +
                                    '</a>'+
                                '</div>'+
                                '<div class="profile-container stretch clearfix">'+
                                    '<div class="col-xs-8 no-padding-right">'+
                                       '<div class="user-image-container pull-left">'+
                                            '<a href="'+ baseURL +'/c/user/personal/' + item.author + '" title="'+ item.author +'">'+
                                               '<img width="30" height="30" alt="'+ item.author_nicename +'" src="'+ baseURL + '/' + item.author_avatar +'" class="user-avatar user-avatar-sm user-avatar-square"></a>'+
                                       '</div>'+
                                        '<div class="user-info pull-left">'+
                                            '<a title="'+ item.author_nicename +'" href="'+ baseURL + '/c/user/personal/'+ item.author +'" class="clearfix user-name crop">'+ item.author +'</a>'+
                                            '<span class="user-country clearfix crop"></span>'+
                                        '</div>' +
                                    '</div>'+
                                    '<div style="font-size: 12px;line-height: 2.5;" class="col-xs-4 price-container price-tag text-right">'+
                                        '<span>30</span><sup> votes</sup>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
            $('#appendSelectedPostDiv').append(html);
            hideFilter();
            $('.hideAfterSelectPost').hide();
            addPostToCollection(item);
        }
    });

    function addPostToCollection(item){
        var postData = {
            user_collection_id : $('#collectionID').val(),
            post_id : item.post_id,
            post_title : item.title,
            post_thumb_img : item.thumb_img,
            post_date : item.date,
            post_vote : (item.post_vote != undefined) ? item.post_vote : 99,
            post_author_id : item.author_id,
            post_author_name : item.author,
            post_author_email : item.author_email,
            post_author_avatar : item.author_avatar
        };
        $.ajax({
            url: baseURL + '/c/collection/collection/addposttocolleciton',
            type: 'POST',
            dataType : 'json',
            data : postData,
            success: function(json){
                if(json.status){
                    console.log('Added post to collection');
                }
            }
        });
    }

</script>