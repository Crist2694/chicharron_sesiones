<?php
	require("conexion.php");

	$id_admin=$_REQUEST['id_admin'];

	$num_trabajador=$_POST['num_trabajador'];
	$passwd = $_POST['passwd'];
	
	
	$query="UPDATE admin SET num_trabajador='$num_trabajador', passwd='$passwd' where id_admin=$id_admin  " ;

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
			header("Location:formadmin.php");
			 } else { 
			echo "Error";
			 }?>	
		</center>
	</body>
</html>