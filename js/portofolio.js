$(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
});

(function() {
	var homeButton = document.querySelectorAll("nav ul li")[0];
	homeButton.onclick = function(e) {
		window.scrollTo(0, 0);
	};
})();
