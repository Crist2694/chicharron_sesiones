<?php
	require("conexion.php");

	$num_trabajador= $_REQUEST['num_trabajador'];

	$query="SELECT id_revisor, num_trabajador, passwd, nombre, email, telefono, sexo, linea_de_investigacion FROM revisor";

	$resultado=$mysqli->query($query);

	$row=$resultado->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Alumnos</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>


<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="indets.html"><span>Tesis</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>

			</div>

							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Bienvenido">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="formalum.php"><span class="glyphicon glyphicon-th"></span> Alumno</a></li>
			<li class="active"><a href="formrevi.php"><span class="glyphicon glyphicon-stats"></span> Revisor</a></li>
			<li class="active"><a href="formadmin.php"><span class="glyphicon glyphicon-list-alt"></span> Administrador</a></li>
			<li class="active"><a href="vertesis.php"><span class="glyphicon glyphicon-list-alt"></span> Tesis</a></li>
			<li class="active"><a href="verformulario.php"><span class="glyphicon glyphicon-list-alt"></span> Ver Formulario</a></li>
			<li class="active"><a href="verrevisiones.php"><span class="glyphicon glyphicon-list-alt"></span> Revisiones</a></li>
		</ul>

		<div class="col-md-4">
				<tr></tr>
				<br>
				<br>
				<img src="buap.png">
			</div>
	</div><!--/.sidebar-->


		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="indets.html"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class=""><a href="formalum.php">Revisor</a></li>
				<li class="active">Nuevo Revisor</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Nuevo
				</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Revisor</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="mod_revi.php?num_trabajador=<?php echo $row['num_trabajador'];?>" enctype="multipart/form-data" method="POST" name="modificar_alumno">
							
								<div class="form-group">
									<label>Nombre</label>
									<input class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $row['nombre'];?>">
								</div>
									

								<div class="form-group">
									<label>Numero de Trabajador</label>
									<input class="form-control" placeholder="Matricula" name="num_trabajador" value="<?php echo $row['num_trabajador'];?>">
								</div>

								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="passwd" value="<?php echo $row['passwd'];?>">
								</div>

								<div class="form-group">
									<label>Email</label>
									<input class="form-control" placeholder="Email" name="email" value="<?php echo $row['email'];?>">
								</div>

								<div class="form-group">
									<label>Telefono</label>
									<input class="form-control" placeholder="Telefono" name="telefono" value="<?php echo $row['telefono'];?>">
								</div>
								<div class="form-group">
									<label>Sexo</label>
									<input class="form-control" placeholder="Sexo" name="sexo" value="<?php echo $row['sexo'];?>">
								</div>
								<div class="form-group">
									<label>Linea de Investigacion</label>
									<input class="form-control" placeholder="Linea de Investigacion" name="linea_de_investigacion" value="<?php echo $row['linea_de_investigacion'];?>">
								</div>
								
								
								<a href="mod_revi.php?num_trabajador=<?php echo $row['num_trabajador'];?>"><button type="submit" class="btn btn-primary">Enviar</a></button>
								<a href="formrevi.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

		</div><!--/.row-->	
		
		
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
