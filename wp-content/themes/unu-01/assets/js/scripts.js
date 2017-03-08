// All custom Javascript


$(document).ready(function(){

	// $(initiateFlickity);


	$('.open-gallery').click(moodSlider);
	$('.open-gallery').click(initiateFlickity);
	$('.open-gallery').click(darkBackground);


});



function initiateFlickity(e){
	$('.mood-gallery .gallery').flickity({
	  // options
	  cellAlign: 'center',
	  contain: true,
	  wrapAround: true,
	  freeScroll: true,
		freeScrollFriction: 0.01,
	  cellSelector: '.slide'
	});
}


function moodSlider(e){
	$('.mood-gallery').toggleClass('closed');
};

function darkBackground(e) {
	$('body').toggleClass('dark');
}
