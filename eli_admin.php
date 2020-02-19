<?php
	require("conexion.php");


	
	$num_trabajador = $_REQUEST['num_trabajador'];
	$passwd = $_POST['passwd'];
	
	
	
	$query="DELETE FROM admin where num_trabajador= '$num_trabajador'" ;

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
			header("Location:formadmin.php");
			 } else { 
			echo "Error";
			 }?>	
		</center>
	</body>
</html>
