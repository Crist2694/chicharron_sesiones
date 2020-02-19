<?php
	
	require("conexion.php");

	
	$nombre = $_POST['nombre'];
	$matricula = $_POST['matricula'];
	$passwd = $_POST['passwd'];
	$email=$_POST['email'];
	$telefono = $_POST['telefono'];

	

	$query="INSERT INTO alumno( nombre, matricula, passwd, email, telefono) VALUES ( '$nombre', '$matricula', '$passwd', '$email', '$telefono')";

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
			header("Location:formalum.php");
			 } else { 
			echo "Error";
			 }?>
		</center>
	</body>
</html>