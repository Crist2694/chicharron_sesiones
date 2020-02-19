<?php
	require("conexion.php");

	$id_alumno=$_REQUEST['id_alumno'];

	$nombre_proyecto=$_POST['nombre_proyecto'];
	$estatus = $_POST['estatus'];
	$decision_final = $_POST['decision_final'];
	
	
	$query="UPDATE formulario_protocolo SET nombre_proyecto='$nombre_proyecto', estatus='$estatus', decision_final='$decision_final' where id_alumno=$id_alumno  " ;

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
			header("Location:vertesis.php");
			 } else { 
			echo "Error";
			 }?>	
		</center>
	</body>
</html>