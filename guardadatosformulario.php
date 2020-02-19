<?php
	
	require("conexion.php");

	
	$id_alumno = $_POST['id_alumno'];
	$nombre_proyecto = $_POST['nombre_proyecto'];
	$estatus = $_POST['estatus'];
	$decision_final = $_POST['decision_final'];
	
	

	

	$query="INSERT INTO formulario_protocolo( id_alumno, nombre_proyecto, estatus, decision_final) VALUES ( '$id_alumno', '$nombre_proyecto', '$estatus', '$decision_final')";

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
			header("Location:formadmin.php");
			 } else { 
			echo "Error";
			 }?>
		</center>
	</body>
</html>