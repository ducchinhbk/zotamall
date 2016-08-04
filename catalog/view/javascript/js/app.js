/*
 * +------------------------------------------------------------------------+
 * | MaskPHP - A PHP Framework For Beginners                                |
 * | @package       : MaskPHP                                               |
 * | @authors       : MaskPHP                                               |
 * | @copyright     : Copyright (c) 2015, MaskPHP                           |
 * | @since         : Version 1.0.0                                         |
 * | @website       : http://maskphp.com                                    |
 * | @e-mail        : support@maskphp.com                                   |
 * | @require       : PHP version >= 5.3.0                                  |
 * +------------------------------------------------------------------------+
 */

// remove window hash
if(window.location.hash && window.location.hash == '#_=_'){
	window.location.hash = ''; // for older browsers, leaves a # behind
	history.pushState('', document.title, window.location.pathname); // nice and clean
}

function str_replace(search, replace, str){
	var ra = replace instanceof Array, sa = str instanceof Array, l = (search = [].concat(search)).length, replace = [].concat(replace), i = (str = [].concat(str)).length;
	while(j = 0, i--)
		while(str[i] = str[i].split(search[j]).join(ra ? replace[j] || "" : replace[0]), ++j < l);
	return sa ? str : str[0];
}

function redirect(old_param, new_param){
    var url  = window.location.href;
    
    if(old_param != ""){
        redirect = str_replace(old_param, new_param, url);
    }
    else{
        new_param = str_replace('&', '?', new_param) + '&';
        redirect = str_replace('?', new_param, url);
    }
    window.location = redirect;
}

jQuery(document).ready(function($){
	//=== Slideshow Home ==================================
    if ($("#md-slider-1").length) {
        $("#md-slider-1").mdSlider({
            fullwidth: true,
            transitions: "fade",
            width: 980,
            height: 365,
            responsive: true,
            slideShowDelay: 6e3,
            slideShow: true,
            loop: true,
            showLoading: false,
            showArrow: 0,
            showBullet: 1,
            posBullet: 2,
            showThumb: false,
            enableDrag: true
        })
    }
    if ($("#slider1").length > 0) {
        $("#slider1").responsiveSlides({
            auto: false,
            pager: true,
            nav: true,
            speed: 500,
            maxwidth: 800,
            namespace: "centered-btns"
        })
    }
    //End  Slideshow Home
    //===================================================

    

    //=== ADV vip scroll ====================================
    (function(nicescroll){
    	if( ! nicescroll ){
    		return;
    	}

    	var temp = $('<div />'),
    		adsvip_width = $('#adsvip').outerWidth(),
	    	adsvip_item_width = 0,
	    	scale,
	    	item_width,
	    	body_width = $('body').width();

	    if( body_width <= 480 || adsvip_width <= 480 ){
	    	scale = 2;
	    }
	    else if( (body_width > 480 && body_width <= 992) || (adsvip_width > 480 && adsvip_width <= 992) ){
	    	scale = 3;
	    }
	    else{
	    	scale = 4;
	    }

	    // Get adv item width
	    item_width = parseInt($('#adsvip').innerWidth()/scale);

	    $('#adsvip-item > li').each(function(){
	        $(this).css({
	            'width' : item_width,
	            'max-width' : 'none',
	        }).clone().appendTo(temp);
	        adsvip_item_width += $(this).outerWidth() + 4;

	        //$(this).find('.img-responsive').css('height', '104px');
	    });

	    temp.appendTo('body').ready(function(){
	        $('#adsvip-item').css('width', adsvip_item_width);
	        var nicescroll = $('#adsvip').niceScroll({
	            cursorcolor	: "#888",
	            cursorwidth : '6px',
	            cursorborder: 'none',
	            overflowy	: false,
	            overflowx	: true
	        });
	        temp.remove();
	    });
    })($.nicescroll);

    //=======================================================

    
});



