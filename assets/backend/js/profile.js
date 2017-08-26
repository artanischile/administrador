$(document).ready(function(){
	
   $( "#msg-error" ).hide();
	$('#nombre').on('input',function(e){
	     alert('Changed!')
	    });
	

});


function ShowAddProfile() {
 	$("#ttt").html("Creacion de Perfil");
	$("#enviar").show();
		$('.modal-body').load(base_url+'bo/profile/Add', function(result) {
			$('#Profile').modal({
				show : true, 
				backdrop : 'static'

			});
		});
}


function ShowEditProfile(id){
	 $("#ttt").html("Edicion de Usuario");
	$('.modal-body').load(base_url+'bo/profile/edit/' + id,
			function(result) {
				$('#mymodal').modal({
					show : true,
					backdrop : 'static'

				});
			});
	
	
}

function ShowViewFormUser(id){
   $("#tt").html("Informacion de Usuario");
	$('.modal-body').load(base_url+'bo/profile/view/' + id,
			function(result) {
				$('#mymodal2').modal({
					show : true,
					backdrop : 'static'

				});
				
			});
	
	
}

function ShowDeleteProfile(id){
	 $("#ttt").html("Eliminacion de Usuario");
	$('.modal-body').load(base_url+'bo/profile/delete/' + id,
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
		url : '/administrador/bo/profile/activate/'+id,
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
   alert('holas que tal');
	$.ajax({
		type : "POST",
		url : '/administrador/bo/profile/save',
		data : $("#frmProfile").serialize(),
		dataType : "json",
		success : function(data) {
			if (data['succes'] == "error") {
				
				if (data['profile_name'] != "") {
					$('.Nombre').addClass('has-error');
					$(".eProfileName").html(data['nombre']).fadeIn();
					
				}
				
				if (data['profile_status'] != "") {
					$('.Estado').addClass('has-error');
					$(".eProfileStatus").html(data['email']).fadeIn();
					
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

