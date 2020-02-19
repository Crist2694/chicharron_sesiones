<?php
	require("conexion.php");

	$query="SELECT id_alumno, nombre_proyecto, estatus, decision_final FROM formulario_protocolo";

	$resultado=$mysqli->query($query);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulario Protocolo</title>

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
				<li class=""><a href="indets.html">Formulario Protocolo</a></li>
				<li class="active">Nuevo </li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Nuevo Formulario de Protocolo
				</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Formulario </div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="guardadatosformulario.php" enctype="multipart/form-data" method="POST" name="nuevo_formulario">
							
								<div class="form-group">
									<label>Id Alumno</label>
									<input class="form-control" placeholder="Id Alumno" name="id_alumno">
								</div>
								<div class="form-group">
									<label>Nombre Proyecto</label>
									<input class="form-control" placeholder="Nombre Proyecto" name="nombre_proyecto">
								</div>
								<div class="form-group">
									<label>Estatus</label>
									<input class="form-control" placeholder="Estatus" name="estatus">
								</div>
								<div class="form-group">
									<label>Decision Final</label>
									<input class="form-control" placeholder="Decision Final" name="decision_final">
								</div>
							
									
								<button type="submit" class="btn btn-primary">Enviar</button>
								<button type="reset" class="btn btn-danger">Cancelar</button>
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
