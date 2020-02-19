<?php
	
	require("conexion.php");

	
	
	$num_trabajador = $_POST['num_trabajador'];
	$passwd = $_POST['passwd'];
	$nombre = $_POST['nombre'];
	$email=$_POST['email'];
	$telefono = $_POST['telefono'];
	$sexo = $_POST['sexo'];
	$linea_de_investigacion = $_POST['linea_de_investigacion'];

	

	$query="INSERT INTO revisor( num_trabajador, passwd, nombre, email, telefono, sexo, linea_de_investigacion) VALUES ( '$num_trabajador', '$passwd', '$nombre', '$email', '$telefono', '$sexo', '$linea_de_investigacion')";

	$resultado=$mysqli->query($query);
?>

<html>
	<head>
		<title>guardar Paciente</title>
		<meta charset="UTF-8"> 
	</head>
	<body>
		<center>

			<?php
			if($resultado>0){
			header("Location:formrevi.php");
			 } else { 
			echo "Error";
			 }?>
		</center>
	</body>
</html>