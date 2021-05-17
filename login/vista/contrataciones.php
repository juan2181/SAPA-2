<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/estilos.css">

<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:login.php");
}
?>

<div class="container">
	




	<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SAPA</a>
        </div>
        	<div id="navbar" class="collapse navbar-collapse">
          		<ul class="nav navbar-nav">
            		<!-- <li class="active"><a href="index.php">Principal</a></li> -->
          
					<li><a href="admin.php">Inicio</a></li>
					<li><a href="usuarios.php">Usuarios</a></li>
					<li><a href="nuevo_contrato.php">Nuevo contrato</a></li>
					<li><a href="#">Reportes</a></li>
					<li><a href="#">Enlace 4</a></li>
					<li><a href="#">Enlace 5</a></li>
					<li><a href="#">Enlace 6</a></li>
					<li><a href="#">Enlace 7</a></li>
				
	            </ul>
            </div><!--/menu  -->
    </div>
    </nav>


		 <div class="starter-template">
							<br>
							<br>
							<br>
			     <div class="jumbotron">
					     <div class="container text-center">
								<h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
								<p> <span class="btn btn-success"><?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Admin' : 'Cliente'; ?></span> <a  href="cerrar-sesion.php" class="btn btn-danger">Cerrar sesión  </a></p>
								
						
					    </div>
			     </div>
				 <?php date_default_timezone_set('America/Bogota');
				 
					$mes=array("Enero", "Febrero", "Marzo","Abril", "Mayo", "Junio","Julio", "Agosto", "Septiembre", "Octubre","Noviembre", "Diciembre", "Septiembre");
				 ?>


				 <div style='text-align:right'><h3><?php echo  date("d"). " de " . $mes[date("m")-1] . " del 20" . date("y");?> <?php echo  date("h:i a");?></h3></div>
											

		</div> <!-- starter-template -->

				<div> <!-- contenedor Principal -->
				<br><br><br>

	<center>
	<div class="row">	
<div class="col-sm-4">
	<a href="contratacion_tomas.php"><img src="img/contratacion.png" title="Contratación" alt="Solicitud" width="80%" height="auto" /></a>
</div>

<div class="col-sm-4">
	<a href="catalogos.php"><img src="img/solicitudes_aceptadas.png" title="Aceptadas"  width="80%" height="auto" /></a>
</div>

<div class="col-sm-4">
	<a href="cobranza.php"><img src="img/cobrar_toma.png" title="Cobrar"  width="80%" height="auto" /></a>
</div>


</div>	
</center>


</div>






<?php include 'partials/footer.php';?>