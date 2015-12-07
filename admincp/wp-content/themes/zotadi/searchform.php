<?php
/**
 * The template for displaying search form page.
 *
 * @file      searchform.php
 * @package   VnEconomist news
 * @author    Chinh Tran
 * 
 **/
?>

<form id="hd-search-form" class="hd-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search">
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

