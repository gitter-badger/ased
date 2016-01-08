(function($){

$(document).ready(function(){
	var DOMAIN = "";

/** 		check if the current page's body tag has the class page passed as an argument
	------------------------------------------------------------- **/
	function isPage(page)
	{
		return $("body").hasClass(page);
	}

/**			check if the element exists on page
	-------------------------------------------------------------- **/
	$.fn.extend({
        elementExists: function () {

            return $(this).length > 0 ;
        }
    });

/**			svg support
	------------------------------------------------------------ **/
	if (!Modernizr.svg) {
	    var imgs = document.getElementsByTagName('img');
	    var svgExtension = /.*\.svg$/
	    var l = imgs.length;
	    for (var i = 0; i < l; i++) {
	        if (imgs[i].src.match(svgExtension)) {
	            imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
	            console.log(imgs[i].src);
	        }
	    }
	}

});
})(jQuery);
