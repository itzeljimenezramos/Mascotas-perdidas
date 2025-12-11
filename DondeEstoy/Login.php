<?php
include 'conexion.php'

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="static/css/login.css">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<main>
		<div class="contenedor_todo">
			<div class="caja_trasera">
				<div class="caja_trasera_login">
					<h3>¿Ya tienes una cuenta?</h3>
					<p>Inicia sesión para entrar en la página</p>
					<button id="btn_iniciar_sesion">Iniciar Sesión</button>
				</div>
				<div class="caja_trasera_registro">
					<h3>¿Aún no tienes una cuenta?</h3>
					<p>Registrate para que puedas iniciar sesión</p>
					<button id="btn_registrarse">Registrarse	</button>
				</div>
            </div>
				<!--LOGIN-->
			<div class="contenedor_login_registro">
				<form action="ingreso.php" class="formulario_login" method="POST">
					<h2>Iniciar Sesión</h2>
					<input type="text" placeholder="Correo Electronico" name="corre">
					<input type="password" placeholder="Contraseña" name="contra">
					<button>Entrar</button>
				</form>			
					<!--REGISTRO-->
				<form action="registro.php" method="POST" class="formulario_registro">
					<h2>Registrarse</h2>
					<input type="text" placeholder="Nombre completo" name="nom">
					<input type="text" placeholder="Correo Electronico" name="correo">
					<input type="text" placeholder="Usuario" name="usuario">
					<input type="password" placeholder="Contraseña" name="contraseña">
					<button>Registrarse</button>
				</form>
		    </div>
	    </div>
    </main>
	<script src="static/java/login.js"></script>
</body>
</html>