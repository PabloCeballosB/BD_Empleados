CREATE DATABASE BD_Empleados;

CREATE TABLE Empleados
(
	IdEmpleado	int	PRIMARY KEY	NOT NULL,
	DNI	char(9) NOT NULL,
	Nombre	varchar(50) NOT NULL,
	Correo	varchar(100) NOT NULL,
	Telefono	char(9) NOT NULL
);