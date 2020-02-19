<?php
	require("conexion.php");


	$id_revision = $_REQUEST['id_revision'];
	
	$query="SELECT id_revision, fecha, num_rev, evaluacion, id_formulario_protocolo, id_alumno, id_revisor FROM revision";

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
				<li class=""><a href="formadmin.php">Admin</a></li>
				<li class="active">Modificar Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Modificar
				</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Admin</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="mod_revision.php?id_revision=<?php echo $row['id_revision'];?>" enctype="multipart/form-data" method="POST" name="modificar_admin">
							
								<div class="form-group">
									<label>Fecha</label>
									<input class="form-control" placeholder="Fecha" name="fecha" value="<?php echo $row['fecha'];?>">
								</div>

								<div class="form-group">
									<label>Numero de Revision</label>
									<input class="form-control" placeholder="Numero de Revisionr" name="Numero de Revision" value="<?php echo $row['num_rev'];?>">
								</div>

								<div class="form-group">
									<label>Evaluacion</label>
									<input class="form-control" placeholder="Evaluacion" name="Evaluacion" value="<?php echo $row['fecha'];?>">
								</div>
								<div class="form-group">
									<label>Formulario de Protocolo</label>
									<input class="form-control" placeholder="Formulario de Protocolo" name="id_formulario_protocolo" value="<?php echo $row['id_formulario_protocolo'];?>">
								</div>
								<div class="form-group">
									<label>Id Alumno</label>
									<input class="form-control" placeholder="Id Alumno" name="id_alumno" value="<?php echo $row['id_alumno'];?>">
								</div>
								<div class="form-group">
									<label>Id Revisor</label>
									<input class="form-control" placeholder="Id Revisor" name="id_revisor" value="<?php echo $row['id_revisor'];?>">
								</div>

							
								
								
								<a href="mod_revision.php?id_revision=<?php echo $row['id_revision'];?>"><button type="submit" class="btn btn-primary">Enviar</a></button>
								<a href="formadmin.php"><button type="submit" class="btn btn-danger">Cancelar</button></a>
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
