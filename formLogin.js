$(document).ready(function(){
	
	$('.container2').hide();
	$('.container form a').click(function(){
		$('.container').hide();
		$('.container2').show();
	});
	$('.container2 form a').click(function(){
		$('.container2').hide();
		$('.container').show();
	});
});