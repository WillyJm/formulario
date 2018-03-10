<html>
<head>
	<meta charset ="utf-8">
	<title>Formulario en Html</title>

</head>
<body>
	<h1>Inicie sesion</h1>
	<form action="<?= base_url() ?>login/validar" method="post">
		<div>
		 	<label>Usuario</label>
			<input type="text" name="usuario"/>
		</div>
		<div>
			<label>Contraseña</label>
			<input type="password" name="pass" />
		</div>
		<div>
		<input type="submit" value ="Iniciar Sesión" />
	</form>
	<p>	¿No tienes cuenta? <a href="<?= base_url() ?>registro">Registrarme</a> </p>
</body>
</html>