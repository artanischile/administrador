$(document).ready(function(){
    $(":file").filestyle({
        buttonText: "",
        buttonName: "btn-primary",
        iconName: "fa fa-upload",
        
    });
    
    
	$('#frmBanners').submit(function(e) {
		e.preventDefault();
		$.ajaxFileUpload({
			url 			:base_url+'bo/upload/do_upload', 
			secureuri		:false,
			fileElementId	:'archivo',
			dataType		: 'json',
			data			: {
				'csrf_token':$('input[name=csrf_token]').val(),
                'descripcion':$('input[name=descripcion]').val(),
			},
			success	: function (data, status)
			{
				if(data.status != 'error')
				{
					$('#files').html('<p>Reloading files...</p>');
					refresh_files();
					$('#title').val('');
				}
				alert(data.msg);
			}
		});
		return false;
	});

    
});





function ShowAddBanner() {
	 $("#ttt").html("Ingreso Banner");
	$("#enviar").show();
		$('.modal-body').load(base_url+'bo/banner/add', function(result) {
			$('#banners_modal').modal({
				show : true, 
				backdrop : 'static'

			});
		});

}


function ShowEditBanner(id){
	 $("#ttt").html("Edicion de Banner");
	$('.modal-body').load('/administrador/bo/productos/editar/' + id,
			function(result) {
				$('#mymodal').modal({
					show : true,
					backdrop : 'static'

				});
			});
	
	
}

function ShowViewProduct(id){
   $("#tt").html("Informacion de un producto");
	$('.modal-body').load('/administrador/bo/productos/ver/' + id,
			function(result) {
				$('#mymodal2').modal({
					show : true,
					backdrop : 'static'

				});
				
			});
	
	
}

function ShowDeleteProduct(id){
	 $("#ttt").html("Eliminacion de un producto");
	$('.modal-body').load('/administrador/bo/productos/eliminar/' + id,
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

function Validarform() {

	$.ajax({
		type : "POST",
		url : '/administrador/bo/banners/guardar',
		data : $("#frmBanners").serialize(),
		dataType : "json",
		success : function(data) {
		  
             
          
			if (data['succes'] == "error") {
				
				/*if (data['nombre'] != "") {
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
					
				}*/
			}
			
            /*if (data['succes'] == "error") {
				// $('#error').html('<ul>'+data['rut']+data['abono']+'</ul>').fadeIn();
                
				if (data['rut'] != "") {
					$('.Rut').addClass('has-error');
					$("#msg-error").html(data['rut']).fadeIn();
					return false;
				}
				if (data['nombre'] != "") {
					$('.Nombre').addClass('has-error');
					$("#msg-error").html(data['nombre']).fadeIn();
					return false;
				}

				if (data['email'] != "") {
					$('.Email').addClass('has-error');
					$("#msg-error").html(data['email']).fadeIn();
					return false;
				}

				if (data['usuario'] != "") {
					$('.Usuario').addClass('has-error');
					$("#msg-error").html(data['usuario']).fadeIn();
					return false;
				}

				if (data['password'] != "") {
					$('.Password').addClass('has-error');
					$("#msg-error").html(data['password']).fadeIn();
					return false;
				}

				if (data['estado'] != "") {
					$('.Estado').addClass('has-error');
					$("#msg-error").html(data['estado']).fadeIn();
					return false;
				}

				$("#msg-error").fadeOut(5000);

			}*/

			if (data['succes'] == "OK") {
				 $("#msg-error").html('Operacion Realizada con exito').fadeIn(1000);
				 //setTimeout(function(){  $(location).attr('href',base_url+'bo/usuarios/'); }, 3000);
				
			}else{
				$("#msg-error").html('Operacion fallida').fadeIn(1000).delay(2000).fadeOut();
			}
		}
	})
}

