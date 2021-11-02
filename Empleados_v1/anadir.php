<html>
	<head>
		<title>Añadir</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/anadir.css">
	</head>
	<body>
		<div id="CajaInicial">
			<div>
				<h2>
					<a href="listar.php">
						Listar Empleados
					</a>
				</h2>
			</div>
			<div>
				<h2>
					<a href="anadir.php">
						Añadir Empleado
					</a>
				</h2>
			</div>
			<div>
				<h2>
					<a href="gestionar.php">
						Gestionar Empleado
					</a>
				</h2>
			</div>
		</div>
		
		<form method="post">
			<input type="text" id="DNI" name="DNI" value="DNI" onclick="this.value=''" maxlength="9" Required>
			<input type="text" id="Nombre" name="Nombre" value="Nombre" onclick="this.value=''" maxlength="50" Required>
			<input type="text" id="Correo" name="Correo" value="Correo" onclick="this.value=''" maxlength="100" Required>
			<input type="text" id="Telefono" name="Telefono" value="Telefono" onclick="this.value=''" maxlength="9" Required>
			<input type="submit" id="Enviar" name="Enviar" value="Enviar">
		</form>
		
		
		<?php
			$servidorbd = "12.2daw.esvirgua.com";
			$basedatos = "user2daw_BD2-12";
			$usuario = "user2daw_12";
			$contraseña = "rV%HQJ=;rmOz";
			$consulta = "SELECT DNI FROM Empleados";
			$conexion = mysqli_connect($servidorbd, $usuario, $contraseña, $basedatos);
			
			
			if(isset($_POST['Enviar'])){
				$dni = $_POST['DNI'];
				$nombre = $_POST['Nombre'];
				$edad = $_POST['Edad'];
				$correo = $_POST['Correo'];
				$telefono = $_POST['Telefono'];
				$consulta = "INSERT INTO Empleados (DNI, Nombre, Correo, Telefono) VALUES ('".$dni."', '".$nombre."', '".$correo."', '".$telefono."');";
			}
			$resultado = mysqli_query($conexion, $consulta);
			
			
		?>
		
	</body>
</html>