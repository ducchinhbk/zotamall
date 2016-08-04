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

/**
 * Mask popup
 */
+function($){
	'use strict';
	
	// POPUP CLASS DEFINITION
  	// ======================
	var Popup = function(el, option){
		el.data($.extend(Popup.DEFAULTS, el.data(), option));
		Popup.DEFAULTS._instance = el;
		return this;
	}
	
	// default configs
	Popup.DEFAULTS = {
		content				: '.m-popup-content',
		closeButton			: '.m-plugin-popup-close',
		enableEscapeButton	: true,
		hideOnOverLayClick	: false,
		opacity				: 0.8,
		lockPossition		: true,
		maxWidth			: '90%',
		width				: 'auto',
		autoScale			: true,
		
		onStart				: null,	// Will be called right before attempting to load the content
		onDisplay			: null,	// Will be called once the content is displayed
		onClose				: null 	// Will be called once Popup is closed
	};
	
	// show popup
	Popup.prototype.show = function(){
		var $this	= $(this);
		var data 	= $this.data();
		var $popup 	= $('#m-plugin-popup');
		var fn		= function(){};
		
		// trigger before display content
		Popup.prototype.callback($(this).data().onStart);
		
		if($popup.length < 1){
			$('body').append('<div id="m-plugin-popup"><div class="m-plugin-popup-wrapper"></div><div class="m-plugin-popup-content"></div></div>');
			$popup 	= $('#m-plugin-popup');
		}
		
		var $wrapper 	= $popup.find('.m-plugin-popup-wrapper');
		var $content 	= $popup.find('.m-plugin-popup-content');
		var html = $(data.content).clone().show().get(0).outerHTML;
		$content.html(html);
		
		// set style
		$popup.css({position: 'absolute', top: 0, left: 0, zIndex: 2147483646, width: '100%', height: '100%'});
		
		$wrapper.css({width: '100%', height: '100%', position: 'fixed', top: 0, left: 0, 
			zIndex: 1, background: '#000', opacity: data.opacity});
			
		$content.css({position : data.lockPossition ? 'fixed' : 'absolute', maxWidth : data.maxWidth, width : data.width, zIndex : 2});
		
		// show popup
		$popup.show();
		// trigger after display content
		Popup.prototype.callback($(this).data().onDisplay);
		
		// window resize
		var ch = $content.outerHeight();
		var cw = $content.outerWidth();
		$(window).resize(function(){
			$wrapper.css({width: '100%', height: '100%'});
			
			var wh = $(window).height();
			var ww = $(window).width();
			var dw = $(document).width();
			
			$content.css({
				position	: data.lockPossition ? 'fixed' : 'absolute',
				left		:((dw > ww ? dw : ww)-cw)/2,
				top			: data.autoScale && (wh > ch) ? (wh - ch)/2 : 'auto'
			});
		}).trigger('resize');
		
		$(document).bind('m.popup.close', function(){
			// close popup
			$popup.hide();
			
			// trigger after closed
			Popup.prototype.callback($(this).data().onClose);
		});
		
		$(document).on('click.m.popup.close', data.closeButton + ',.m-plugin-popup-wrapper', function(e){
			if($(this).hasClass('m-plugin-popup-wrapper') && data.hideOnOverLayClick !== true){
				return false;
			}		
			
			$(document).trigger('m.popup.close');
		}).on('keyup.m.popup.close', function(e){
			if(e.keyCode == 27 && data.enableEscapeButton === true){
				$(document).trigger('m.popup.close');
			}
		});
	}
	
	// hide popup
	Popup.prototype.hide = function(){
		$(document).trigger('m.popup.close');
	}
	
	// callback
	Popup.prototype.callback = function(fn){
		var instance 	= Popup.DEFAULTS._instance,
			e 			= window.event; // || arguments.callee.caller.arguments[0];
		if(typeof fn === 'function' || (typeof fn === 'string' && typeof window[fn] === 'function')){
			return fn.call(null, instance, instance.data(), e);
		}
		
		return null;
	}
	
	// POPUP PLUGIN DEFINITION
	// =======================
	function Plugin(option){
		return this.each(function(){
			var $this 	= $(this);
			var options	= typeof option == 'object' ? option : {};
			var data  	= $this.data('m.popup');
			
			if(!data){
				$this.data('m.popup', (data = new Popup($this, options)));
			}
				
			if(typeof option == 'string'){
				data[option].call($this);
			}else{
				return new Popup($(this), options);
			}
		});
	}	
	
	var old 				= $.fn.popup;
	$.fn.popup             	= Plugin;
	$.fn.popup.Constructor 	= Popup;
	
	// POPUP NO CONFLICT
	// =================	
	$.fn.popup.noConflict = function(){
		$.fn.popup = old;
		return this;
	}
	
	// POPUP DATA-API
	// ==============
	$(document).on('click.m.unpopup.data-api', '[data-unpopup]', function(e){
		$(this).closest('[data-plugin="m.popup"]').addClass('hide-popup');
		return true;
	})
	.on('click.m.popup.data-api', '[data-plugin="m.popup"]', function(e){
		//e.preventDefault();
		if($(this).hasClass('hide-popup')){
			return true;
		}else{
			$(this).popup('show');
			return false;
		}
	})
	.on('mouseover.m.popup.data-api', '[data-plugin="m.popup"]', function(e){
		$(this).removeClass('hide-popup');
	});
}(window.jQuery)