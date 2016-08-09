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

function redirectUrl(old_param, new_param){
    var url  = window.location.href;
     
    if(old_param != ''){
        console.log('run here');
        console.log(old_param);
        console.log(new_param);
        redirect = str_replace(old_param, new_param, url);
    }
    else{
        if(url.indexOf('?') !== -1){
            new_param = '&' + new_param;
        }
        else{
            new_param = '?' + new_param;
        }
        
        redirect = url + new_param;
    }
    console.log(redirect);
    window.location = redirect;
}

function remove_vietnamese_accents(str)
{
	accents_arr= new Array(
		"à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",
		"ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề",
		"ế","ệ","ể","ễ",
		"ì","í","ị","ỉ","ĩ",
		"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ",
		"ờ","ớ","ợ","ở","ỡ",
		"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
		"ỳ","ý","ỵ","ỷ","ỹ",
		"đ",
		"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă",
		"Ằ","Ắ","Ặ","Ẳ","Ẵ",
		"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
		"Ì","Í","Ị","Ỉ","Ĩ",
		"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ",
		"Ờ","Ớ","Ợ","Ở","Ỡ",
		"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
		"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
		"Đ"," ","\"","!","@","#","$","%","^","&","*","(",")",".",",",";","'","[","]","{","}"
		,":","“","”","--",'.','>','<','--','---','‘','’','/','?','~',"|"
	);
 
	no_accents_arr= new Array(
		"a","a","a","a","a","a","a","a","a","a","a",
		"a","a","a","a","a","a",
		"e","e","e","e","e","e","e","e","e","e","e",
		"i","i","i","i","i",
		"o","o","o","o","o","o","o","o","o","o","o","o",
		"o","o","o","o","o",
		"u","u","u","u","u","u","u","u","u","u","u",
		"y","y","y","y","y",
		"d",
		"a","a","a","a","a","a","a","a","a","a","a","a",
		"a","a","a","a","a",
		"e","e","e","e","e","e","e","e","e","e","e",
		"i","i","i","i","i",
		"o","o","o","o","o","o","o","o","o","o","o","o",
		"o","o","o","o","o",
		"u","u","u","u","u","u","u","u","u","u","u",
		"y","y","y","y","y",
		"d","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-",
		"-","-","-","-",'-','-','-','-','---','-','-','-','','',''
	);
    
	return str_replace(accents_arr,no_accents_arr,str).toLowerCase();
}


jQuery(document).ready(function($){
    
    $(".search-form-input").keyup(function(){
        $(":input[name='keyword']").val(str_replace(' ', '-', $(this).val())); 
    });
    
	//=== Slideshow Home ==================================
    if ($("#md-slider-1").length) {
        $("#md-slider-1").mdSlider({
            fullwidth: true,
            transitions: "fade",
            width: 980,
            height: 300,
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



