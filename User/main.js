 jQuery(document).on('submit','#formcg',function(event){
	event.preventDefault();
	jQuery.ajax({
		url:'updateUser.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botoncg').val('Actualizando...');
		}
	})
	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			$('.userCreated').slideDown('slow');
			setTimeout(function(){
				$('.userCreated').slideUp('slow');
			}, 3000);
			$('.botoncg').val('Actualizar');
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			}, 3000);
			$('.botoncg').val('Actualizar');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
})