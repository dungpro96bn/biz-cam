$(function () {
	$('.drawer_button').click(function () {
		$(this).toggleClass('active');
		$('.drawer_bg').fadeToggle();
		$('nav').toggleClass('open');
	})
	$('.drawer_bg').click(function () {
		$(this).fadeOut();
		$('.drawer_button').removeClass('active');
		$('nav').removeClass('open');
	});
	$(".touch-btn").on("click", function () {
		$(this).next().slideToggle();
	});
	$(".touch-btn2").on("click", function () {
		$(this).next().slideToggle();
	});
	$('#recruit .TAB input').click(function () {
		$("#recruit .contents").removeClass("is-open");
		var url = $(this).attr('data-tab');
		var dest = url.split('#');
		var target = dest[1];
		$('#' + target).addClass("is-open");
	});
})