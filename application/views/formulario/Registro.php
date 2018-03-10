<html>
<head>
	<meta charset ="utf-8">
	<title>Registro</title>

</head>
<body>
<h1>Aqui usted creara sus usuarios</h1>
	<form action="registro/add" method="post">
		<div>
		 	<label>Usuario</label>
			<input type="text" name="usuario"/>
		</div>
		<div>
			<label>Contraseña</label>
			<input type="text" name="pass" />
		</div>
		<div>
			<label>Cargo</label>
			<input type="text" name="cargo">
		</div>
		<input type="submit" value ="Registrarme" />
	</form>
	<p>	Ir a <a href="<?= base_url() ?>">Iniciar Sesión</a> </p>
</form>
</body>
</html>