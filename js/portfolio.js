(function() {
	
	var homeButton = document.querySelectorAll("nav ul.pc li")[0];
	homeButton.onclick = function(e) {
		window.scrollTo(0, 0);
	}; 
	var btn =  document.querySelector('.hamburger'),
			menu = document.querySelector('.mob');

	function showButton() {
		btn.addEventListener('click', function() {
			if(menu.style.display === ('none')) {
				menu.style.display = ('block');
			}
			else {
				menu.style.display = ('none');
			}
		}, false);
		
	}
	
	if(btn) {
		console.log('clicked btn');
		
		menu.style.display = ('none');
		showButton();
	}
})();
function checkScreenSize(){
		if(window.innerWidth > 491 ){
			document.querySelector('.mob').style.display = ('none');	
		}
	};
	
	if (document.querySelector('.mob').style.display = ('none')){
		setInterval(checkScreenSize , 30);
	}