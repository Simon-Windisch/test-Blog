$(document).ready(function(){
	
	//input focus and blur
	$('input[type="text"]').focus(function(){
		if($(this).val()==$(this).attr('title')) $(this).val('');
	});
	$('input[type="text"]').blur(function(){
		if($(this).val()=='' || $(this).val()==$(this).attr('title')) $(this).val($(this).attr('title'));
	});	
	
	$("#mainNav li:last").addClass("last");
	
	$(".commentlist li:last").addClass("last");
	
	
	
});