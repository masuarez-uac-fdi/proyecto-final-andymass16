$(document).ready(function(){
	//$('ul li a:first').addClass('active');
	$('.secciones article').hide();
	//$('.secciones article:first').show();

	$('ul li a').click(function(){
		$('ul li a').removeClass('active');
		$(this).addClass('active');
		$('.secciones article').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		//return false;
		
	});
	$('#contactolist').click(function(){
		var a = confirm("¿Está seguro de desea abandonar la página?");
		if(a == false){
			return false;
		}
	});


});