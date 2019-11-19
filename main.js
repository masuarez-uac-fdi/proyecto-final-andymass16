jQuery(document).on('submit','#forming',function(event){
	event.preventDefault();
	jQuery.ajax({
		url:'login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('Validando...');
			$('.entryUsuario').val("");
			$('.entryPass').val("")
		}
	})
	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			if(respuesta.tipo == "Admin"){
				location.href = 'Admin/';
			}else if(respuesta.tipo == "Usuario"){
				location.href = 'User/';
			}
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			}, 3000);
			$('.botonlg').val('Iniciar Sesion');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
})

