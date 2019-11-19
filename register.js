//INTENTO DE REGISTRO FORM 
jQuery(document).on('submit','#formreg',function(event){
	event.preventDefault();
	jQuery.ajax({
		url:'createUser.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonreg').val('Creando...');
			$('.entryNombre').val("");
			$('.entryUsuario').val("");
			$('.entryPass').val("");
		}
	})
	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			$('.userCreated').slideDown('slow');
			setTimeout(function(){
				$('.userCreated').slideUp('slow');
			}, 3000);
			$('.botonrg').val('Crear cuenta');
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			}, 3000);
			$('.botonrg').val('Crear cuenta');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
})