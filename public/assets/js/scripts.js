// // Navbar toggle for small / mobile screens

// let toggleButton = document.getElementById('tg-button');
// let displayNav = document.getElementById('ds-nav');

// toggleButton.addEventListener('click', (e) => {
// 	if  (displayNav.classList.contains('hidden')) {
// 		displayNav.classList.remove('hidden');
// 		displayNav.classList.remove('animate-navhide');
// 		displayNav.classList.add('animate-navdisplay');
// 		toggleButton.querySelector('path').setAttribute('d', 'M6 18L18 6M6 6l12 12');
// 		toggleButton.classList.add('stroke-white');
// 	}
// 	else {
// 		displayNav.classList.remove('animate-navdisplay');
// 		displayNav.classList.add('animate-navhide');
// 		toggleButton.querySelector('path').setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
// 		toggleButton.classList.remove('stroke-white');
// 		window.setTimeout(function() {
// 			displayNav.classList.add('hidden');
// 		}, 1000)
// 	}
// });