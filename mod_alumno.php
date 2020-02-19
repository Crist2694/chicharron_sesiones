<?php
	require("conexion.php");

	session_start();

	$nombre=$_POST['nombre'];
	$matricula=$_REQUEST['matricula'];
	$passwd = $_POST['passwd'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	

	
	$query="UPDATE alumno SET nombre='$nombre', matricula='$matricula', passwd='$passwd', email='$email',  telefono='$telefono' where matricula=$matricula  " ;

	$resultado=$mysqli->query($query);

	$num_trabajador=$_SESSION['num_trabajador'];
	 if (isset($_SESSION['num_trabajador'])){
        $num_trabajador = $_SESSION['num_trabajador'];
    }else{
 header('Location: index.html');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }
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
			header("Location:formalum.php");
			 } else { 
			echo "Error";
			 }?>	
		</center>
	</body>
</html>