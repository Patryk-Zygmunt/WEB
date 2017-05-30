
function makeChangedColorStrips(){
    var strips=document.getElementsByClassName("strip");
  strips = [].slice.call(strips);
    strips.forEach(function(strip){
       
        strip.style.backgroundColor = getRandomColor();
    });
    
}
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}


document.addEventListener("DOMContentLoaded", function () {
    var NavY = $('.menu-non-sticky').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.menu-non-sticky').addClass('menu-sticky');
	} else {
		$('.menu-non-sticky').removeClass('menu-sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});


  window.setInterval(makeChangedColorStrips,2000); 

});