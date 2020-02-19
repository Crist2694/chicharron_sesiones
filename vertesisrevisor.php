<?php
	require("conexion.php");

	$query="SELECT alumno.id_alumno as id,  formulario_protocolo.nombre_proyecto as Proyecto, alumno.nombre as Alumno from formulario_protocolo INNER JOIN alumno on alumno.id_alumno = formulario_protocolo.id_alumno ";


	$resultado=$mysqli->query($query);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>

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
			<li class="active"><a href="verformulariorevisor.php"><span class="glyphicon glyphicon-th"></span> Proyectos</a></li>
			<li class="active"><a href="formularioprotocolorevisor.php"><span class="glyphicon glyphicon-list-alt"></span> Proyectos</a></li>
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
				<li class="active">Tesis</li>
			</ol>
		</div><!--/.row-->



		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Datos Tesis</div>
					<div class="panel-body">
						<table  class="table table-hover" >
						    <thead>

						    <tr>
						    	<th data-field="name" data-sortable="true" >Proyecto</th>
						        <th data-field="name" data-sortable="true">Tesis</th>
						       <th data-field="name" data-sortable="true">Archivo</th>
						        <th data-field="state" data-checkbox="true">Formulario</a></th>
						        
						    </tr>
						    
						    
						    <tbody>
						    	<?php
 								while ($row=$resultado->fetch_assoc()) {
 					
								?>
								<tr>
									<td><?php echo $row['Proyecto']; ?> </td>
									<td> <?php echo $row['Alumno']; ?></td>
									<td></td>
									
									<td> <a href="formularioprotocolo.php?id_alumno=<?php echo $row['id'];?>"" class="btn btn-info btn-lg ">
          <span class="glyphicon glyphicon-heart-empty"></span>   </a></td>
          							
          <span class="glyphicon glyphicon-remove"></span>
        </a></td>
								</tr>

								<?php } ?>
								
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
