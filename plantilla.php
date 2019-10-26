<!DOCTYPE html>
<html lang="es">
<head>
	<title>Principio</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Custom styles for this template-->
	<link href="vistas/css/sb-admin.css" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vistas/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vistas/css/estilos2.css">
	<link rel="stylesheet" type="text/css" href="vistas/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vistas/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vistas/css/estilos.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="contenedor">
				<header>
					<nav class="navbar navbar-expand-lg navbar-dark barnav">
				  		<a class="navbar-brand" href="#"><img class="logo" src="img/Logo-white.png" alt="RedDents"></a>
				  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				    		<span class="navbar-toggler-icon"></span>
				  		</button>

				  		<?php 
				  			include_once("vistas/modulos/administrador/menuAdmin.php");
				  		 ?>

					</nav>
				</header>
			</div>
			<div class="col-lg-12 col-sm-12 row">
				<article class="col-lg-3 col-sm-12">
					<?php  
						include_once("vistas/modulos/administrador/menu_lateral.php");
					?>
				</article>
				<article class="col-lg-9 col-md-9 col-sm-9">
					<?php 
						$objControl = new Controlador();
						$objControl->enlancePaginasControl();
					 ?>
				</article>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript-->
  	<script src="vistas/js/jquery.min.js"></script>
  	<script src="vistas/js/bootstrap.bundle.min.js"></script>
  	<script src="vistas/js/jquery.easing.min.js"></script>


  	<!-- Custom scripts for all pages-->
  	<script src="vistas/js/sb-admin.min.js"></script>


  <!-- Core plugin JavaScript-->
  <script src="vistas/js/jquery.easing.min.js"></script>

  	<!-- dataTable -->
	<script src="vistas/datatable/js/jquery.dataTables.min.js"></script>
	<script src="vistas/datatable/js/dataTables.bootstrap4.min.js"></script>
	<script src="vistas/datatable/js/dataTables.responsive.min.js"></script>
	<script src="vistas/datatable/js/responsive.bootstrap4.min.js"></script>
	<script>
	  $(document).ready(function() {
	      $('#example').DataTable();
	  } );
	</script>
	<!-- Modal Eliminar -->
	<div class="modal fade modal-delete" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        ¿Estas seguro de eliminar?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-outline-info" data-dismiss="modal">No</button>
	        <button type="button" class="btn btn-outline-info">Si</button>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>