/*
* Author:      Marco Kuiper (http://www.marcofolio.net/)
*/

$(document).ready(function()
{
	// Variable to set the duration of the animation
	var animationTime = 200;
	
	// Variable to store the colours
	var colours = ["cb202d", "de1d0f", "ff7800", "ffba00", "edd614", "9acd32", "5ba829", "3f7e00", "305d02"];

	// Add rating information box after rating
	var ratingInfobox = $("<div />")
		.attr("id", "ratinginfo")
		.insertAfter($("#rating"));

	// Function to colorize the right ratings
	var colourizeRatings = function(nrOfRatings) {
		$("#rating li a").each(function() {
			if($(this).parent().index() <= nrOfRatings) {
				$(this).stop().animate({ backgroundColor : "#" + colours[nrOfRatings] } , animationTime);
			}
		});
	};
	// Function to uncolorize the right ratings
	var uncolourizeRatings = function(nrOfRatings) {
		$("#rating li a").each(function() {
			if($(this).parent().index() > nrOfRatings) {
				$(this).stop().animate({ backgroundColor : "#cbcbcb" } , animationTime);
			}
		});
	};
	
	
	$('#rating li a').click(function() {
		
		$(this).unbind('mouseout');  
	}).mouseover(function() {
		
		ratingInfobox
			.empty()
			.stop()
			.animate({ opacity : 1 }, animationTime);
		
		// Add the text to the rating info box
		$("<p />")
			.html($(this).html())
			.appendTo(ratingInfobox);
		
		// Call the colourize function with the given index
		colourizeRatings($(this).parent().index());
		uncolourizeRatings($(this).parent().index());
		$('#rating-index').val( ($(this).parent().index()/2) + 1 );
	}).mouseout(function() {
		ratingInfobox
			.stop()
			.animate({ opacity : 0 }, animationTime);
		
		// Restore all the rating to their original colours
		$("#rating li a").stop().animate({ backgroundColor : "#cbcbcb" } , animationTime);
        $('#rating-index').val(0);
	});

    /****Popup login***/
    $('.login-require').click(function(){
        $('#bg-overlay').fadeIn();
        setTimeout($('#jsModuleLoginSignup').fadeIn(), 3000);
        
        $('.close').click(function() {
    		$('#jsModuleLoginSignup').fadeOut();
            setTimeout($('#bg-overlay').fadeOut(), 3000);  
    	});
    });
    
    /***Home form tab***/
    $('.foody-tab').click(function(){
      
        
        $('.caption-header').text('ĐỊA ĐIỂM ĂN UỐNG, GIẢI TRÍ');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('#home-form-wrapper').html('<form class="clearfix foody-form" id="get-started" action="foody/search" method="get" role="search"><div class="col-sm-6 no-padding-left no-padding-right what"><span class="ico"></span><input placeholder="Tìm địa điểm ăn uống, giải trí.." value="" name="place" id="search-input" type="text" maxlength="85" /></div><div class="col-sm-4 no-padding-left no-padding-right where"><span class="ico"></span><input placeholder="Ho Chi Minh.." data-hook="destination" name="destination" id="destination" type="text"/></div><div class="col-sm-2 no-padding-left no-padding-right"><input class="btn call-to-action btn-inverted" type="submit"  value="Tìm kiếm ›" /></div></form>');
        
    });
    $('.appointment-tab').click(function(){
       
        
        $('.caption-header').text('BOOK LỊCH HẸN DỊCH VỤ');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('#home-form-wrapper').html('<form class="clearfix appoinment-form" id="get-started" action="appoinment/search" method="get" role="search"><div class="col-sm-6 no-padding-left no-padding-right what"><span class="ico"></span><input placeholder="Tìm địa điểm dịch vụ.." value="" name="place" id="search-input" type="text" maxlength="85" /></div><div class="col-sm-4 no-padding-left no-padding-right where"><span class="ico"></span><input placeholder="Hà Nội.." data-hook="destination" name="destination" id="destination" type="text"/></div><div class="col-sm-2 no-padding-left no-padding-right"><input class="btn call-to-action btn-inverted" type="submit"  value="Tìm kiếm ›" /></div></form>');
    });
    $('.event-tab').click(function(){
        $('.caption-header').text('THẾ GIỚI SỰ KIỆN ĐẶC SẮC');
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('#home-form-wrapper').html('<form class="clearfix event-form" id="get-started" action="event/search" method="get" role="search"><div class="col-sm-6 no-padding-left no-padding-right what"><span class="ico"></span><input placeholder="Tìm sự kiện, khóa học.." value="" name="place" id="search-input" type="text" maxlength="85" /></div><div class="col-sm-4 no-padding-left no-padding-right where"><span class="ico"></span><input placeholder="Đà Nẵng.." data-hook="destination" name="destination" id="destination" type="text"/></div><div class="col-sm-2 no-padding-left no-padding-right"><input class="btn call-to-action btn-inverted" type="submit"  value="Tìm kiếm ›" /></div></form>');
    });
});