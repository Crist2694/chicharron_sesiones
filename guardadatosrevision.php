<?php
	
	require("conexion.php");

	
	$fecha = $_POST['fecha'];
	$num_rev = $_POST['num_rev'];
	$evaluacion = $_POST['evaluacion'];
	$id_formulario_protocolo = $_POST['id_formulario_protocolo'];
	$id_alumno = $_POST['id_alumno'];
	$id_revisor = $_POST['id_revisor'];
	
	

	$query="INSERT INTO revision( fecha, num_rev, evaluacion, id_formulario_protocolo, id_alumno, id_revisor) VALUES ( '$fecha', '$num_rev','$evaluacion', '$id_formulario_protocolo', '$id_alumno', '$id_revisor')";

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
			header("Location:verrevisiones.php");
			 } else { 
			echo "Error";
			 }?>
		</center>
	</body>
</html>