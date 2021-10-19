<html>
	<head>
		<title>Lista Empleados</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/listar.css">
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
		
		<?php
		
			$servidorbd = "12.2daw.esvirgua.com";
			$basedatos = "user2daw_BD2-12";
			$usuario = "user2daw_12";
			$contraseña = "rV%HQJ=;rmOz";
			
			$conexion = mysqli_connect($servidorbd, $usuario, $contraseña, $basedatos);
		
			$consulta = "SELECT DNI, Nombre, Correo, Telefono FROM Empleados";
			$resultado = mysqli_query($conexion, $consulta);
		
			echo "<table><tr>";
			echo "<th class='radius1'>DNI</th><th>NOMBRE</th><th>CORREO</th><th class='radius2'>TELEFONO</th></tr><tr>";
			while($fila = mysqli_fetch_array($resultado))
			{
				echo "<td class='radius1'>".$fila['DNI']."</td>";
				echo "<td>".$fila['Nombre']."</td>";
				echo "<td>".$fila['Correo']."</td>";
				echo "<td class='radius2'>".$fila['Telefono']."</td>";
				//echo "<td><input type='button' value='Modificar'></td>";
				//echo "<td class='radius2'><input type='button' value='Borrar'></td>";
				echo "</tr><tr>";
			}
			echo "</table>";			
			
			
		?>
	</body>
</html>