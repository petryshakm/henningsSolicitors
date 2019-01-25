jQuery(document).ready(function($) {
	// modile menu
	$('.mobile-menu').click(function(event) {
		$('.wrapper').toggleClass('active');
		$(this).toggleClass('active');
	});
	// show more
	$('a[data-show-more]').click(function(event) {
		event.preventDefault();
		var th_attr = $(this).attr('data-show-more');
		$('*[data-show-more]').not($(this)).addClass('active');
		$(this).hide(0);
	});
	// clone phone
	var clone_phone = $('header .phone').clone().addClass('phone-mobile');
	$('footer').after(clone_phone)


	//section-welcome
	var src_img = $('.section-welcome .items .item:nth-child(2)').find('img').attr('src');
	$('.section-welcome .items .item:nth-child(2)').css('background-image', 'url(' + src_img + ')');















});