(function() {
	'use strict';
	
	var nav = document.getElementById('js-menu');
	var w = window.innerWidth;
	var x = 768;
	
	if(w < x) {
		nav.addEventListener('click', open);
		
		function open() {
			var element = document.querySelector('#js-menu ul');
			element.classList.toggle('open');
		}
	}
	
})();