( function( $ ) {

	/**
	 * acting on the .entry-content divs this activates the fitvids
	 * library for repsonsive video and iframes
	 */
	var fitvids = function() {

		$(".entry-content").fitVids();

	};

	//Resize image relative to text
	window.onresize = function(){
		resizeImgtext();
	}
	resizeImgtext();

	function resizeImgtext(){
		var imgtextWrapper = Array.from(document.getElementsByClassName('imagetext-single'));

		imgtextWrapper.forEach(function(textHi, i){
			var imgtextHeight = textHi.children[1].children[0].offsetHeight;
			textHi.children[0].style.height = imgtextHeight+'px';
		});
	}

	//Smooth Scroll
	$('a').click(function(){
		$('html, body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top - 60
		}, 500);
		return false;
});



	$(document).ready(fitvids);

} )( jQuery );
