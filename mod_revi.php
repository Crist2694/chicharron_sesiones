<?php
	require("conexion.php");

	$nombre=$_REQUEST['nombre'];
	$num_trabajador=$_POST['num_trabajador'];
	$passwd = $_POST['passwd'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$sexo = $_POST['sexo'];
	$linea_de_investigacion = $_POST['linea_de_investigacion'];
	

	
	$query="UPDATE revisor SET num_trabajador='$num_trabajador',passwd='$passwd', nombre='$nombre',   email='$email',  telefono='$telefono',  sexo='$sexo',  linea_de_investigacion='$linea_de_investigacion' where num_trabajador=$num_trabajador  " ;

	$resultado=$mysqli->query($query);
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