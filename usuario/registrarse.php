<!DOCTYPE html>
<html>
<head>
	<title>Registro Usuario</title>
</head>
<body>
<form action="../controlador/controladorUsuario.php" method="POST">
	<h3>Registrar Usuario</h3>
	<label>Documento:</label>
	<input type="text" name="idUsuario" required class="form-control">
	<label>Nombre:</label>
	<input type="text" name="nombres" required class="form-control">
	<label>Apellidos:</label>
	<input type="text" name="apellidos" required class="form-control">
	<label>Contraseña</label>
	<input type="password" name="clave" required class="form-control">
	<input type="submit" id="registrarse" name="registrarse" value="Registrarse">
</form>
</body>
</html>