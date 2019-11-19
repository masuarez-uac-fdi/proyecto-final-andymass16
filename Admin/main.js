jQuery(document).on('submit','#forming',function(event){
	event.preventDefault();
	jQuery.ajax({
		url:'eliminarUser.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('Eliminando...');
			$('.entryId').val("");
		}
	})
	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			$('.userCreated').slideDown('slow');
			setTimeout(function(){
				$('.userCreated').slideUp('slow');
			}, 3000);
			$('.botonlg').val('Eliminar');
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			}, 3000);
			$('.botonlg').val('Eliminar');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
})