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
			
			/*echo "<form method='post'>";
			echo "<input type='text' id='DNI' name='DNI' value='DNI' onclick='this.value=''' maxlength='9' Required>";
			echo "<input type='text' id='Nombre' name='Nombre' value='Nombre' onclick='this.value=''' maxlength='50' Required>";
			echo "<input type='text' id='Correo' name='Correo' value='Correo' onclick='this.value=''' maxlength='100' Required>";
			echo "<input type='text' id='Telefono' name='Telefono' value='Telefono' onclick='this.value=''' maxlength='9' Required>";
			echo "<input type='submit' id='Enviar' name='Enviar' value='Enviar'>";
			echo "</form>";
			*/
			
			if(isset($_POST['enviar'])){
				$dni = $_POST['DNI'];
				$nombre = $_POST['Nombre'];
				$edad = $_POST['Edad'];
				$correo = $_POST['Correo'];
			}
			
			echo $dni." DNI Probando";
		?>
		
	</body>
</html>