<?php
	require("conexion.php");


	$nombre = $_POST['nombre'];
	$num_trabajador = $_REQUEST['num_trabajador'];
	$passwd = $_POST['passwd'];
	$email=$_POST['email'];
	$telefono = $_POST['telefono'];
	$sexo = $_POST['sexo'];
	$linea_de_investigacion = $_POST['linea_de_investigacion'];

	
	
	$query="DELETE FROM revisor where num_trabajador= '$num_trabajador'" ;

	$resultado=$mysqli->query($query);
	echo $num_trabajador;

?>

<html>
	<head>
		<title>Modificar Paciente</title>
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
