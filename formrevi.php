<?php
	require("conexion.php");

	$query="SELECT id_revisor, num_trabajador, passwd, nombre,  email, telefono, sexo, linea_de_investigacion FROM revisor";

	$resultado=$mysqli->query($query);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profesores</title>

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
				<a class="navbar-brand" href="#"><span>Tesis</span>Admin</a>
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
				<li><a href="indets.html""><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Datos</li>
			</ol>
		</div><!--/.row-->



		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Datos Revisor</div>
					<div class="panel-body">
						<table  class="table table-hover" >
						    <thead>

						    <tr>
						    	<th data-field="name" data-sortable="true" >Num Trabajador</th>
						        <th data-field="name" data-sortable="true">Password</th>
						        <th data-field="name" data-sortable="true">Nombre</th>
						        <th data-field="name" data-sortable="true">Email</th>
						        <th data-field="name" data-sortable="true">Telefono</th>
						        <th data-field="name" data-sortable="true">Sexo</th>
						        <th data-field="name" data-sortable="true">Linea Investigación</th>
						        <th data-field="state" data-checkbox="true">Modificar</a></th>
						        <th data-field="state" data-checkbox="true">Eliminar</a></th>
						    </tr>
						    
						    
						    <tbody>
						    	<?php
 								while ($row=$resultado->fetch_assoc()) {
 					
								?>
								<tr>
									<td><?php echo $row['num_trabajador']; ?> </td>
									<td> <?php echo $row['passwd']; ?></td>
									<td><?php echo $row['nombre']; ?> </td>
									<td> <?php echo $row['email']; ?></td>
									<td> <?php echo $row['telefono']; ?></td>
									<td> <?php echo $row['sexo']; ?></td>
									<td> <?php echo $row['linea_de_investigacion']; ?></td>
									<td> <a href="modrevi.php?num_trabajador=<?php echo $row['num_trabajador'];?>"" class="btn btn-info btn-lg ">
          <span class="glyphicon glyphicon-heart-empty"></span>   </a></td>
          							<td> <a href="eli_revisor.php?num_trabajador=<?php echo $row['num_trabajador'];?>" class="btn btn-info btn-lg btn-danger">
          <span class="glyphicon glyphicon-remove"></span>
        </a></td>
								</tr>

								<?php } ?>
								<tr><a href="nuevorevi.php"class="btn btn-info btn-lg btn-success">
          <span class="glyphicon glyphicon-plus"></span> Nuevo </a></tr>
						    </tbody>
						    </thead>
						</table>
					</div>
				</div>
			</div>
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
