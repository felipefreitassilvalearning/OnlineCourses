$(function(){

	//Plugin social media.
	$('#social-share').jsSocials({
    	shares: ["facebook"]
	});

	//Plugin mask
	
	$('input[name=telefone]').mask('(99)99999-9999');
	$('input[name=data]').mask('99/99/9999');

	//Plugin FancyBox

	$('a').fancybox({
		'openEffect':'none',
		arrows:false
	});

});