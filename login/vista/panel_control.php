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
					<li><a href="#">Nuevo contrato</a></li>
					<li><a href="#">Reportes</a></li>
					<li><a href="#">Enlace 4</a></li>
					<li><a href="#">Enlace 5</a></li>
					<li><a href="#">Enlace 6</a></li>
                    <li><a> <?php echo $_SESSION["usuario"]["nombre"]; ?> </a></li>
					<li><a href="#">Cerrar Sesión</a></li>
                    
	            
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
								<p> <span class="btn btn-success"><?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Admin' : 'Cliente'; ?></span></p>
								<p>
									<a href="cerrar-sesion.php" class="btn btn-danger">Cerrar sesión</a>
									<a href="#" class="btn btn-info">Corte de caja</a>
									
								</p>
					    </div>
			     </div>
		</div> <!-- starter-template -->


				<div class="col-md-5" > <!-- contenedor Principal -->
				<div> <!-- contenedor Busqueda -->
					<a href="usuarios.php" class="btn btn-primary btn-lg btn-block">Usuarios</a>
                    <a href="#" class="btn btn-primary btn-lg btn-block">Calles</a>
                   <!-- <a href="tarifas.php" class="btn btn-primary btn-lg btn-block">Zonas</a> -->
                    <a href="#" class="btn btn-primary btn-lg btn-block">Colonias</a>
                    <a href="#" class="btn btn-primary btn-lg btn-block">Tarifas</a>
					<a href="#" class="btn btn-primary btn-lg btn-block">Padron</a>

                    <!--<a title="Usuarios" href="usuarios.php"><img src="images/Usuarios.webp" alt="Usuarios" width="420" height="275"  /></a>
                    
						</div> <!-- contenedor Busqueda -->

							




				</div> <!-- contenedor Principal -->

					





</div><!-- /.container  general-->
<?php include 'partials/footer.php';?>