$(document).ready(function(){
	/* 画像を押す */
	$('.img').on('click',function()
		{
			idname = $(this).attr("id");
			$('#back-curtain')
		.css({
			'width' : $(window).width(),
			'height' : $(window).height()
		})
	.show();
	idname = idname + 1;
	$('.img').after(idname);
	$('.largeImg',this)
		.css({
			'position': 'absolute',
			'left': Math.floor(($(window).width() - 800) / 2) +'px',
			'top': $(window).scrollTop() + 120 + 'px'
		})
	.show();
	$('#buttonR')
		.css({
			'position': 'absolute',
			'left': Math.floor(($(window).width()) / 2) +'px',
			'top': $(window).scrollTop() + 120 + 'px'
		})
	.show();
	$('#buttonL')
		.css({
			'position': 'absolute',
			'left': Math.floor(($(window).width() - 800) / 2) +'px',
			'top': $(window).scrollTop() + 120 + 'px'
		})
	.show();

		});

$('#buttonR').on('click',function()
		{
			idname = idname + 1;
			$('.largeImg','#'+ idname)
	.css({
		'position': 'absolute',
		'left': Math.floor(($(window).width() - 800) / 2) +'px',
		'top': $(window).scrollTop() + 120 + 'px'
	})
.show();

		});


$('.largeImg, #back-curtain').on('click',function()
		{
			$('.largeImg').fadeOut('slow', function() { $('#back-curtain').hide();});
		});

});
