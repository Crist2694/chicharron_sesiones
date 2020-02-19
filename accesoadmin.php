<?php
	

	session_start();




	$num_trabajador = !empty($_REQUEST['num_trabajador'])?$_REQUEST['num_trabajador']:'';
	$passwd = !empty($_REQUEST['passwd'])?$_REQUEST['passwd']:'';

	$_SESSION['num_trabajador']="$num_trabajador";

	if($num_trabajador && $passwd){
		require("conexion.php");
		$queryadmin ="select * from admin where num_trabajador ='$num_trabajador' and passwd = '$passwd'";
		$resultado = $mysqli->query($queryadmin);
		$admin = $resultado->num_rows;
		//
		$queryrevisor ="select * from revisor where num_trabajador ='$num_trabajador' and passwd = '$passwd'";
		$resultado = $mysqli->query($queryrevisor);
		$revisor = $resultado->num_rows;
		//
		$queryalumno ="select * from alumno where matricula ='$num_trabajador' and passwd = '$passwd'";
		$resultado = $mysqli->query($queryalumno);
		$alumno = $resultado->num_rows;

		if($admin>0)
		{
			
			header('location: formalum.php');
			
/*			$_SESSION['apellido']="Tellez";
			echo "<a href='pagina2.html'>Ir a pagina 2</a>";*/

			//echo "Entraste";
		}
		elseif ($revisor >0 ) {
			# code...
			header('location: indexrevisor.php');
		}
		elseif ($alumno >0 ) {
			# code...
			
			header('location: formalum.php');
		}
		else
		{
			header('location: index.html');
		}

	}	
	else
	{
		header('location: index.html');
	}

?>