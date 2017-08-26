$(document).ready(function(){
	
   $( "#msg-error" ).hide();
	$('#nombre').on('input',function(e){
	     alert('Changed!')
	    });
	

});


function ShowAddFormUser() {
	 $("#ttt").html("Creacion de Usuario");
	$("#enviar").show();
		$('.modal-body').load(base_url+'bo/user/add', function(result) {
			$('#mymodal').modal({
				show : true, 
				backdrop : 'static'

			});
		});

}


function ShowEditFormUser(id){
	 $("#ttt").html("Edicion de Usuario");
	$('.modal-body').load(base_url+'bo/user/edit/' + id,
			function(result) {
				$('#mymodal').modal({
					show : true,
					backdrop : 'static'

				});
			});
	
	
}

function ShowViewFormUser(id){
   $("#tt").html("Informacion de Usuario");
	$('.modal-body').load(base_url+'bo/user/view/' + id,
			function(result) {
				$('#mymodal2').modal({
					show : true,
					backdrop : 'static'

				});
				
			});
	
	
}

function ShowDeleteFormUser(id){
	 $("#ttt").html("Eliminacion de Usuario");
	$('.modal-body').load(base_url+'bo/user/delete/' + id,
			function(result) {
				$('#mymodal').modal({
					show : true,
					backdrop : 'static'

				});
			});
	
	
}



/*
 * else {
		

	}*/
    
    
function Activate(id){
   	$.ajax({
		type : "POST",
		url : '/administrador/bo/user/activate/'+id,
		data : $("#frmUser").serialize(),
		dataType : "json",
		success : function(data) {
			if (data['succes'] == "OK") {
				 $("#msg-error").html('Operacion Realizada con exito').fadeIn(1000).delay( 1000 ).slideUp();
				 setTimeout(function(){  $(location).attr('href',base_url+'bo/user/'); }, 3000);
			}else{
				$("#msg-error").html('Operacion fallida').fadeIn(1000).delay(2000).fadeOut();
			}
		}
	})
    
}    
    
    
	 	
function Validarform() {
   
	$.ajax({
		type : "POST",
		url : '/administrador/bo/user/save',
		data : $("#frmUser").serialize(),
		dataType : "json",
		success : function(data) {
			if (data['succes'] == "error") {
				
				if (data['nombre'] != "") {
					$('.Nombre').addClass('has-error');
					$(".eNombre").html(data['nombre']).fadeIn();
					
				}
				
				if (data['email'] != "") {
					$('.Email').addClass('has-error');
					$(".eEmail").html(data['email']).fadeIn();
					
				}
				
				if (data['usuario'] != "") {
					$('.Usuario').addClass('has-error');
					$(".eUsuario").html(data['usuario']).fadeIn();
					
				}
				
				if (data['password'] != "") {
					$('.Password').addClass('has-error');
					$(".ePassword").html(data['password']).fadeIn();
					
				}
				
				if (data['perfil'] != "") {
					$('.Perfil').addClass('has-error');
					$(".ePerfil").html(data['perfil']).fadeIn();
					
				}
				
				if (data['estado'] != "") {
					$('.Estado').addClass('has-error');
					$(".eEstado").html(data['estado']).fadeIn();
					
				}
			}
			if (data['succes'] == "OK") {
				$('#mymodal').modal('hide');
				$("#msg-error").html('Operacion Realizada con exito').fadeIn(1000);
				setTimeout(function(){  $(location).attr('href',base_url+'bo/user/'); }, 3000);
				
			}
		}
	})
}

