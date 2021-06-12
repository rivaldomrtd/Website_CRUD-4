$('#image-map area').hover(
	function () {
		var coords = $(this).attr('coords').split(',');
		var width = $('.image-map-container').width();
		var height = $('.image-map-container').height();
		$('.image-map-container .map-selector').addClass('hover').css({
			'left': coords[0]+'px',
			'top': coords[1] + 'px',
			'right': width - coords[2],
			'bottom': height - coords[3]
		})
	 },
	function () {
		$('.image-map-container .map-selector').removeClass('hover').attr('style','');
	}
)
