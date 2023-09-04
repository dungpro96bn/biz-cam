$(window).load(function(){var scrollvalue=(960-$(window).width())/2;$('.container_column').scrollLeft(scrollvalue)});

$(function () {
	$('.btn-popup').click(function (event) {
		event.preventDefault();
		var url = $(this).attr('href');
		var dest = url.split('#');
		var target = dest[1];
		$('#' + target).addClass('is-open');
	});
	$('.popup .btn-close').click(function (event) {
		$(this).parents(".popup").removeClass('is-open');
	});
});