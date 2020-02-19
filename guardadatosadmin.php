<?php
	
	require("conexion.php");

	
	$num_trabajador = $_POST['num_trabajador'];
	$passwd = $_POST['passwd'];
	

	

	$query="INSERT INTO admin( num_trabajador, passwd) VALUES ( '$num_trabajador', '$passwd')";

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