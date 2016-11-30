var Navigation = (function () {
	'use strict';

	return function (element) {
		var _homeButton = document.querySelectorAll(element)[0];

		var init = function () {
			_homeButton.onclick = function(e) {
				window.scrollTo(0, 0);
			};
		}

		return {
			init: init
		};
	}
}());

    var nav = new Navigation('nav ul.pc li');
	nav.init();
