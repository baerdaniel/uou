// All custom Javascript


$(document).ready(function(){


	$('.mood-gallery .gallery').click(moodSlider);


});




function moodSlider(e){

	var dh = $(document).height();

	$(this).toggleClass('open');
	$(this).css('height' , dh + 'px');

};