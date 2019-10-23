<?php 	
	session_start();
	session_unset();
	session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Apple Academy - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="librerias/images/logoBanner2.png"/>
	<link rel="stylesheet" type="text/css" href="librerias/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/css/util.css">
	<link rel="stylesheet" type="text/css" href="librerias/css/main.css">
	<link rel="stylesheet" type="text/css" href="librerias/css/alertify.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/css/themes/default.css">
</head>
<body onload="nobackbutton();">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(librerias/images/bg-01.jpg);">
					<span class="login100-form-title-1">Login - Apple Academy</span>
				</div>
				<form class="login100-form validate-form" method="POST" name="frmDatosUsuario" id="frmDatosUsuario">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="usuario" id="usuario" placeholder="Ingrese Usuario">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="clave" id="clave" placeholder="Ingrese Contraseña">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button type="button" class="login100-form-btn" name="btnEntrar" id="btnEntrar">
							Entrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="librerias/js/alertify.js"></script>
	<script src="librerias/vendor/jquery/jquery.min.js"></script>
	<script src="librerias/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="librerias/js/main.js"></script>
	<script>
		$("#usuario").focus();

		$("#btnEntrar").click(function(){
			if($("#usuario").val()==""){
				alertify.warning('POR FAVOR, INGRESE SU USUARIO.');
				$("#usuario").focus();
			}else if($("#clave").val()==""){
				alertify.warning('POR FAVOR, INGRESE SU CONTRASEÑA.');
				$("#clave").focus();
			}else{
	            var url="assets/config/validarLogin.php";
	            $.ajax({
	                type: "POST",
	                url: url,
	                data:$("#frmDatosUsuario").serialize(),
	                success: function (data){
	                    if(data=='1'){//USUARIO CORRECTO
	                        location.href = "assets/files/vista/selSuc.php";
	                    }else if(data=='2'){//USUARIO DESHABILITADO
	                        alertify.warning('SU USUARIO ESTÁ DESHABILITADO. CONTÁCTE CON EL ADMINISTRADOR DEL SISTEMA.');  
	                    }else{//DATOS INCORRECTOS
	                        alertify.warning(data);  
	                    }
	                }
	            });
			}
		});

      	function nobackbutton(){ 
        	window.location.hash="no-back-button";
        	window.location.hash="Again-No-back-button" //chrome
        	window.onhashchange=function(){window.location.hash="no-back-button";}
      	}
	</script>
</body>
</html>