<?php
	require("conexion.php");

session_start();

$matricula = $_REQUEST['matricula'];
	
	
	
	$query="DELETE FROM alumno where matricula= '$matricula'" ;

	$resultado=$mysqli->query($query);
	echo $matricula;
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
		<?php

$num_trabajador=$_SESSION['num_trabajador'];

//echo "el nombre es: $num_trabajador <br>";


//echo "<a href='pagina4.php'> Cerrar sesion </a>";

?>
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
